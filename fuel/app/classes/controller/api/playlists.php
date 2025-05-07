<?php

class Controller_Api_Playlists extends Controller_Rest
{
    protected $_response_format = 'json';

    public function post_create()
    {
        $playlist_name = trim(\Input::post('name', null));
        if (empty($playlist_name)) {
            return \Response::forge(\Format::forge(array('success' => false, 'message' => 'プレイリスト名を入力してください。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        $result = Model_Playlist::create_playlist($playlist_name);

        //  Modelからの返り値 ($result) で処理を分岐 
        if ($result === 'duplicate') {
            // ---- 重複エラーの場合 ----
            return \Response::forge(\Format::forge(array(
                'success' => false,
                'message' => '同じ名前のプレイリストが既に存在します。' 
            ))->to_json(), 409, array('Content-Type' => 'application/json')); 

        } elseif ($result !== false && is_int($result)) {
            // ---- 作成成功の場合  ----
            $response = array(
                'success' => true,
                'message' => 'プレイリストを作成しました。',
                'playlist' => array( 'id' => $result, 'name' => $playlist_name )
            );
            return \Response::forge(\Format::forge($response)->to_json(), 201, array('Content-Type' => 'application/json')); 

        } else {
            // ---- その他の作成失敗の場合  ----
            return \Response::forge(\Format::forge(array(
                'success' => false,
                'message' => 'プレイリストの作成中に予期せぬエラーが発生しました。'
            ))->to_json(), 500, array('Content-Type' => 'application/json')); 
        }
    }
    public function post_songs($playlist_id = null)
    {
        // パラメータチェック
        if ($playlist_id === null || !ctype_digit((string)$playlist_id)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効なプレイリストIDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $playlist_id = (int)$playlist_id;

        // POSTされた楽曲IDの配列を取得 
        $song_ids = \Input::post('song_ids', array()); 

        // ID配列が空、または配列でない場合はエラー
        if (empty($song_ids) || !is_array($song_ids)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '追加する楽曲が選択されていません。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $result = Model_PlaylistSong::add_songs($playlist_id, $song_ids);

        if ($result['success']) {
            // 成功した場合
            $response = array(
                'success' => true,
                'message' => $result['added_count'] . ' 曲をプレイリストに追加しました。',
                'added_count' => $result['added_count'], 
                'skipped_count' => $result['skipped_count'], 
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json')); 
        } else {
            // 失敗した場合 
            return \Response::forge(\Format::forge(array(
                'success' => false,
                'message' => $result['message'] ?? '楽曲の追加中にエラーが発生しました。', 
            ))->to_json(), 500, array('Content-Type' => 'application/json')); 
        }
    }

    public function get_songs($playlist_id = null) 
    {
        // パラメータチェック
        if ($playlist_id === null || !ctype_digit((string)$playlist_id)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効なプレイリストIDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $playlist_id = (int)$playlist_id;

        try {
            $playlist_data = Model_Playlist::find_details($playlist_id);

            if ($playlist_data === null) {
                 // プレイリストが見つからない場合
                return \Response::forge(\Format::forge(array('success' => false, 'message' => '指定されたプレイリストが見つかりません。'))->to_json(), 404, array('Content-Type' => 'application/json'));
            }

            $formatted_songs = array();
                foreach ($playlist_data['songs'] as $song) {
                    $absolute_path = $song['file_path']; // DBからの絶対パス
                    $doc_root_path = DOCROOT;
                    $relative_path = '/' . ltrim(str_replace(str_replace('/', DIRECTORY_SEPARATOR, $doc_root_path), '', $absolute_path), DIRECTORY_SEPARATOR);
                    $web_path = str_replace(DIRECTORY_SEPARATOR, '/', $relative_path); // Web用パス

                    $formatted_songs[] = array(
                        'id' => $song['id'],
                        'name' => $song['name'],
                        'file_path' => $web_path, 
                    );
                }

            $response = array(
                'success' => true,
                'songs' => $formatted_songs
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

        /**
     * プレイリストから特定の楽曲を削除する 
     */
    public function delete_song($playlist_id = null, $song_id = null)
    {
        // パラメータチェック
        if ($playlist_id === null || !ctype_digit((string)$playlist_id) || $song_id === null || !ctype_digit((string)$song_id)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効なプレイリストIDまたは楽曲IDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // Modelを呼び出して削除処理 
        $result = Model_PlaylistSong::remove_song((int)$playlist_id, (int)$song_id);

        if ($result) {
            return \Response::forge(\Format::forge(array(
                'success' => true,
                'message' => 'プレイリストから楽曲を削除しました。'
            ))->to_json(), 200, array('Content-Type' => 'application/json')); 
        } else {
            return \Response::forge(\Format::forge(array(
                'success' => false,
                'message' => '楽曲の削除に失敗しました。'
            ))->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }

    /**
     * 指定されたプレイリスト自体を削除する 
     */
    public function delete_playlist($id = null)
    {
         // パラメータチェック
        if ($id === null || !ctype_digit((string)$id)) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効なプレイリストIDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // Modelを呼び出して削除処理 
        $result = Model_Playlist::delete_playlist((int)$id);

         if ($result) {
             return \Response::forge(\Format::forge(array(
                 'success' => true,
                 'message' => 'プレイリストを削除しました。'
             ))->to_json(), 200, array('Content-Type' => 'application/json')); 
         } else {
             return \Response::forge(\Format::forge(array(
                 'success' => false,
                 'message' => 'プレイリストの削除に失敗しました。'
             ))->to_json(), 500, array('Content-Type' => 'application/json'));
         }
    }
    
    /**
     * プレイリスト一覧を取得する 
     */
    public function get_index() 
    {
        try {
            // Modelを使って全プレイリストを取得 
            $playlists = Model_Playlist::find_all();

            $response = array(
                'success' => true,
                'playlists' => $playlists, 
            );
            // 明示的にJSONを返す 
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));

        } catch (\Exception $e) {
            \Log::error('プレイリスト一覧APIエラー: ' . $e->getMessage());
            $response = array('success' => false, 'message' => 'プレイリスト一覧の取得中にエラーが発生しました。');
            return \Response::forge(\Format::forge($response)->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }
}