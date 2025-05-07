<?php

// ファイルパス: fuel/app/classes/controller/playlist.php

class Controller_Playlist extends Controller_Template // 共通レイアウトを使用
{
    /**
     * プレイリスト詳細ページ表示 ( /playlist/view/:id )
     */
    public function action_view($id = null)
    {
        // --- 1. パラメータチェック ---
        if ($id === null || !ctype_digit((string)$id)) {
             \Log::warning('不正なプレイリストIDが指定されました。ID: ' . $id);
             throw new HttpNotFoundException; 
        }
        // Sessionに表示したプレイリストIDを保存 
        \Session::set('last_viewed_playlist_id', $id);

        // --- 2. Model を呼び出してデータを取得 ---
        $playlist_data = Model_Playlist::find_details((int)$id); 

        // --- 3. データ存在チェック ---
        if ($playlist_data === null) {
            \Log::warning('存在しないプレイリストIDが指定されました。ID: ' . $id);
            throw new HttpNotFoundException; 
        }

        // --- 4. View に渡すデータを準備 ---
        $data = array();
        $data['playlist'] = $playlist_data['playlist']; 
        $data['songs'] = $playlist_data['songs'];       

        // --- 5. View を設定 ---
        $this->template->title = 'プレイリスト: ' . e($data['playlist']['name']);
        $this->template->content = View::forge('playlist/view', $data);
    }

}