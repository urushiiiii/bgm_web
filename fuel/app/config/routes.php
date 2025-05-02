<?php
return array(
    '_root_'  => 'home/index',
    '_404_'   => 'welcome/404',
    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
    'songs' => 'songs/index',
    'api/songs/upload' => 'api/songs/upload',
    'api/playlists/create' => 'api/playlists/create',
    'playlist/view/:id' => 'playlist/view/$1',
    'api/songs' => 'api/songs/index',
    'api/playlists/:id/songs' => 'api/playlists/songs/$1',
    // ↓ プレイリストから特定楽曲を削除するAPI (DELETEメソッド) ↓
    'api/playlists/:pid/songs/:sid' => 'api/playlists/song/$1/$2',
    // ↓ プレイリスト自体を削除するAPI (DELETEメソッド) ↓
    'api/playlists/:id' => 'api/playlists/playlist/$1', 
    'api/logs/play' => 'api/logs/play',
    'api/playlists' => 'api/playlists/index',
    'api/reservations' => 'api/reservations/index',        // ★ GET /api/reservations → Controller_Api_Reservations@get_index (一覧取得)
    'api/reservations/create' => 'api/reservations/create', // ★ POST /api/reservations/create → Controller_Api_Reservations@post_create (作成)
    'api/reservations/delete/:id' => 'api/reservations/delete/$1',
    'api/reservations/:id' => array(array('GET', 'api/reservations/reservation/$1')), // GET /api/reservations/(id) を Controller_Api_Reservations@get_reservation(id) へ
    'api/reservations/update/:id' => 'api/reservations/update/$1', // POST /api/reservations/update/(id) を Controller_Api_Reservations@post_update(id) へ
);