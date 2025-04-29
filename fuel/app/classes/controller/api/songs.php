<?php

class Controller_Api_Songs extends Controller_Rest
{
    protected $_response_format = 'json';

    /**
     * 楽曲一覧を取得する (GET /api/songs)
     */
    public function get_index() // GETリクエストなのでメソッド名を get_index とする規約
    {
        try {
            // Modelを使って全楽曲を取得 (作成日時順)
            $songs = Model_Song::find_all();

            $response = array(
                'success' => true,
                'songs' => $songs, // 取得した楽曲リストを返す
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));

        } catch (\Exception $e) { // より広範なエラーを捕捉
            \Log::error('楽曲一覧APIエラー: ' . $e->getMessage());
            $response = array(
                'success' => false,
                'message' => '楽曲一覧の取得中にエラーが発生しました。',
            );
            return \Response::forge(\Format::forge($response)->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }

    public function post_upload()
    {
        $config = array(
            'path' => DOCROOT.'assets/uploads/songs',
            'randomize' => true,
            'ext_whitelist' => array('mp3', 'wav'),
            'max_size' => 1024 * 1024 * 50, // php.iniに合わせてこちらも調整推奨
            // 'mime_whitelist' => array('audio/mpeg', 'audio/wav', 'audio/x-wav'),
        );

        Upload::process($config);

        if (Upload::is_valid())
        {
            Upload::save();
            $saved_files = Upload::get_files();
            $saved_file_info = $saved_files[0];
            \Log::debug('Saved file info: ' . print_r($saved_file_info, true));

            // --- ⑥ 楽曲名生成 (修正版：マルチバイト対応) ---
            $original_filename = $saved_file_info['name'];
            \Log::debug('Original filename: ' . $original_filename);
            $song_name = preg_replace('/\\.(mp3|wav)$/i', '', $original_filename);
            if (empty($song_name) && !empty($original_filename)) {
                $song_name = $original_filename;
                \Log::warning('楽曲名の生成に失敗したようです。元のファイル名を楽曲名として使用します: ' . $original_filename);
            }
            \Log::debug('Song name generated: ' . $song_name);

            // --- ⑦ データベース登録 (Model呼び出し) ---
            $data_to_save = array(
                'name' => $song_name, // ★修正された $song_name を使う
                'file_path' => $saved_file_info['saved_to'].$saved_file_info['saved_as']
            );
            \Log::debug('Data to save in DB: ' . print_r($data_to_save, true));
            $song_id = Model_Song::create_song($data_to_save);

            // --- ⑧ 成功レスポンスを返す (DB登録結果も考慮) ---
            if ($song_id !== false) {
                $response = array(
                    'success' => true,
                    'message' => '楽曲が正常にアップロードされ、登録されました。',
                    'file_info' => array(
                        'id' => $song_id,
                        'name' => $song_name, // ★正しい $song_name が入るはず
                        'saved_path' => $data_to_save['file_path'],
                    ),
                );
                // ★ レスポンス形式を明示的に指定 (前回修正済み)
                return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));
            } else {
                \Log::error('DB登録に失敗しました。File: ' . $data_to_save['file_path']);
                $response = array(
                    'success' => false,
                    'message' => 'ファイルのアップロードは成功しましたが、データベースへの登録に失敗しました。',
                    'errors' => array('データベースエラーが発生しました。詳細はログを確認してください。'),
                );
                 // ★ レスポンス形式を明示的に指定 (前回修正済み)
                return \Response::forge(\Format::forge($response)->to_json(), 500, array('Content-Type' => 'application/json'));
            }

        }
        else
        {
            // --- ⑨ 検証NGの場合のエラー処理 ---
            $errors = Upload::get_errors();
            \Log::error('Upload validation errors: ' . print_r($errors, true));
            $error_messages = array();
             foreach ($errors as $error) {
                 if (isset($error['errors'][0]['message'])) {
                      $error_messages[] = $error['errors'][0]['message'];
                 } elseif (isset($error['message'])) {
                      $error_messages[] = $error['message'];
                 } else {
                      $error_messages[] = '不明なアップロードエラー (code: '.$error['error'].')';
                 }
             }
            $response = array(
                'success' => false,
                'message' => 'ファイルのアップロードに失敗しました。',
                'errors' => $error_messages,
            );
             // ★ レスポンス形式を明示的に指定 (前回修正済み)
            return \Response::forge(\Format::forge($response)->to_json(), 400, array('Content-Type' => 'application/json'));
        }
    }
}