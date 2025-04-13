<?php

namespace Fuel\Migrations;

class Create_reservations
{
    public function up()
    {
        \DBUtil::create_table(
            'reservations', 
            array(
                'id' => array('type' => 'int', 'unsigned' => true, 'auto_increment' => true, 'comment' => '予約ID'),
                'playlist_id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'comment' => 'プレイリストID (FK)'), 
                'reservation_datetime' => array('type' => 'datetime', 'null' => false, 'unique' => true, 'comment' => '予約日時'),
                'status' => array('constraint' => 20, 'type' => 'varchar', 'null' => false, 'default' => 'reserved', 'comment' => "予約状態('reserved', 'played', 'canceled', 'error')"),
                'created_at' => array('type' => 'datetime', 'null' => false, 'default' => \DB::expr('CURRENT_TIMESTAMP'), 'comment' => '作成日時'),
                'updated_at' => array('type' => 'datetime', 'null' => false, 'default' => \DB::expr('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'), 'comment' => '更新日時'), 
            ),
            array('id')
        );

        \DBUtil::create_index('reservations', 'playlist_id');
        \DBUtil::create_index('reservations', 'reservation_datetime'); 
        \DBUtil::create_index('reservations', 'status');
    }

    public function down()
    {
        \DBUtil::drop_table('reservations');
    }
}