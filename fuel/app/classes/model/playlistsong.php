<?php

// ファイルパス: fuel/app/classes/model/playlistsong.php

class Model_PlaylistSong extends Model
{
    /**
     * 指定されたプレイリストに複数の楽曲を追加する
     * 既に登録されている曲はスキップする
     *
     * @param int $playlist_id プレイリストID
     * @param array $song_ids 追加する楽曲IDの配列
     * @return array 処理結果 ('success' => bool, 'added_count' => int, 'skipped_count' => int, 'message' => string)
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
            // 各song_idが数値かチェック (より厳密にするなら)
            if (!ctype_digit((string)$song_id) || (int)$song_id <= 0) {
                \Log::warning('不正な楽曲IDが配列に含まれています: ' . $song_id);
                $skipped_count++; // 不正なIDはスキップ扱い
                continue; // 次のループへ
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
                    // 既に存在する場合はスキップ
                    $skipped_count++;
                    continue; // 次のループへ
                }

                // --- 2. 未登録ならINSERT ---
                list($insert_id, $rows_affected) = DB::insert('playlist_songs')
                                                    ->set(array(
                                                        'playlist_id' => $playlist_id,
                                                        'song_id' => $song_id,
                                                        // created_at はDBデフォルト値
                                                    ))
                                                    ->execute();

                if ($rows_affected > 0) {
                    $added_count++; // 追加成功カウント
                } else {
                    // INSERTが成功しなかった場合 (通常は考えにくいが)
                    \Log::warning('playlist_songs への INSERT に失敗しましたがDBエラーは発生しませんでした。', array('playlist_id' => $playlist_id, 'song_id' => $song_id));
                    $skipped_count++; // スキップ扱いにする
                }

            } catch (\Database_Exception $e) {
                // 個別のINSERTエラー (万が一UNIQUE制約違反などが発生した場合)
                \Log::error('楽曲追加中のDBエラー: ' . $e->getMessage(), array('playlist_id' => $playlist_id, 'song_id' => $song_id));
                $errors[] = $song_id; // エラーが発生した楽曲IDを記録 (任意)
                $skipped_count++; // エラーもスキップ扱いにする
            }
        } // end foreach

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
                'error_song_ids' => $errors, // エラーIDリスト (任意)
            );
        }
    }
    /**
     * 指定されたプレイリストから特定の楽曲を削除する
     * @param int $playlist_id プレイリストID
     * @param int $song_id 削除する楽曲ID
     * @return bool 成功した場合 true、失敗した場合 false
     */
    public static function remove_song($playlist_id, $song_id)
    {
        try {
            $rows_affected = DB::delete('playlist_songs')
                                ->where('playlist_id', '=', $playlist_id)
                                ->where('song_id', '=', $song_id)
                                ->limit(1) // 念のため
                                ->execute();
            // 削除された行があれば成功とみなす (なければ元々なかっただけ)
            return true; // 厳密には $rows_affected > 0 を返す方が正確かも
        } catch (\Database_Exception $e) {
            \Log::error('楽曲削除中のDBエラー: ' . $e->getMessage(), array('playlist_id' => $playlist_id, 'song_id' => $song_id));
            return false;
        }
    }
}