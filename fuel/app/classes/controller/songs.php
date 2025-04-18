<?php
class Controller_Songs extends Controller_Template{
    public function action_index(){
        $songs=Model_Song::find_all();
        $data=array();
        $data['songs']=$songs;
        $this->template->title='楽曲一覧';
        $this->template->content=View::forge('songs/index',$data);
    }
}