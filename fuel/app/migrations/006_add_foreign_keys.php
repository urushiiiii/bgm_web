<?php

namespace Fuel\Migrations;

class Add_foreign_keys
{
    public function up()
    {
        // playlist_songs テーブルへの外部キー設定
        \DBUtil::add_foreign_key('playlist_songs', array(
            'constraint' => 'fk_playlist_songs_playlist_id',
            'key' => 'playlist_id',
            'reference' => array(
                'table' => 'playlists',
                'column' => 'id',
            ),
            'on_update' => 'CASCADE',
            'on_delete' => 'CASCADE',
        ));
        \DBUtil::add_foreign_key('playlist_songs', array(
            'constraint' => 'fk_playlist_songs_song_id',
            'key' => 'song_id',
            'reference' => array(
                'table' => 'songs',
                'column' => 'id',
            ),
            'on_update' => 'CASCADE',
            'on_delete' => 'CASCADE',
        ));

        // reservations テーブルへの外部キー設定
        \DBUtil::add_foreign_key('reservations', array(
            'constraint' => 'fk_reservations_playlist_id',
            'key' => 'playlist_id',
            'reference' => array(
                'table' => 'playlists',
                'column' => 'id',
            ),
            'on_update' => 'CASCADE',
            'on_delete' => 'CASCADE',
        ));

        // play_logs テーブルへの外部キー設定
        \DBUtil::add_foreign_key('play_logs', array(
            'constraint' => 'fk_play_logs_song_id',
            'key' => 'song_id',
            'reference' => array(
                'table' => 'songs',
                'column' => 'id',
            ),
            'on_update' => 'CASCADE',
            'on_delete' => 'CASCADE',
        ));
    }

    public function down()
    {
        \DBUtil::drop_foreign_key('playlist_songs', 'fk_playlist_songs_playlist_id');
        \DBUtil::drop_foreign_key('playlist_songs', 'fk_playlist_songs_song_id');
        \DBUtil::drop_foreign_key('reservations', 'fk_reservations_playlist_id');
        \DBUtil::drop_foreign_key('play_logs', 'fk_play_logs_song_id');
    }
}