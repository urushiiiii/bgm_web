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
);