<?php
// ファイルパス: fuel/app/classes/controller/home.php

class Controller_Home extends Controller_Template
{
    /**
     * トップページ (ホーム / ダッシュボード)
     */
    public function action_index()
    {
        // --- Viewに渡すデータを準備する配列 ---
        $data = array();

        // --- ① プレイリスト一覧取得 ---
        try {
            $data['playlists'] = Model_Playlist::find_all();
        } catch (\Exception $e) {
            \Log::error('プレイリスト一覧取得エラー: ' . $e->getMessage());
            $data['playlists'] = array(); // エラー時は空にする
        }

        // --- ② 予約一覧取得 ---
        try {
            $data['reservations'] = Model_Reservation::find_all_with_playlist_name(); // ← Model呼び出しに変更
        } catch (\Exception $e) {
            \Log::error('予約一覧取得エラー(Controller): ' . $e->getMessage());
            $data['reservations'] = array(); // エラー時は空配列
        }

        // --- ③ 再生ログ一覧取得とページネーション ---
        try {
            // Pagination設定ファイルをロード (念のため毎回ロード)
            \Config::load('pagination', true);

            // ログの総件数を取得
            $total_items = Model_PlayLog::count_all_logs();
            \Log::debug('[Pagination Debug] Total log items found: ' . $total_items); // デバッグログ

            // 1ページあたりの表示件数を設定ファイルから取得 (なければデフォルト10)
            $per_page = \Config::get('pagination.default.per_page', 10);
            \Log::debug('[Pagination Debug] Items per page setting: ' . $per_page); // デバッグログ

            // Paginationクラスに渡す設定配列を作成
            $config = array(
                 //'pagination_url' => \Uri::create('home/index'), // 固定URLではなく現在のURLを使う方が確実な場合が多い
                 'pagination_url' => \Uri::current(), // 現在のURLをベースにする
                'total_items'    => $total_items,       // 全アイテム数
                'per_page'       => $per_page,          // 1ページあたり表示件数
                'uri_segment'    => 'page',             // ページ番号を取得するクエリ文字列キー
                // num_links や template は pagination.php で設定済みならここで上書き不要
            );
            \Log::debug('[Pagination Debug] Config: ' . print_r($config, true)); // 設定内容をログ出力

            // Paginationインスタンスを作成
            $pagination = \Pagination::forge('log_pagination', $config); // 'log_pagination' は任意の識別子

            // Paginationオブジェクトの状態をログ出力 (デバッグ用)
            ob_start();
            var_dump($pagination);
            $pagination_dump = ob_get_clean();
            \Log::debug('[Pagination Debug] Pagination Object Dump: ' . $pagination_dump);

            // Modelを呼び出して該当ページのログデータを取得し、$data配列に入れる
            $data['logs'] = Model_PlayLog::find_logs(
                $pagination->per_page,
                $pagination->offset // offset は $pagination が自動計算してくれる
            );

            // Viewに渡すページネーションリンクのHTMLを生成し、$data配列に入れる
            $data['pagination_links_html'] = $pagination->render();
            \Log::debug('[Pagination Debug] Rendered HTML: ' . $data['pagination_links_html']); // 生成されたHTMLをログ出力

        } catch (\Exception $e) {
            // ログ取得またはPagination処理でエラーが発生した場合
            \Log::error('再生ログ/ページネーション処理エラー: ' . $e->getMessage());
            $data['logs'] = array(); // ログは空にする
            $data['pagination_links_html'] = '<p style="color:red;">ログ表示中にエラーが発生しました。</p>'; // エラーメッセージ
        }

        // --- ④ View を設定 ---
        $this->template->title = 'BGMアプリ - ホーム';
        // $data 配列（playlists, logs, pagination_links_html などを含む）を View に渡す
        $this->template->content = View::forge('home/index', $data);
    }
}