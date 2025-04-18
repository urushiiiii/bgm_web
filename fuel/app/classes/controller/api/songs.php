<?php 
class Controller_Api_Songs extends Controller_Rest{
    protected $_response_format = 'json';
    public function post_upload(){
        //ファイルアップロード処理の準備
        $config=array(
            'path'=> DOCROOT.'assets/uploads/songs',
            'randomize'=> true,
            'ext_whitelist' => array('mp3', 'wav'), 
            'max_size' => 1024 * 1024 * 10,
            'mime_whitelist' => array('audio/mpeg', 'audio/wav', 'audio/x-wav'),
        );
        Upload::process($config);
        //アップロードファイルの検証
        if(Upload::is_valid()){
            //ファイルの保存
            Upload::save();
            //保存したファイルの取得
            $saved_files = Upload::get_files();
            $saved_file_info = $saved_files[0]; 
            // --- ⑤ (TODO) ファイル名重複チェック (DB) ---
            // Model_Song::is_filepath_exists($saved_file_info['saved_as']) などで確認？
            // saved_as にはランダム化されたファイル名が入る

            // --- ⑥ (TODO) 楽曲名生成 ---
            // 元のファイル名($saved_file_info['name'])から拡張子を除いて楽曲名を生成

            // --- ⑦ (TODO) データベース登録 (Model呼び出し) ---
            // Model_Song::create_song(['name' => $song_name, 'file_path' => $saved_file_info['saved_to'].$saved_file_info['saved_as']]);

            //成功レスポンスを返す
            $response = array(
                'success' => true,
                'message' => '楽曲が正常にアップロードされました。',
                'file_info' => array( // 登録した情報などを返す
                    'name' => '(生成した楽曲名)', // 仮
                    'saved_path' => $saved_file_info['saved_to'].$saved_file_info['saved_as'],
                ),
            );
            return $this->response($response, 200); // HTTPステータス 200 (OK)

        }
        else
        {
            // 検証NGの場合 (ファイル形式エラー、サイズオーバーなど)

            // --- ⑨ エラー情報の取得とエラーレスポンス ---
            $errors = Upload::get_errors();
            \Log::error('Upload validation errors: ' . print_r($errors, true));
            $error_messages = array();
            foreach ($errors as $error) {
                // エラー内容に応じてメッセージを整形
                $error_messages[] = $error['errors'][0]['message']; // FuelPHPのエラー構造に依存
            }

            $response = array(
                'success' => false,
                'message' => 'ファイルのアップロードに失敗しました。',
                'errors' => $error_messages,
            );
            // エラー内容に応じて適切なHTTPステータスコードを返す (例: 400 Bad Request)
            return $this->response($response, 400);
        }
    }
}