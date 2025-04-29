<?php

class Controller_Api_Playlists extends Controller_Rest
{
    protected $_response_format = 'json';

    public function post_create()
    {
        $playlist_name_raw = \Input::post('name', null); // デフォルト値nullを指定

        // POSTされたデータを取得し、前後の空白を削除
        $playlist_name = trim($playlist_name_raw);

        // 簡単なバリデーション (名前が空でないか)
        if (empty($playlist_name)) {
            return \Response::forge(\Format::forge(array(
                'success' => false,
                'message' => 'プレイリスト名を入力してください。'
            ))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // Modelを呼び出してプレイリスト作成を試みる
        $playlist_id = Model_Playlist::create_playlist($playlist_name); // Modelには trim 済みの値を渡す

        // ... (以降の成功・失敗レスポンス処理は変更なし) ...
         if ($playlist_id !== false) {
             // 作成成功
             $response = array(
                 'success' => true,
                 'message' => 'プレイリストを作成しました。',
                 'playlist' => array(
                     'id' => $playlist_id,
                     'name' => $playlist_name, // trim済みの名前を返す
                 )
             );
             return \Response::forge(\Format::forge($response)->to_json(), 201, array('Content-Type' => 'application/json'));
         } else {
             // 作成失敗 (名前重複の可能性が高い)
             return \Response::forge(\Format::forge(array(
                 'success' => false,
                 'message' => 'プレイリストの作成に失敗しました。同じ名前のプレイリストが既に存在する可能性があります。'
             ))->to_json(), 409, array('Content-Type' => 'application/json'));
         }
    }
    public function post_songs($playlist_id = null)
    {
        // パラメータチェック
        if ($playlist_id === null || !ctype_digit((string)$playlist_id)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効なプレイリストIDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $playlist_id = (int)$playlist_id;

        // POSTされた楽曲IDの配列を取得 (例: 'song_ids[]' というキーで送られてくると想定)
        $song_ids = \Input::post('song_ids', array()); // デフォルトは空配列

        // ID配列が空、または配列でない場合はエラー
        if (empty($song_ids) || !is_array($song_ids)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '追加する楽曲が選択されていません。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // ★★★ (重要) Model を呼び出して中間テーブルへの登録処理を行う ★★★
        // (これから Model_PlaylistSong クラスと add_songs メソッドを作ると想定)
        $result = Model_PlaylistSong::add_songs($playlist_id, $song_ids);

        if ($result['success']) {
            // 成功した場合
            $response = array(
                'success' => true,
                'message' => $result['added_count'] . ' 曲をプレイリストに追加しました。',
                'added_count' => $result['added_count'], // 実際に追加された曲数
                'skipped_count' => $result['skipped_count'], // 重複などでスキップされた曲数
                // (必要なら追加された楽曲の簡易情報を返すことも可能)
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json')); // 200 OK
        } else {
            // 失敗した場合 (Model側でエラーハンドリング)
            return \Response::forge(\Format::forge(array(
                'success' => false,
                'message' => $result['message'] ?? '楽曲の追加中にエラーが発生しました。', // Modelからのエラーメッセージ
            ))->to_json(), 500, array('Content-Type' => 'application/json')); // 500 Internal Server Error
        }
    }

    public function get_songs($playlist_id = null) // GETリクエストなのでメソッド名は get_ で始める
    {
        // パラメータチェック
        if ($playlist_id === null || !ctype_digit((string)$playlist_id)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効なプレイリストIDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $playlist_id = (int)$playlist_id;

        try {
            // Modelの find_details を流用するか、楽曲リスト取得専用メソッドを作る
            // ここでは find_details を使う例 (ただしプレイリスト情報自体は不要)
            $playlist_data = Model_Playlist::find_details($playlist_id);

            if ($playlist_data === null) {
                 // プレイリストが見つからない場合 (404 Not Found)
                return \Response::forge(\Format::forge(array('success' => false, 'message' => '指定されたプレイリストが見つかりません。'))->to_json(), 404, array('Content-Type' => 'application/json'));
            }

            $response = array(
                'success' => true,
                'songs' => $playlist_data['songs'] // 楽曲リストだけを返す
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));

        } catch (\Exception $e) {
            \Log::error('プレイリスト楽曲一覧APIエラー: ' . $e->getMessage() . ' Playlist ID: ' . $playlist_id);
            $response = array(
                'success' => false,
                'message' => '楽曲リストの取得中にエラーが発生しました。',
            );
            return \Response::forge(\Format::forge($response)->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }
}