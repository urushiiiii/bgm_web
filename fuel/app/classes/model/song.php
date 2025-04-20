<?php
class Model_Song extends \Model {
     /** @return array */
    //全ての楽曲データを取得するメソッド
    public static function find_all()
    {
        try{
            $query=DB::select('*')
            ->from('songs')
            ->order_by('created_at','asc');
            $result=$query->execute()->as_array();
            return $result;
        }catch(\Database_Exception $e){
            \Log::error('データベースエラー:'.$e->getMessage());
            return array();
        }
    }
    //新しい楽曲をデータベースに登録するメソッド
    public static function create_song($data)
    {
        // 必須データが含まれているか簡易チェック (Controller側でもバリデーションすべき)
        if (empty($data['name']) || empty($data['file_path'])) {
            \Log::error('楽曲登録データ不足: nameまたはfile_pathが空です。');
            return false;
        }

        try {
            // DB::insert を使って songs テーブルにデータを挿入
            list($insert_id, $rows_affected) = DB::insert('songs')
                                                ->set(array(
                                                    'name' => $data['name'],
                                                    'file_path' => $data['file_path'],
                                                    // created_at はDBのデフォルト値で自動設定されるはず
                                                ))
                                                ->execute();

            if ($rows_affected > 0) {
                return $insert_id; // 成功したら挿入IDを返す
            } else {
                \Log::warning('楽曲登録に失敗しましたが、DBエラーは発生しませんでした。');
                return false; // 影響行数が0の場合
            }

        } catch (\Database_Exception $e) {
            // データベースエラーが発生した場合 (例: file_pathのUNIQUE制約違反など)
            \Log::error('データベースエラー[登録]: ' . $e->getMessage() . ' Data: ' . print_r($data, true));
            return false; // 失敗したら false を返す
        }
    }

}