<?php

// ファイルパス: fuel/app/classes/controller/playlist.php

class Controller_Playlist extends Controller_Template // 共通レイアウトを使用
{
    /**
     * プレイリスト詳細ページ表示 ( /playlist/view/:id )
     *
     * @param int|null $id URLから渡されるプレイリストID
     */
    public function action_view($id = null)
    {
        // --- 1. パラメータチェック ---
        // IDが渡されていない、または数値でない場合はエラーページ(404)を表示
        if ($id === null || !ctype_digit((string)$id)) {
             \Log::warning('不正なプレイリストIDが指定されました。ID: ' . $id);
             throw new HttpNotFoundException; // 404エラーを発生させる
        }
        // ★★★ Sessionに表示したプレイリストIDを保存 ★★★
        \Session::set('last_viewed_playlist_id', $id);
        \Log::debug('Sessionに保存: last_viewed_playlist_id = ' . $id); // ログ確認用

        // --- 2. Model を呼び出してデータを取得 ---
        $playlist_data = Model_Playlist::find_details((int)$id); // IDを整数にキャスト

        // --- 3. データ存在チェック ---
        // Modelからデータが返ってこなかった場合 (該当IDのプレイリストが存在しない)
        if ($playlist_data === null) {
            \Log::warning('存在しないプレイリストIDが指定されました。ID: ' . $id);
            throw new HttpNotFoundException; // 404エラーを発生させる
        }

        // --- 4. View に渡すデータを準備 ---
        $data = array();
        $data['playlist'] = $playlist_data['playlist']; // プレイリスト情報
        $data['songs'] = $playlist_data['songs'];       // 含まれる楽曲リスト

        // --- 5. View を設定 ---
        // テンプレートのタイトルにプレイリスト名を含める
        $this->template->title = 'プレイリスト: ' . e($data['playlist']['name']);
        // テンプレートのコンテンツ部分に表示するViewファイルを指定し、データを渡す
        $this->template->content = View::forge('playlist/view', $data);
    }

}