<?php

// ファイルパス: fuel/app/classes/model/playlistsong.php

class Model_PlaylistSong extends Model
{
    /**
     * 指定されたプレイリストに複数の楽曲を追加する
     */
    public static function add_songs($playlist_id, $song_ids)
    {
        // パラメータの基本的な検証
        if (!ctype_digit((string)$playlist_id) || (int)$playlist_id <= 0 || !is_array($song_ids)) {
            \Log::warning('不正なパラメータが add_songs に渡されました。', array('playlist_id' => $playlist_id, 'song_ids' => $song_ids));
            return array('success' => false, 'message' => '不正なパラメータです。');
        }
        $playlist_id = (int)$playlist_id;
        $added_count = 0;
        $skipped_count = 0;
        $errors = array();

        foreach ($song_ids as $song_id) {
            // 各song_idが数値かチェック 
            if (!ctype_digit((string)$song_id) || (int)$song_id <= 0) {
                \Log::warning('不正な楽曲IDが配列に含まれています: ' . $song_id);
                $skipped_count++; 
                continue; 
            }
            $song_id = (int)$song_id;

            try {
                // --- 1. 既に登録済みかチェック ---
                $count = DB::select(DB::expr('COUNT(*) as count'))
                            ->from('playlist_songs')
                            ->where('playlist_id', '=', $playlist_id)
                            ->where('song_id', '=', $song_id)
                            ->execute()
                            ->get('count');

                if ($count > 0) {
                    $skipped_count++;
                    continue; 
                }

                // --- 2. 未登録ならINSERT ---
                list($insert_id, $rows_affected) = DB::insert('playlist_songs')
                                                    ->set(array(
                                                        'playlist_id' => $playlist_id,
                                                        'song_id' => $song_id,
                                                    ))
                                                    ->execute();

                if ($rows_affected > 0) {
                    $added_count++; 
                } else {
                    \Log::warning('playlist_songs への INSERT に失敗しましたがDBエラーは発生しませんでした。', array('playlist_id' => $playlist_id, 'song_id' => $song_id));
                    $skipped_count++; 
                }

            } catch (\Database_Exception $e) {
                // 個別のINSERTエラー 
                \Log::error('楽曲追加中のDBエラー: ' . $e->getMessage(), array('playlist_id' => $playlist_id, 'song_id' => $song_id));
                $errors[] = $song_id; 
                $skipped_count++; 
            }
        } 

        // --- 3. 最終的な結果を返す ---
        if (empty($errors)) {
            $message = $added_count . ' 曲を追加しました。';
            if ($skipped_count > 0) {
                $message .= ' ' . $skipped_count . ' 曲は既に追加済みか、無効なIDのためスキップしました。';
            }
            return array(
                'success' => true,
                'added_count' => $added_count,
                'skipped_count' => $skipped_count,
                'message' => $message,
            );
        } else {
            return array(
                'success' => false,
                'added_count' => $added_count,
                'skipped_count' => $skipped_count,
                'message' => '一部の楽曲追加中にエラーが発生しました。詳細はログを確認してください。',
                'error_song_ids' => $errors, 
            );
        }
    }
    /**
     * 指定されたプレイリストから特定の楽曲を削除する
     */
    public static function remove_song($playlist_id, $song_id)
    {
        try {
            $rows_affected = DB::delete('playlist_songs')
                                ->where('playlist_id', '=', $playlist_id)
                                ->where('song_id', '=', $song_id)
                                ->limit(1) 
                                ->execute();
            return true; 
        } catch (\Database_Exception $e) {
            \Log::error('楽曲削除中のDBエラー: ' . $e->getMessage(), array('playlist_id' => $playlist_id, 'song_id' => $song_id));
            return false;
        }
    }
}