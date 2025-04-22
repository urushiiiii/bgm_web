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
}