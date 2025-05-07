<?php

class Controller_Songs extends Controller_Template
{
    /**
     * 楽曲一覧ページ ( /songs )
     * ここではViewを表示するだけ
     */
    public function action_index()
    {
        $data = array(); 
        $this->template->title = '楽曲一覧';
        $this->template->content = View::forge('songs/index', $data);
    }
}