<?php

namespace Fuel\Migrations;

class Create_songs
{
    public function up()
    {
        \DBUtil::create_table('songs', array(
            'id' => array('type' => 'int', 'unsigned' => true, 'auto_increment' => true, 'comment' => '楽曲ID'),
            'name' => array('constraint' => 255, 'type' => 'varchar', 'null' => false, 'comment' => '楽曲名'),
            'file_path' => array('constraint' => 255, 'type' => 'varchar', 'null' => false, 'unique' => true, 'comment' => 'ファイルパス'),
            'created_at' => array('type' => 'datetime', 'null' => false, 'default' => \DB::expr('CURRENT_TIMESTAMP'), 'comment' => '作成日時'),

        ), array('id'),
        true, 
       );
    }

    public function down()
    {
        \DBUtil::drop_table('songs');
    }
}