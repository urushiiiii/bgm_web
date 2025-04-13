<?php

namespace Fuel\Migrations;

class Create_playlists
{
    public function up()
    {
        \DBUtil::create_table(
            'playlists', 
            array(
                'id' => array('type' => 'int', 'unsigned' => true, 'auto_increment' => true, 'comment' => 'プレイリストID'),
                'name' => array('constraint' => 255, 'type' => 'varchar', 'null' => false, 'unique' => true, 'comment' => 'プレイリスト名'),
                'created_at' => array('type' => 'datetime', 'null' => false, 'default' => \DB::expr('CURRENT_TIMESTAMP'), 'comment' => '作成日時'),
            ),
            array('id')
        );
    }

    public function down()
    {
        \DBUtil::drop_table('playlists');
    }
}