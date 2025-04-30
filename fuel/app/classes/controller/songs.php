<?php

class Controller_Songs extends Controller_Template
{
    /**
     * 楽曲一覧ページ ( /songs )
     * データ取得はJavaScriptで行うため、ここではViewを表示するだけ
     */
    public function action_index()
    {
        // --- View に渡すデータは空（または不要） ---
        $data = array(); // 空の配列

        // --- View を設定 ---
        $this->template->title = '楽曲一覧';
        // データは渡さずにViewファイルを指定
        $this->template->content = View::forge('songs/index', $data);
    }
}