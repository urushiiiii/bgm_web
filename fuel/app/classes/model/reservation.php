<?php

// ファイルパス: fuel/app/classes/model/reservation.php

class Model_Reservation extends Model
{
    /**
     * 全ての予約情報をプレイリスト名付きで取得する 
     */
    public static function find_all_with_playlist_name()
    {
        try {
            $query = DB::select(
                            'reservations.id',
                            'reservations.playlist_id', 
                            'reservations.reservation_datetime',
                            'reservations.status',
                            array('playlists.name', 'playlist_name'),
                            'reservations.created_at',
                            'reservations.updated_at' 
                        )
                        ->from('reservations')
                        ->join('playlists', 'INNER')
                        ->on('reservations.playlist_id', '=', 'playlists.id')
                        ->order_by('reservations.reservation_datetime', 'asc');

            return $query->execute()->as_array();

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約一覧取得]: ' . $e->getMessage());
            return array();
        }
    }
    /**
     * 新しい再生予約を作成する
     */
    public static function create_reservation($playlist_id, $datetime_str)
    {
        // パラメータの基本的な検証
        if (!ctype_digit((string)$playlist_id) || (int)$playlist_id <= 0 || empty($datetime_str)) {
            \Log::warning('不正なパラメータが create_reservation に渡されました。', array('playlist_id' => $playlist_id, 'datetime' => $datetime_str));
            return false;
        }
        $playlist_id = (int)$playlist_id;

        // 日時文字列が正しい形式か確認 (より厳密なチェックも可能)
        if (strtotime($datetime_str) === false) {
            \Log::warning('不正な日時形式です: ' . $datetime_str);
            return false;
        }

        try {
            // --- 同じ日時に既に予約がないかチェック (DBのUNIQUE制約に頼ることもできる) ---
            $count = DB::select(DB::expr('COUNT(*) as count'))
                        ->from('reservations')
                        ->where('reservation_datetime', '=', $datetime_str)
                        ->execute()
                        ->get('count');

            if ($count > 0) {
                \Log::info('指定された日時には既に予約が存在します: ' . $datetime_str);
                return 'duplicate'; // 重複を示す特別な値を返す
            }

            // --- 予約を登録 ---
            list($insert_id, $rows_affected) = DB::insert('reservations')
                                                ->set(array(
                                                    'playlist_id' => $playlist_id,
                                                    'reservation_datetime' => $datetime_str,
                                                    'status' => 'reserved', 
                                                ))
                                                ->execute();

            if ($rows_affected > 0) {
                return $insert_id; 
            } else {
                return false; 
            }

        } catch (\Database_Exception $e) {
            // DBエラー 
            \Log::error('データベースエラー[予約作成]: ' . $e->getMessage(), array('playlist_id' => $playlist_id, 'datetime' => $datetime_str));
            // 重複エラーコード
            if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
                 return 'duplicate';
            }
            return false; // その他のDBエラー
        }
    }

    /**
     * 指定されたIDの予約を削除する
     */
    public static function delete_reservation($id)
    {
        if (!ctype_digit((string)$id) || (int)$id <= 0) {
            \Log::warning('不正な予約IDが削除メソッドに渡されました: ' . $id);
            return false;
        }
        $id = (int)$id;

        try {
            $rows_affected = DB::delete('reservations')
                                ->where('id', '=', $id)
                                ->limit(1) 
                                ->execute();

            return ($rows_affected > 0); // 1件削除できれば成功

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約削除]: ' . $e->getMessage() . ' Reservation ID: ' . $id);
            return false;
        }
    }
    /**
     * 指定されたIDの予約情報を1件取得する
     */
    public static function find_by_id($id)
    {
        if (!ctype_digit((string)$id) || (int)$id <= 0) {
            return null;
        }
        $id = (int)$id;

        try {
            $query = DB::select('*') 
                        ->from('reservations')
                        ->where('id', '=', $id)
                        ->limit(1);
            return $query->execute()->current(); // 結果を連想配列で返す
        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約取得]: ' . $e->getMessage() . ' Reservation ID: ' . $id);
            return null;
        }
    }
    /**
     * 指定されたIDの予約情報を更新する
     */
    public static function update_reservation($id, $data)
    {
        if (!ctype_digit((string)$id) || (int)$id <= 0 || empty($data['playlist_id']) || !ctype_digit((string)$data['playlist_id']) || (int)$data['playlist_id'] <= 0 || empty($data['reservation_datetime'])) {
            \Log::warning('不正なパラメータが update_reservation に渡されました。', array('id' => $id, 'data' => $data));
            return false;
        }
        $id = (int)$id;
        $data['playlist_id'] = (int)$data['playlist_id'];
        $datetime_str = $data['reservation_datetime'];

        // 日時形式チェック
        if (strtotime($datetime_str) === false) {
            \Log::warning('不正な日時形式です (更新): ' . $datetime_str);
            return false;
        }

        try {
            // --- 更新しようとしている日時に、自分以外の予約が存在しないかチェック ---
            $count = DB::select(DB::expr('COUNT(*) as count'))
                        ->from('reservations')
                        ->where('reservation_datetime', '=', $datetime_str)
                        ->where('id', '!=', $id) 
                        ->execute()
                        ->get('count');

            if ($count > 0) {
                \Log::info('更新しようとした日時には既に他の予約が存在します: ' . $datetime_str . ' (ID: ' . $id . ' 以外)');
                return 'duplicate'; // 重複エラー
            }

            // --- 予約情報を更新 ---
            $rows_affected = DB::update('reservations')
                                ->set(array(
                                    'playlist_id' => $data['playlist_id'],
                                    'reservation_datetime' => $datetime_str,
                                ))
                                ->where('id', '=', $id)
                                ->execute();
            return true; // 例外が出なければ成功扱い

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約更新]: ' . $e->getMessage(), array('id' => $id, 'data' => $data));
            if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
                 return 'duplicate'; // UNIQUE制約違反の場合
            }
            return false;
        }
    }
    /**
     * 指定されたIDの予約ステータスを更新する
     */
    public static function update_status($id, $status) 
    {
        // パラメータ検証
        if (!ctype_digit((string)$id) || (int)$id <= 0 || empty($status)) {
            \Log::warning('不正なパラメータが update_status に渡されました。', array('id' => $id, 'status' => $status));
            return false;
        }
        $id = (int)$id;
        // 有効なステータスかチェック
        $allowed_statuses = ['played', 'canceled', 'dismissed', 'reserved', 'error'];
        if (!in_array($status, $allowed_statuses)) {
             \Log::warning('許可されていないステータスです: ' . $status);
             return false;
        }

        try {
            // reservations テーブルの status カラムを更新
            $rows_affected = DB::update('reservations')
                                ->set(array(
                                    'status' => $status,
                                ))
                                ->where('id', '=', $id)
                                ->execute();
            return true;

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約ステータス更新]: ' . $e->getMessage() . ' ID: ' . $id . ' Status: ' . $status);
            return false;
        }
    }
}