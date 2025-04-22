<?php

// ファイルパス: fuel/app/classes/model/playlist.php

class Model_Playlist extends Model
{
    /**
     * 全てのプレイリストを作成日時の昇順で取得する
     * @return array プレイリストデータの配列
     */
    public static function find_all()
    {
        try {
            $query = DB::select('*')
                        ->from('playlists')
                        ->order_by('created_at', 'asc'); // 作成順で取得
            return $query->execute()->as_array();
        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[プレイリスト一覧取得]: ' . $e->getMessage());
            return array(); // エラー時は空配列
        }
    }

    /**
     * 新しいプレイリストを作成する
     * @param string $name プレイリスト名
     * @return mixed 成功時は作成されたプレイリストのID、失敗時は false
     */
    public static function create_playlist($name)
    {
        if (empty($name)) {
            \Log::warning('プレイリスト作成エラー: 名前が空です。');
            return false; // 名前が空なら失敗
        }

        try {
            list($insert_id, $rows_affected) = DB::insert('playlists')
                                                ->set(array(
                                                    'name' => $name,
                                                    // created_at はDBデフォルト値
                                                ))
                                                ->execute();

            if ($rows_affected > 0) {
                return $insert_id; // 成功したら挿入IDを返す
            } else {
                return false;
            }
        } catch (\Database_Exception $e) {
            // Database_Exception を捕捉 (UNIQUE制約違反などもここで捕捉される)
            \Log::error('データベースエラー[プレイリスト作成]: ' . $e->getMessage() . ' Name: ' . $name);
            return false; // 失敗
        }
    }

    // (今後、プレイリスト削除(delete_playlist)などのメソッドを追加)
}