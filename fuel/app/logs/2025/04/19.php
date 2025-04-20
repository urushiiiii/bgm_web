<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2025-04-19 17:42:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-04-19 17:42:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2025-04-19 17:42:42 --> 楽曲登録データ不足: nameまたはfile_pathが空です。
ERROR - 2025-04-19 17:42:42 --> DB登録に失敗しました。File: /var/www/html/my_fuel_project/public/assets/uploads/songs/f447b2da77093a26b2c441a0af043b64.mp3
WARNING - 2025-04-19 17:53:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-04-19 17:53:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2025-04-19 17:53:20 --> 楽曲登録データ不足: nameまたはfile_pathが空です。
ERROR - 2025-04-19 17:53:20 --> DB登録に失敗しました。File: /var/www/html/my_fuel_project/public/assets/uploads/songs/b057526fbc9595b649c7c590a62932c5.mp3
WARNING - 2025-04-19 18:17:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-04-19 18:17:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-04-19 18:17:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-04-19 18:17:56 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-04-19 18:18:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-04-19 18:18:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-04-19 18:18:02 --> Fuel\Core\Request::execute - Called
INFO - 2025-04-19 18:18:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-04-19 18:18:02 --> Data to save: Array
(
    [name] => 
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/cb9386d6314d921c9905352762df4957.mp3
)

DEBUG - 2025-04-19 18:18:02 --> Song name generated: 
ERROR - 2025-04-19 18:18:02 --> 楽曲登録データ不足: nameまたはfile_pathが空です。
ERROR - 2025-04-19 18:18:02 --> DB登録に失敗しました。File: /var/www/html/my_fuel_project/public/assets/uploads/songs/cb9386d6314d921c9905352762df4957.mp3
WARNING - 2025-04-19 18:27:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-04-19 18:27:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-04-19 18:27:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-04-19 18:27:18 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-04-19 18:27:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-04-19 18:27:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-04-19 18:27:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-04-19 18:27:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-04-19 18:27:24 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => fba944e2106057e88e9c59b46eee4680.mp3
    [name] => 白薔薇.mp3
    [type] => audio/mpeg
    [file] => /tmp/php1EbpFy
    [error] => 
    [size] => 4686831
    [extension] => mp3
    [basename] => 白薔薇
    [mimetype] => audio/mpeg
    [saved_to] => /var/www/html/my_fuel_project/public/assets/uploads/songs/
    [errors] => Array
        (
        )

)

DEBUG - 2025-04-19 18:27:24 --> Original filename: 白薔薇.mp3
DEBUG - 2025-04-19 18:27:24 --> Song name generated: 白薔薇
DEBUG - 2025-04-19 18:27:24 --> Data to save in DB: Array
(
    [name] => 白薔薇
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/fba944e2106057e88e9c59b46eee4680.mp3
)

ERROR - 2025-04-19 18:27:24 --> データベースエラー[登録]: Table 'my_music_app_db.songs' doesn't exist [ INSERT INTO `songs` (`name`, `file_path`) VALUES ('白薔薇', '/var/www/html/my_fuel_project/public/assets/uploads/songs/fba944e2106057e88e9c59b46eee4680.mp3') ] Data: Array
(
    [name] => 白薔薇
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/fba944e2106057e88e9c59b46eee4680.mp3
)

ERROR - 2025-04-19 18:27:24 --> DB登録に失敗しました。File: /var/www/html/my_fuel_project/public/assets/uploads/songs/fba944e2106057e88e9c59b46eee4680.mp3
