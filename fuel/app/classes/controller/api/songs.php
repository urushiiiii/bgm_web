<?php

use Fuel\Core\Controller_Rest; 
use Fuel\Core\Upload; 
use Fuel\Core\Log; 
use Fuel\Core\Input; 
use Fuel\Core\Response; 
use Fuel\Core\Format; 

class Controller_Api_Songs extends Controller_Rest
{
    protected $_response_format = 'json';

    /**
     * 楽曲一覧を取得する (GET /api/songs)
     */
    public function get_index()
    {
        try {
            $songs = Model_Song::find_all();
            $formatted_songs = array(); 
            foreach ($songs as $song) {
                // DBから取得した絶対パス
                $absolute_path = $song['file_path'];
                $doc_root_path = DOCROOT;
                // 絶対パスから DOCROOT 部分を取り除き、Webルートからの相対パスを作成
                $relative_path = '/' . ltrim(str_replace(str_replace('/', DIRECTORY_SEPARATOR, $doc_root_path), '', $absolute_path), DIRECTORY_SEPARATOR);
                // 最終的なパスを / に統一 (Web用)
                $web_path = str_replace(DIRECTORY_SEPARATOR, '/', $relative_path);

                $formatted_songs[] = array(
                    'id' => $song['id'],
                    'name' => $song['name'],
                    'file_path' => $web_path, 
                    'created_at' => $song['created_at'],
                );
            }

            $response = array(
                'success' => true,
                'songs' => $formatted_songs,
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));

        } catch (\Exception $e) {
            \Log::error('楽曲一覧APIエラー: ' . $e->getMessage());
            return \Response::forge(\Format::forge(array(/*...*/))->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }

    public function post_upload()
    {
        $config = array(
            'path' => DOCROOT.'assets/uploads/songs',
            'randomize' => true,
            'ext_whitelist' => array('mp3', 'wav'),
            'max_size' => 1024 * 1024 * 50,
        );

        Upload::process($config);

        if (Upload::is_valid())
        {
            Upload::save();
            $saved_files = Upload::get_files();
            $saved_file_info = $saved_files[0];
            \Log::debug('Saved file info: ' . print_r($saved_file_info, true));

            // 楽曲名生成 
            $original_filename = $saved_file_info['name'];
            \Log::debug('Original filename: ' . $original_filename);
            $song_name = preg_replace('/\\.(mp3|wav)$/i', '', $original_filename);
            if (empty($song_name) && !empty($original_filename)) {
                $song_name = $original_filename;
                \Log::warning('楽曲名の生成に失敗したようです。元のファイル名を楽曲名として使用します: ' . $original_filename);
            }
            \Log::debug('Song name generated: ' . $song_name);

            // データベース登録 
            $data_to_save = array(
                'name' => $song_name, 
                'file_path' => $saved_file_info['saved_to'].$saved_file_info['saved_as']
            );
            \Log::debug('Data to save in DB: ' . print_r($data_to_save, true));
            $song_id = Model_Song::create_song($data_to_save);

            // 成功レスポンスを返す
            if ($song_id !== false) {
                $response = array(
                    'success' => true,
                    'message' => '楽曲が正常にアップロードされ、登録されました。',
                    'file_info' => array(
                        'id' => $song_id,
                        'name' => $song_name, 
                        'saved_path' => $data_to_save['file_path'],
                    ),
                );
                return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));
            } else {
                \Log::error('DB登録に失敗しました。File: ' . $data_to_save['file_path']);
                $response = array(
                    'success' => false,
                    'message' => 'ファイルのアップロードは成功しましたが、データベースへの登録に失敗しました。',
                    'errors' => array('データベースエラーが発生しました。詳細はログを確認してください。'),
                );
                return \Response::forge(\Format::forge($response)->to_json(), 500, array('Content-Type' => 'application/json'));
            }

        }
        else
        {
            // 検証NGの場合のエラー処理
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
            return \Response::forge(\Format::forge($response)->to_json(), 400, array('Content-Type' => 'application/json'));
        }
    }
}