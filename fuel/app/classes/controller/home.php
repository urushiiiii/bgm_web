<?php
// ファイルパス: fuel/app/classes/controller/home.php

class Controller_Home extends Controller_Template
{
    //トップページ
    public function action_index()
    {
        // --- Viewに渡すデータを準備する配列 ---
        $data = array();

        // --- ① プレイリスト一覧取得 ---
        try {
            $data['playlists'] = Model_Playlist::find_all();
        } catch (\Exception $e) {
            \Log::error('プレイリスト一覧取得エラー: ' . $e->getMessage());
            $data['playlists'] = array(); 
        }

        // --- ② 予約一覧取得 ---
        try {
            $data['reservations'] = Model_Reservation::find_all_with_playlist_name(); 
        } catch (\Exception $e) {
            \Log::error('予約一覧取得エラー(Controller): ' . $e->getMessage());
            $data['reservations'] = array(); 
        }

        // --- ③ 再生ログ一覧取得とページネーション ---
        try {
            // Pagination設定ファイルをロード
            \Config::load('pagination', true);

            // ログの総件数を取得
            $total_items = Model_PlayLog::count_all_logs();

            // 1ページあたりの表示件数を設定ファイルから取得
            $per_page = \Config::get('pagination.default.per_page', 10);

            // Paginationクラスに渡す設定配列を作成
            $config = array(
                'pagination_url' => \Uri::current(), 
                'total_items'    => $total_items,      
                'per_page'       => $per_page,         
                'uri_segment'    => 'page',            
            );

            // Paginationインスタンスを作成
            $pagination = \Pagination::forge('log_pagination', $config); 

            // Modelを呼び出して該当ページのログデータを取得し、$data配列に入れる
            $data['logs'] = Model_PlayLog::find_logs(
                $pagination->per_page,
                $pagination->offset 
            );

            // Viewに渡すページネーションリンクのHTMLを生成し、$data配列に入れる
            $data['pagination_links_html'] = $pagination->render();
        } catch (\Exception $e) {
            // ログ取得またはPagination処理でエラーが発生した場合
            \Log::error('再生ログ/ページネーション処理エラー: ' . $e->getMessage());
            $data['logs'] = array(); 
            $data['pagination_links_html'] = '<p style="color:red;">ログ表示中にエラーが発生しました。</p>'; 
        }

        //  Sessionから最後に見たプレイリストIDを取得し、nullの場合は 0 をセット 
        $last_viewed_id_from_session = \Session::get('last_viewed_playlist_id', null);
        $data['last_viewed_playlist_id'] = ($last_viewed_id_from_session === null) ? 0 : (int)$last_viewed_id_from_session;

        // --- ④ View を設定 ---
        $this->template->title = 'BGMアプリ - ホーム';
        $this->template->content = View::forge('home/index', $data);
    }
}