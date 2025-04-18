<?php
class Model_Song extends \Model {
     /** @return array */
    public static function find_all()
    {
        try{
            $query=DB::select('*')
            ->from('songs')
            ->order_by('created_at','asc');
            $result=$query->execute()->as_array();
            return $result;
        }catch(\Database_Exception $e){
            \Log::error('データベースエラー:'.$e->getMessage());
            return array();
        }
    }

}