<?php

class Controller_Api_Logs extends Controller_Rest
{
    protected $_response_format = 'json';
    protected $song_id_from_request = null; 

    /**
     * 各アクションが実行される前に実行されるメソッド
     */
    public function before()
    {
        parent::before();

        // 1. POSTリクエストかどうかチェック
        if (\Input::method() !== 'POST') {
            \Log::warning('ログ記録APIへの不正なリクエストメソッド: ' . \Input::method());
            $response = array('success' => false, 'message' => '許可されていないメソッドです。');
            $this->response($response, 405)->send(true); 
            exit(); 
        }

        // 2. song_id パラメータの存在と形式チェック
        $this->song_id_from_request = \Input::json('song_id', null);

        // もしJSONでなければPOSTパラメータも試す
        if ($this->song_id_from_request === null) {
             $this->song_id_from_request = \Input::post('song_id', null);
        }


        if (empty($this->song_id_from_request) || !ctype_digit((string)$this->song_id_from_request)) {
            \Log::warning('ログ記録APIへの不正なパラメータ: song_id=' . print_r($this->song_id_from_request, true));
            $response = array('success' => false, 'message' => '必須パラメータ (song_id) が無効です。');
            $this->response($response, 400)->send(true);
            exit();
        }

        $this->song_id_from_request = (int)$this->song_id_from_request;
    }

    /**
     * 再生ログを記録するアクション
     */
    public function action_play()  
    {
        $song_id = $this->song_id_from_request;
        $result = Model_PlayLog::record_log($song_id);
        if ($result) {
             return \Response::forge(\Format::forge(array('success' => true, 'message' => '再生ログを記録しました。'))->to_json(), 201, array('Content-Type' => 'application/json'));
        } else {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '再生ログの記録に失敗しました。'))->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }
}