<?php

namespace Fuel\Migrations;

class Create_playlist_songs
{
    public function up()
    {
        \DBUtil::create_table(
            'playlist_songs', 
            array(
                'id' => array('type' => 'int', 'unsigned' => true, 'auto_increment' => true, 'comment' => '中間テーブルID'),
                'playlist_id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'comment' => 'プレイリストID (FK)'), 
                'song_id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'comment' => '楽曲ID (FK)'), 
                'created_at' => array('type' => 'datetime', 'null' => false, 'default' => \DB::expr('CURRENT_TIMESTAMP'), 'comment' => '追加日時'),
            ),
            array('id')
        );

        // 複合ユニークキー制約を追加 (同じ曲が同じプレイリストに重複しないように)
        // 'uq_playlist_song' はユニークキー制約の名前（任意）
        \DBUtil::create_index('playlist_songs', array('playlist_id', 'song_id'), 'uq_playlist_song', 'UNIQUE');

        // 外部キーカラムにはインデックスを作成しておくのが一般的（DBによっては自動作成される場合もある）
        \DBUtil::create_index('playlist_songs', 'playlist_id');
        \DBUtil::create_index('playlist_songs', 'song_id');
    }

    public function down()
    {
        \DBUtil::drop_table('playlist_songs');
    }
}