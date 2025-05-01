<?php

// ファイルパス: fuel/app/classes/model/playlog.php

class Model_PlayLog extends Model
{
    /**
     * 再生ログを記録する
     * @param int $song_id 再生された楽曲のID
     * @return bool 成功した場合 true、失敗した場合 false
     */
    public static function record_log($song_id)
    {
        // song_id が整数か基本的なチェック
        if (!ctype_digit((string)$song_id) || (int)$song_id <= 0) {
            \Log::warning('不正な楽曲IDがログ記録メソッドに渡されました: ' . $song_id);
            return false;
        }
        $song_id = (int)$song_id;

        try {
            // DB::insert を使って play_logs テーブルにデータを挿入
            // created_at はDBのデフォルト値で自動設定される想定
            list($insert_id, $rows_affected) = DB::insert('play_logs')
                                                ->set(array(
                                                    'song_id' => $song_id,
                                                ))
                                                ->execute();

            return ($rows_affected > 0); // 1行挿入されれば成功

        } catch (\Database_Exception $e) {
            // 外部キー制約違反 (存在しない song_id) などでエラーになる可能性
            \Log::error('データベースエラー[ログ記録]: ' . $e->getMessage() . ' Song ID: ' . $song_id);
            return false;
        }
    }

    /**
     * 全ての再生ログの件数を取得する
     * @return int 全ログ件数
     */
    public static function count_all_logs()
    {
        try {
            return DB::count_records('play_logs');
        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[ログ件数取得]: ' . $e->getMessage());
            return 0;
        }
    }

    /**
     * 指定された範囲の再生ログを取得する (ページネーション用)
     * @param int $limit 1ページあたりの表示件数
     * @param int $offset 取得開始位置
     * @return array ログデータの配列
     */
    public static function find_logs($limit = 20, $offset = 0) // ★ 引数追加
    {
        try {
            $query = DB::select('play_logs.created_at', 'songs.name')
                        ->from('play_logs')
                        ->join('songs', 'INNER')
                        ->on('play_logs.song_id', '=', 'songs.id')
                        ->order_by('play_logs.created_at', 'desc') // 新しい順
                        ->limit($limit)   // ★ 件数制限
                        ->offset($offset); // ★ 開始位置指定

            return $query->execute()->as_array();
        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[ログ一覧取得]: ' . $e->getMessage());
            return array();
        }
    }
}