<?php

// ファイルパス: fuel/app/classes/controller/api/logs.php

class Controller_Api_Logs extends Controller_Rest
{
    protected $_response_format = 'json';
    protected $song_id_from_request = null; // beforeでチェックした値を保持する用

    /**
     * 各アクションが実行される前に実行されるメソッド
     */
    public function before()
    {
        // Controller_Rest の before をまず実行 (必須ではないが推奨)
        parent::before();

        // --- ここから事前チェック ---

        // 1. POSTリクエストかどうかチェック
        if (\Input::method() !== 'POST') {
            \Log::warning('ログ記録APIへの不正なリクエストメソッド: ' . \Input::method());
            // メソッドが許可されていない、というエラー(405 Method Not Allowed)を返す
            $response = array('success' => false, 'message' => '許可されていないメソッドです。');
            $this->response($response, 405)->send(true); // response()を呼び出して処理を終了させる
            exit(); //念のため
        }

        // 2. song_id パラメータの存在と形式チェック
        // JSONボディで送られてくる想定 ('Content-Type: application/json')
        $this->song_id_from_request = \Input::json('song_id', null);

        // もしJSONでなければPOSTパラメータも試す (FormDataなどで送られた場合)
        if ($this->song_id_from_request === null) {
             $this->song_id_from_request = \Input::post('song_id', null);
        }


        if (empty($this->song_id_from_request) || !ctype_digit((string)$this->song_id_from_request)) {
            \Log::warning('ログ記録APIへの不正なパラメータ: song_id=' . print_r($this->song_id_from_request, true));
            // パラメータが不正、というエラー(400 Bad Request)を返す
            $response = array('success' => false, 'message' => '必須パラメータ (song_id) が無効です。');
            $this->response($response, 400)->send(true);
            exit();
        }

        // 事前チェックを通過したら、song_id を整数にキャストしておく
        $this->song_id_from_request = (int)$this->song_id_from_request;

        // before() で return しなければ、通常のアクションメソッドが実行される
    }

    /**
     * 再生ログを記録するアクション (POST /api/logs/play)
     */
    public function post_play()
    {
        // before() でチェック・取得済みの song_id を使う
        $song_id = $this->song_id_from_request;

        // Modelを呼び出してログを記録
        $result = Model_PlayLog::record_log($song_id);

        if ($result) {
            $response = array('success' => true, 'message' => '再生ログを記録しました。');
            return $this->response($response, 201); // 201 Created (リソース作成成功)
        } else {
            $response = array('success' => false, 'message' => '再生ログの記録に失敗しました。');
            return $this->response($response, 500); // 500 Internal Server Error
        }
    }
}