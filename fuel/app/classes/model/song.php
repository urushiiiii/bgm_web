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
        // 必須データが含まれているか簡易チェック 
        if (empty($data['name']) || empty($data['file_path'])) {
            \Log::error('楽曲登録データ不足: nameまたはfile_pathが空です。');
            return false;
        }

        try {
            list($insert_id, $rows_affected) = DB::insert('songs')
                                                ->set(array(
                                                    'name' => $data['name'],
                                                    'file_path' => $data['file_path'],
                                                ))
                                                ->execute();

            if ($rows_affected > 0) {
                return $insert_id; 
            } else {
                \Log::warning('楽曲登録に失敗しましたが、DBエラーは発生しませんでした。');
                return false; 
            }

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[登録]: ' . $e->getMessage() . ' Data: ' . print_r($data, true));
            return false; 
        }
    }

}