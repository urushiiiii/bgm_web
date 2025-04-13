<?php

namespace Fuel\Migrations;

class Create_play_logs
{
    public function up()
    {
        \DBUtil::create_table(
            'play_logs', 
            array(
                'id' => array('type' => 'int', 'unsigned' => true, 'auto_increment' => true, 'comment' => 'ログID'),
                'song_id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'comment' => '楽曲ID (FK)'), 
                'created_at' => array('type' => 'datetime', 'null' => false, 'default' => \DB::expr('CURRENT_TIMESTAMP'), 'comment' => '再生開始日時'), 
            ),
            array('id')
        );
        \DBUtil::create_index('play_logs', 'song_id');
        \DBUtil::create_index('play_logs', 'created_at');
    }

    public function down()
    {
        \DBUtil::drop_table('play_logs');
    }
}