<?php
class Controller_Home extends Controller_Template
{
    public function action_index()
    {
        $data = array();
        $data['playlists'] = array(); // 仮の空配列
        $data['reservations'] = array(); // 仮の空配列
        $data['logs'] = array(); // 仮の空配列
        $this->template->title = 'BGMアプリ - ホーム';
        $this->template->content = View::forge('home/index', $data);
    }

}