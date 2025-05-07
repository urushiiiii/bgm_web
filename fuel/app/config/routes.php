<?php
return array(
    '_root_'  => 'home/index',//トップページ
    '_404_'   => 'welcome/404',//ページが見つからない場合
    'songs' => 'songs/index',//楽曲一覧ページ用
    'api/songs/upload' => 'api/songs/upload',//楽曲一覧取得API用
    'api/playlists/create' => 'api/playlists/create',//プレイリスト作成
    'playlist/view/:id' => 'playlist/view/$1',//任意のプレイリスト
    'api/songs' => 'api/songs/index',
    'api/playlists/:id/songs' => 'api/playlists/songs/$1',
    'api/playlists/:pid/songs/:sid' => 'api/playlists/song/$1/$2',// プレイリストから特定楽曲を削除するAPI 
    'api/playlists/:id' => 'api/playlists/playlist/$1', // プレイリスト自体を削除するAPI 
    'api/logs/play' => 'api/logs/play',//ログ
    'api/playlists' => 'api/playlists/index',
    'api/reservations' => 'api/reservations/index',        // ★ GET /api/reservations → Controller_Api_Reservations@get_index (一覧取得)
    'api/reservations/create' => 'api/reservations/create', // ★ POST /api/reservations/create → Controller_Api_Reservations@post_create (作成)
    'api/reservations/delete/:id' => 'api/reservations/delete/$1',//予約削除
    'api/reservations/detail/:id' => 'api/reservations/reservation/$1', // GET /api/reservations/(id) を Controller_Api_Reservations@get_reservation(id) へ
    'api/reservations/update/:id' => 'api/reservations/update/$1', // POST /api/reservations/update/(id) を Controller_Api_Reservations@post_update(id) へ
    'api/reservations/:id/status' => 'api/reservations/update_status/$1'//予約更新
);