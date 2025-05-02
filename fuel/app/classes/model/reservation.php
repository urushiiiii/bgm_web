<?php

// ファイルパス: fuel/app/classes/model/reservation.php

class Model_Reservation extends Model
{
    /**
     * 全ての予約情報をプレイリスト名付きで取得する
     * (予約日時の昇順で取得)
     *
     * @return array 予約情報の配列
     */
    public static function find_all_with_playlist_name()
    {
        try {
            $query = DB::select(
                            'reservations.id', // 予約ID
                            'reservations.reservation_datetime', // 予約日時
                            'reservations.status', // 予約状態
                            array('playlists.name', 'playlist_name'),
                            'reservations.created_at', // 予約作成日時 (任意)
                            'reservations.updated_at' // 予約更新日時 (任意)
                        )
                        ->from('reservations')
                        ->join('playlists', 'INNER') // playlists テーブルを内部結合
                        ->on('reservations.playlist_id', '=', 'playlists.id') // playlist_id で結合
                        ->order_by('reservations.reservation_datetime', 'asc'); // 予約日時の昇順

            return $query->execute()->as_array();

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約一覧取得]: ' . $e->getMessage());
            return array(); // エラー時は空配列
        }
    }

    /**
     * 新しい再生予約を作成する
     * @param int $playlist_id プレイリストID
     * @param string $datetime_str 予約日時文字列 (YYYY-MM-DD HH:MM:SS 形式)
     * @return mixed 成功時は作成された予約のID、失敗時は false (既に予約がある場合は 'duplicate')
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

        // TODO: 予約日時が過去でないかチェックするロジックを追加しても良い

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
                                                    'status' => 'reserved', // 初期状態
                                                    // created_at, updated_at はDBデフォルト値
                                                ))
                                                ->execute();

            if ($rows_affected > 0) {
                return $insert_id; // 成功したら挿入IDを返す
            } else {
                return false; // INSERT失敗 (通常は起こりにくい)
            }

        } catch (\Database_Exception $e) {
            // DBエラー (UNIQUE制約違反がここで捕捉される可能性もある)
            \Log::error('データベースエラー[予約作成]: ' . $e->getMessage(), array('playlist_id' => $playlist_id, 'datetime' => $datetime_str));
            // 重複エラーコード(例: MySQLの1062)か判定して 'duplicate' を返すことも可能
            if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
                 return 'duplicate';
            }
            return false; // その他のDBエラー
        }
    }

    /**
     * 指定されたIDの予約を削除する
     * @param int $id 削除する予約のID
     * @return bool 成功した場合 true、失敗または該当なしの場合 false
     */
    public static function delete_reservation($id)
    {
        if (!ctype_digit((string)$id) || (int)$id <= 0) {
            \Log::warning('不正な予約IDが削除メソッドに渡されました: ' . $id);
            return false;
        }
        $id = (int)$id;

        try {
            // DB::delete を使って reservations テーブルから指定IDのレコードを削除
            $rows_affected = DB::delete('reservations')
                                ->where('id', '=', $id)
                                ->limit(1) // IDなので1件のみ対象
                                ->execute();

            return ($rows_affected > 0); // 1件削除できれば成功

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約削除]: ' . $e->getMessage() . ' Reservation ID: ' . $id);
            return false;
        }
    }
    /**
     * 指定されたIDの予約情報を1件取得する
     * @param int $id 取得する予約のID
     * @return array|null 予約データの連想配列、見つからない場合は null
     */
    public static function find_by_id($id)
    {
        if (!ctype_digit((string)$id) || (int)$id <= 0) {
            return null;
        }
        $id = (int)$id;

        try {
            $query = DB::select('*') // 今回は全カラム取得 (必要に応じて絞る)
                        ->from('reservations')
                        ->where('id', '=', $id)
                        ->limit(1);
            return $query->execute()->current(); // 結果を連想配列で返す (なければ false が返る想定)
        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約取得]: ' . $e->getMessage() . ' Reservation ID: ' . $id);
            return null;
        }
    }
    /**
     * 指定されたIDの予約情報を更新する
     * @param int $id 更新する予約のID
     * @param array $data 更新するデータ ('playlist_id' => int, 'reservation_datetime' => string)
     * @return mixed 成功時は true, 日時重複時は 'duplicate', 失敗時は false
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
        // TODO: 未来の日時かチェック

        try {
            // --- 更新しようとしている日時に、自分以外の予約が存在しないかチェック ---
            $count = DB::select(DB::expr('COUNT(*) as count'))
                        ->from('reservations')
                        ->where('reservation_datetime', '=', $datetime_str)
                        ->where('id', '!=', $id) // ★ 自分自身は除く ★
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
                                    // status はここでは変更しない想定 (もし必要なら $data に含める)
                                    // updated_at はDBの機能で自動更新されるはず
                                ))
                                ->where('id', '=', $id)
                                ->execute();

            // execute() は影響行数を返す (更新されなくても0が返る)
            // 更新成功したかどうかの判定は難しいが、エラーが出なければOKとするか、
            // 更新前後のデータを比較するなどが必要。ここではエラーなければ成功とみなす。
            return true; // 例外が出なければ成功扱い

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[予約更新]: ' . $e->getMessage(), array('id' => $id, 'data' => $data));
            if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
                 return 'duplicate'; // UNIQUE制約違反の場合
            }
            return false;
        }
    }
}