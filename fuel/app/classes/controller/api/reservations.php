<?php

// ファイルパス: fuel/app/classes/controller/api/reservations.php

class Controller_Api_Reservations extends Controller_Rest
{
    protected $_response_format = 'json';

    /**
     * 新しい再生予約を作成する 
     */
    public function post_create()
    {
        // --- 1. POSTデータ取得 ---
        $playlist_id = \Input::post('playlist_id', null);
        $date_str = \Input::post('date', null); // YYYY-MM-DD
        $time_str = \Input::post('time', null); // HH:MM

        // --- 2. バリデーション ---
        if (empty($playlist_id) || !ctype_digit((string)$playlist_id) || empty($date_str) || empty($time_str)) {
            return \Response::forge(\Format::forge(array('success' => false, 'message' => 'プレイリスト、日付、時刻は必須です。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // 日付と時刻を結合して DATETIME 形式にする
        $datetime_str = $date_str . ' ' . $time_str . ':00';
        // 有効な日時か簡易チェック
        if (strtotime($datetime_str) === false) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '日時の形式が無効です。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // --- 3. Model呼び出し ---
        $result = Model_Reservation::create_reservation((int)$playlist_id, $datetime_str);

        // --- 4. 結果に応じてレスポンス生成 ---
        if ($result === 'duplicate') {
            // 日時重複エラー
            return \Response::forge(\Format::forge(array('success' => false, 'message' => '指定された日時 ('.$datetime_str.') には既に予約が存在します。'))->to_json(), 409, array('Content-Type' => 'application/json')); 
        } elseif ($result !== false) {
            // 作成成功 
            $response = array(
                'success' => true,
                'message' => '予約を作成しました。',
                'reservation' => array( 
                    'id' => $result,
                    'playlist_id' => (int)$playlist_id,
                    'reservation_datetime' => $datetime_str,
                    'status' => 'reserved',
                )
            );
            return \Response::forge(\Format::forge($response)->to_json(), 201, array('Content-Type' => 'application/json')); 
        } else {
            // その他のエラー
            return \Response::forge(\Format::forge(array('success' => false, 'message' => '予約の作成中にエラーが発生しました。'))->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }
    /**
     * 予約一覧を取得する 
     */
    public function get_index() 
    {
        try {
            // Model を使ってプレイリスト名付きで全予約を取得
            $reservations = Model_Reservation::find_all_with_playlist_name();

            $response = array(
                'success' => true,
                'reservations' => $reservations,
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));

        } catch (\Exception $e) {
            \Log::error('予約一覧APIエラー: ' . $e->getMessage());
            $response = array('success' => false, 'message' => '予約一覧の取得中にエラーが発生しました。');
            return \Response::forge(\Format::forge($response)->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }

    /**
     * 指定されたIDの予約を削除する (DELETE /api/reservations/delete/:id)
     */
    public function action_delete($id = null) 
    {
         // パラメータチェック
        if ($id === null || !ctype_digit((string)$id) || (int)$id <= 0) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効な予約IDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $id = (int)$id;

        // Modelを呼び出して削除処理
        $result = Model_Reservation::delete_reservation($id);

         if ($result) {
             // 成功 
             return \Response::forge(\Format::forge(array('success' => true, 'message' => '予約を削除しました。'))->to_json(), 200, array('Content-Type' => 'application/json'));
         } else {
             // 失敗 
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '予約の削除に失敗しました。該当の予約が見つからないか、サーバーエラーが発生しました。'))->to_json(), 500, array('Content-Type' => 'application/json'));
         }
    }
    /**
     * 指定されたIDの予約情報を取得する 
     */
    public function get_reservation($id = null)
    {
        if ($id === null || !ctype_digit((string)$id) || (int)$id <= 0) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効な予約IDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $id = (int)$id;

        try {
            $reservation = Model_Reservation::find_by_id($id);

            if ($reservation) {
                $response = array(
                    'success' => true,
                    'reservation' => $reservation,
                );
                return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));
            } else {
                return \Response::forge(\Format::forge(array('success' => false, 'message' => '指定された予約が見つかりません。'))->to_json(), 404, array('Content-Type' => 'application/json'));
            }
        } catch (\Exception $e) {
             \Log::error('予約取得APIエラー: ' . $e->getMessage() . ' ID: ' . $id);
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '予約情報の取得中にエラーが発生しました。'))->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }
    /**
     * 指定されたIDの予約情報を更新する (POST /api/reservations/update/:id)
     * @param int $id 更新する予約のID (URLから取得)
     */
    public function post_update($id = null) 
    {
         // パラメータチェック
        if ($id === null || !ctype_digit((string)$id) || (int)$id <= 0) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効な予約IDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $id = (int)$id;

        // POSTデータ取得
        $playlist_id = \Input::post('playlist_id', null);
        $date_str = \Input::post('date', null);
        $time_str = \Input::post('time', null);

        // バリデーション
        if (empty($playlist_id) || !ctype_digit((string)$playlist_id) || empty($date_str) || empty($time_str)) {
            return \Response::forge(\Format::forge(array('success' => false, 'message' => 'プレイリスト、日付、時刻は必須です。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $datetime_str = $date_str . ' ' . $time_str . ':00';
        if (strtotime($datetime_str) === false) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '日時の形式が無効です。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // Model呼び出し用のデータ準備
        $data_to_update = array(
            'playlist_id' => (int)$playlist_id,
            'reservation_datetime' => $datetime_str,
        );

        // Model呼び出し
        $result = Model_Reservation::update_reservation($id, $data_to_update);

        // 結果に応じてレスポンス生成
        if ($result === 'duplicate') {
            return \Response::forge(\Format::forge(array('success' => false, 'message' => '指定された日時 ('.$datetime_str.') には既に他の予約が存在します。'))->to_json(), 409, array('Content-Type' => 'application/json'));
        } elseif ($result === true) {
            $response = array(
                'success' => true,
                'message' => '予約を更新しました。',
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));
        } else {
            return \Response::forge(\Format::forge(array('success' => false, 'message' => '予約の更新中にエラーが発生しました。'))->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }
    /**
     * 指定されたIDの予約ステータスを更新する (POST /api/reservations/:id/status)
     */
    public function action_update_status($id = null) 
    {
        // IDチェック
        if ($id === null || !ctype_digit((string)$id) || (int)$id <= 0) {
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '無効な予約IDです。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }
        $id = (int)$id;

        // 新しいステータスをPOSTデータから取得
        $new_status = \Input::json('status', null);
        \Log::debug('Received status update request: ID=' . $id . ' Status=' . print_r($new_status, true)); 
        if ($new_status === null) {
            \Log::warning('ステータスがリクエストボディから取得できませんでした。');
            return \Response::forge(\Format::forge(array('success' => false, 'message' => 'ステータスが指定されていません。'))->to_json(), 400, array('Content-Type' => 'application/json'));
        }

        // Modelを呼び出してステータスを更新
        $result = Model_Reservation::update_status($id, $new_status);

        if ($result) {
            $response = array(
                'success' => true,
                'message' => '予約ステータスを更新しました。'
            );
            return \Response::forge(\Format::forge($response)->to_json(), 200, array('Content-Type' => 'application/json'));
        } else {
             // Model側で不正なステータス値などもチェックしている想定
             return \Response::forge(\Format::forge(array('success' => false, 'message' => '予約ステータスの更新に失敗しました。'))->to_json(), 500, array('Content-Type' => 'application/json'));
        }
    }

}