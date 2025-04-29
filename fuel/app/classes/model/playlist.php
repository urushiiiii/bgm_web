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

    public static function find_details($playlist_id)
    {
        // まずは引数が正しいか基本的なチェック (Controllerでもチェック済みだが念のため)
        if (!ctype_digit((string)$playlist_id) || (int)$playlist_id <= 0) {
            \Log::warning('不正なプレイリストIDがModelに渡されました: ' . $playlist_id);
            return null;
        }
        $playlist_id = (int)$playlist_id; // 整数型に変換

        try {
            // --- 1. 指定されたIDのプレイリスト情報を取得 ---
            $playlist_query = DB::select('*')
                                ->from('playlists')
                                ->where('id', '=', $playlist_id)
                                ->limit(1); // 主キーなので必ず1件か0件

            $playlist = $playlist_query->execute()->current(); // 該当がなければ false が返る

            // プレイリストが見つからなかった場合
            if (!$playlist) {
                \Log::info('指定されたプレイリストが見つかりません。ID: ' . $playlist_id);
                return null; // Controller側で404処理をする想定
            }

            // --- 2. そのプレイリストに含まれる楽曲リストを取得 ---
            // playlist_songs テーブルを経由して songs テーブルを JOIN (結合) する
            $songs_query = DB::select(
                                'songs.id', // 曲のID
                                'songs.name', // 曲名
                                'songs.file_path', // ファイルパス
                            )
                            ->from('playlist_songs')
                            ->join('songs', 'INNER') // songs テーブルを内部結合 (INNER JOIN)
                            ->on('playlist_songs.song_id', '=', 'songs.id') // 結合条件: song_id で繋ぐ
                            ->where('playlist_songs.playlist_id', '=', $playlist_id) // このプレイリストIDを持つものだけ
                            ->order_by('playlist_songs.created_at', 'asc'); // プレイリストに追加された順に並び替え

            $songs = $songs_query->execute()->as_array(); // 結果を配列として取得

            // --- 3. プレイリスト情報と楽曲リストをまとめて返す ---
            return array(
                'playlist' => $playlist, // プレイリスト情報の連想配列
                'songs' => $songs       // 楽曲情報の連想配列 の 配列
            );

        } catch (\Database_Exception $e) {
            // データベース関連のエラーが発生した場合
            \Log::error('データベースエラー[プレイリスト詳細取得]: ' . $e->getMessage() . ' Playlist ID: ' . $playlist_id);
            return null; // エラー時も null を返す (Controllerでハンドリング)
        }
    }
}