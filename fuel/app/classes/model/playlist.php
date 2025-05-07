<?php

// ファイルパス: fuel/app/classes/model/playlist.php

class Model_Playlist extends Model
{
    /**
     * 全てのプレイリストを作成日時の昇順で取得する
     */
    public static function find_all()
    {
        try {
            $query = DB::select('*')
                        ->from('playlists')
                        ->order_by('created_at', 'asc'); 
            return $query->execute()->as_array();
        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[プレイリスト一覧取得]: ' . $e->getMessage());
            return array(); 
        }
    }

    /**
     * 新しいプレイリストを作成する
     */
    public static function create_playlist($name)
    {
        if (empty($name)) {
            \Log::warning('プレイリスト作成エラー: 名前が空です。');
            return false; 
        }

        try {
            list($insert_id, $rows_affected) = DB::insert('playlists')
                                                ->set(array(
                                                    'name' => $name,
                                                ))
                                                ->execute();

            if ($rows_affected > 0) {
                return $insert_id; 
            } else {
                return false;
            }
        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[プレイリスト作成]: ' . $e->getMessage() . ' Name: ' . $name);
            if ($e->getCode() == 23000 || strpos(strtolower($e->getMessage()), 'duplicate entry') !== false || strpos(strtolower($e->getMessage()), '1062') !== false) {
                return 'duplicate'; 
            }
            return false;
        }
    }

    public static function find_details($playlist_id)
    {
        // 引数が正しいか基本的なチェック
        if (!ctype_digit((string)$playlist_id) || (int)$playlist_id <= 0) {
            \Log::warning('不正なプレイリストIDがModelに渡されました: ' . $playlist_id);
            return null;
        }
        $playlist_id = (int)$playlist_id; 

        try {
            // --- 1. 指定されたIDのプレイリスト情報を取得 ---
            $playlist_query = DB::select('*')
                                ->from('playlists')
                                ->where('id', '=', $playlist_id)
                                ->limit(1); 

            $playlist = $playlist_query->execute()->current(); 

            // プレイリストが見つからなかった場合
            if (!$playlist) {
                \Log::info('指定されたプレイリストが見つかりません。ID: ' . $playlist_id);
                return null; 
            }

            // --- 2. そのプレイリストに含まれる楽曲リストを取得 ---
            $songs_query = DB::select(
                                'songs.id', 
                                'songs.name', 
                                'songs.file_path', 
                            )
                            ->from('playlist_songs')
                            ->join('songs', 'INNER') 
                            ->on('playlist_songs.song_id', '=', 'songs.id') 
                            ->where('playlist_songs.playlist_id', '=', $playlist_id) 
                            ->order_by('playlist_songs.created_at', 'asc'); 

            $songs = $songs_query->execute()->as_array(); 

            // --- 3. プレイリスト情報と楽曲リストをまとめて返す ---
            return array(
                'playlist' => $playlist, 
                'songs' => $songs       
            );

        } catch (\Database_Exception $e) {
            \Log::error('データベースエラー[プレイリスト詳細取得]: ' . $e->getMessage() . ' Playlist ID: ' . $playlist_id);
            return null; 
        }
    }
    /**
     * 指定されたIDのプレイリストを削除する
     */
    public static function delete_playlist($id)
    {
        try {
            $rows_affected = DB::delete('playlists')
                                ->where('id', '=', $id)
                                ->limit(1)
                                ->execute();
            return ($rows_affected > 0); 
        } catch (\Database_Exception $e) {
            \Log::error('プレイリスト削除中のDBエラー: ' . $e->getMessage() . ' Playlist ID: ' . $id);
            return false;
        }
    }
}