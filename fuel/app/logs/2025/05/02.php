<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2025-05-02 12:08:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:08:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 12:08:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:08:18 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:08:19 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:08:19 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:08:19 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:08:19 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:08:19 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#32 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:08:19 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:08:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:08:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:08:34 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:08:34 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:08:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:08:34 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:08:34 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:17:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:17:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:17:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:17:40 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:17:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:17:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:17:40 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:18:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:18:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 12:18:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:11 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:18:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:18:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:12 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:18:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:18:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:18:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:13 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:18:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:18:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:13 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:18:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:18:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:18:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:14 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:18:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:18:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:18:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:20:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:20:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 12:20:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:20:52 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:20:52 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:20:52 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:20:52 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:20:52 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:20:52 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#32 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:20:52 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:20:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:20:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:20:53 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:20:53 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:20:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:20:53 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:20:53 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:26:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:26:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 12:26:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:51 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:26:51 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:26:51 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:26:51 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:26:51 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:26:51 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#32 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:26:51 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:26:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:26:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:26:42 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:42 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:26:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:26:42 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:42 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:26:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:26:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/create"
INFO - 2025-05-02 12:26:48 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:48 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:26:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:26:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 12:26:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:26:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:26:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:26:55 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:27:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 12:27:06 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-02 12:27:06 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-02 12:27:06 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-02 12:27:06 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-02 12:27:06 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-02 12:27:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:27:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 12:27:01 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:27:01 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:27:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:27:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 12:27:02 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:27:02 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:27:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:27:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 12:27:05 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:27:05 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:27:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:27:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:27:06 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:32:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:32:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 12:32:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:32:43 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:32:43 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:32:43 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:32:43 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:32:43 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:32:43 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#33 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:32:43 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:32:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:32:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:32:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:32:44 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:32:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:32:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:32:44 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:33:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:33:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 12:33:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:33:51 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:33:42 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:33:42 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:33:42 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:33:42 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:33:42 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#33 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:33:42 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:33:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:33:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:33:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:33:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:33:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:33:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:33:43 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:34:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:34:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 12:34:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:34:50 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:34:51 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:34:51 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:34:51 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:34:51 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:34:51 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#33 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:34:51 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:34:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:34:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:34:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:34:52 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:34:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:34:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:34:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:37:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:37:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 12:37:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:37:06 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:37:06 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:37:06 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:37:06 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:37:06 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:37:06 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#33 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(10)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    string(1) "2"
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:37:06 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous">
			<a href="http://localhost/home/index?page=1" rel="prev">&laquo;</a>

</span>
<span>
			<a href="http://localhost/home/index?page=1">1</a>

</span>
<span class="active">
			<a href="#">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=3" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:50:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:50:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
ERROR - 2025-05-02 12:50:45 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 12:52:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:52:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 12:52:31 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:52:31 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 12:52:32 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 12:52:32 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 12:52:32 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 12:52:32 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 12:52:32 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#34 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(10)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    string(1) "2"
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 12:52:32 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous">
			<a href="http://localhost/home/index?page=1" rel="prev">&laquo;</a>

</span>
<span>
			<a href="http://localhost/home/index?page=1">1</a>

</span>
<span class="active">
			<a href="#">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=3" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 12:52:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:52:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 12:52:37 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:52:37 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 12:53:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 12:53:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 12:53:03 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:53:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 12:53:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 12:53:03 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 12:53:03 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 14:53:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 14:53:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 14:53:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 14:53:59 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 14:53:59 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 14:53:59 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 14:53:59 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 14:53:59 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 14:53:59 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#34 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 14:53:59 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 14:54:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 14:54:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 14:54:05 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 14:54:05 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 14:54:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 14:54:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 14:54:42 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 14:54:42 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 14:55:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 14:54:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 14:54:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 14:54:52 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 14:54:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 14:54:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 14:54:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 15:11:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 15:11:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 15:11:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:11:44 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 15:11:45 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 15:11:45 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 15:11:45 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 15:11:45 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 15:11:45 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#35 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 15:11:45 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 15:11:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 15:11:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:11:45 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 15:11:46 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
WARNING - 2025-05-02 15:12:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 15:12:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 15:12:01 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:12:01 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 15:12:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 15:12:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 15:12:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:12:13 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 15:12:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 15:12:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 15:12:20 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:12:20 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 15:12:21 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
DEBUG - 2025-05-02 15:12:21 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 15:12:21 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 15:12:21 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 15:12:21 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#35 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 15:12:21 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 15:12:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 15:12:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 15:12:21 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:12:21 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 15:12:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 15:12:21 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:12:21 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 15:12:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 15:12:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 15:12:22 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 15:12:22 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 15:12:22 --> データベースエラー[予約一覧取得]: Unknown column 'playlists.name as playlist_name' in 'field list' [ SELECT `reservations`.`id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name as playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
WARNING - 2025-05-02 17:13:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:13:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 17:13:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:13:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 17:13:43 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 17:13:43 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 17:13:43 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 17:13:43 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#38 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 17:13:43 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 17:13:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 17:13:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:13:44 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:24:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:24:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 17:24:35 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:24:35 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 17:24:35 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 17:24:35 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 17:24:35 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 17:24:35 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#39 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 17:24:35 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 17:24:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 17:24:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:24:36 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:24:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:24:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/1"
INFO - 2025-05-02 17:24:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:24:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:34:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:34:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 17:34:15 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:34:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 17:34:15 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 17:34:15 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 17:34:15 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 17:34:15 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#40 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 17:34:15 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 17:34:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:34:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 17:34:16 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 17:34:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:34:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:34:16 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:34:16 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:34:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:34:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 17:34:30 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:34:30 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:34:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:34:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 17:34:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:34:45 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:36:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:36:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 17:36:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:36:12 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 17:36:12 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 17:36:12 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 17:36:12 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 17:36:12 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#40 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 17:36:12 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 17:36:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:36:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 17:36:13 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 17:36:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:36:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:36:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:36:13 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:43:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:43:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 17:43:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:43:50 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 17:43:40 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 17:43:40 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 17:43:40 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 17:43:40 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#41 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 17:43:40 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 17:43:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:43:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 17:43:40 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 17:43:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:43:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:43:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:43:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:43:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:43:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 17:43:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:43:43 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:43:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:43:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/update/2"
INFO - 2025-05-02 17:43:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:43:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:43:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:43:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:43:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:43:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:44:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:44:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/3"
INFO - 2025-05-02 17:44:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:44:10 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:44:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:44:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 17:44:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:44:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:44:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:44:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 17:44:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:44:13 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:44:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:44:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:44:16 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:44:16 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:52:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:52:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 17:52:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:52:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 17:52:28 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 17:52:28 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 17:52:28 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 17:52:28 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#41 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 17:52:28 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 17:52:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:52:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:52:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:52:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:52:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:52:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 17:52:26 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 17:52:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:52:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 17:52:47 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:52:47 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:53:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:53:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 17:53:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:53:17 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 17:53:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 17:53:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 17:53:31 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 17:53:31 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:08:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:08:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:08:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:08:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:08:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:08:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:08:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:08:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:08:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:08:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:08:22 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:08:22 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:08:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:08:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:08:47 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:08:47 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:08:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:08:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:08:48 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:08:48 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:08:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:08:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:08:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:08:51 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:14:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:14:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:14:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:14:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:14:11 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:14:11 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:14:11 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:14:11 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:14:11 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:14:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:14:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:14:12 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:14:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:14:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:14:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:14:12 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:14:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:14:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:14:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:14:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:14:55 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:14:55 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:14:55 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:14:55 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:14:55 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:14:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:14:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:14:55 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:14:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:14:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:14:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:14:56 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:16:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:16:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/5/status"
INFO - 2025-05-02 18:16:35 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:16:35 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:17:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:17:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/5/status"
INFO - 2025-05-02 18:17:05 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:17:05 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:17:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:17:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:17:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:17:06 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:17:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:17:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:17:07 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:17:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:17:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:17:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:17:18 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:17:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:17:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:17:16 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:17:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:17:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:17:16 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:18:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:18:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/5/status"
INFO - 2025-05-02 18:18:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:18:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:21:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:21:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:21:27 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:21:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:21:38 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:21:38 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:21:38 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:21:38 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:21:38 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:21:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:21:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:21:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 18:21:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
ERROR - 2025-05-02 18:21:28 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:21:28 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:21:28 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:21:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:21:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/5"
INFO - 2025-05-02 18:21:37 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:21:37 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:21:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:21:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/6"
INFO - 2025-05-02 18:21:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:21:45 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:21:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:21:53 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:21:53 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:22:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:26 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:22:29 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:29 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:22:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:22:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:43 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:22:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:46 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/7/status"
INFO - 2025-05-02 18:22:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:50 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:22:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:51 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:22:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:22:52 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:22:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:22:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:22:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:22:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:22:59 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:22:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:22:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:22:59 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:28:05 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:28:06 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:28:15 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:28:16 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/7/status"
INFO - 2025-05-02 18:28:16 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:28:16 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:28:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:28:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:28:17 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:28:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:28:18 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:28:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:28:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:28:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:28:24 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:28:24 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:28:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:28:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/7/status"
INFO - 2025-05-02 18:28:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:28:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:31:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:31:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:32:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:31:54 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:31:54 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:31:54 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:31:54 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:31:54 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:31:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:31:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:31:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 18:31:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
ERROR - 2025-05-02 18:31:54 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:31:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:31:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/7"
INFO - 2025-05-02 18:32:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:06 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/8"
INFO - 2025-05-02 18:32:07 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:07 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/9"
INFO - 2025-05-02 18:32:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:12 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/delete/4"
INFO - 2025-05-02 18:32:16 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:16 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:32:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:32:28 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:28 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:32:31 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:31 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:32:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:32:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:32:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:46 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:32:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:32:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:32:48 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:48 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:32:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:32:59 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:33:01 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:01 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:33:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:06 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:33:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:17 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:33:20 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:20 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 18:33:22 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:22 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 18:33:33 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:33 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:33:36 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:36 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:33:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:33:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:33:45 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:33:45 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:33:46 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:33:46 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:33:46 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:33:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:33:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:33:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:33:46 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:33:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:33:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:33:46 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:38:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:38:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/10/status"
INFO - 2025-05-02 18:38:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:38:51 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-02 18:38:51 --> Notice - Array to string conversion in /var/www/html/my_fuel_project/fuel/core/classes/log.php on line 244
WARNING - 2025-05-02 18:38:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:38:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:38:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:38:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:38:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:38:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:38:53 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:38:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:38:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:38:53 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:38:53 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:40:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:40:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:39:49 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:39:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:39:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:39:50 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:41:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:41:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:41:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:41:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:41:44 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:41:44 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:41:44 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:41:44 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:41:44 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:41:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:41:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:41:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 18:41:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
ERROR - 2025-05-02 18:41:44 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:41:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:41:44 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:42:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:42:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:42:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:42:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:42:13 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:42:13 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:42:13 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:42:13 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:42:13 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:42:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:42:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:42:13 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:42:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:42:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:42:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:42:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:43:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:43:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/10/status"
INFO - 2025-05-02 18:43:24 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:43:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:43:24 --> Received status update request: ID=10 Status=played
ERROR - 2025-05-02 18:43:24 --> Error - Call to undefined method Model_Reservation::update_status() in /var/www/html/my_fuel_project/fuel/app/classes/controller/api/reservations.php on line 204
WARNING - 2025-05-02 18:43:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:43:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:43:35 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:43:35 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:43:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:43:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:43:25 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:43:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:43:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:43:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:43:26 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:43:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:43:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:43:27 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:43:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:43:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:43:28 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:47:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:47:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:47:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:47:10 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:47:21 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:47:21 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:47:21 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:47:21 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:47:21 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:47:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:47:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:47:11 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:47:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:47:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:47:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:47:11 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:48:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:48:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/10/status"
INFO - 2025-05-02 18:48:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:48:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:48:26 --> Received status update request: ID=10 Status=played
WARNING - 2025-05-02 18:48:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:48:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:48:16 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:48:16 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:48:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:48:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:48:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:48:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:48:16 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:48:16 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:48:16 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:48:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:48:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:48:42 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:48:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:48:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:48:42 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:50:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:50:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:50:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:50:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:50:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:50:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:50:42 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:50:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:50:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:50:42 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:50:42 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:50:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:50:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
ERROR - 2025-05-02 18:50:46 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:50:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:50:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:50:47 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:50:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:50:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
ERROR - 2025-05-02 18:50:51 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:50:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:50:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:50:53 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:51:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:51:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:51:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:51:10 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:51:10 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:51:10 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:51:10 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:51:21 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:51:21 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:51:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:51:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:51:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:51:11 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:51:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:51:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:51:11 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:51:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:51:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 18:51:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:51:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:51:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 18:51:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:51:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 18:51:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:51:19 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
INFO - 2025-05-02 18:51:20 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:51:20 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:51:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:51:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:51:22 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:51:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:51:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:51:23 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:54:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:54:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 18:54:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:54:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:54:23 --> [Pagination Debug] Total log items found: 26
DEBUG - 2025-05-02 18:54:23 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 18:54:23 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 26
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 18:54:23 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "26"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 18:54:23 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 18:54:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:54:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:54:24 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:54:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:54:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 18:54:24 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:54:24 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:55:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/11/status"
INFO - 2025-05-02 18:55:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:55:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 18:55:32 --> Received status update request: ID=11 Status=played
WARNING - 2025-05-02 18:55:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:55:33 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:55:33 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:55:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:55:34 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:55:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:55:34 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:55:34 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:55:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-02 18:55:38 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:55:38 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:55:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 18:55:49 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:55:49 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:55:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 18:55:49 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 18:55:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 18:55:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:55:50 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:55:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:55:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-02 18:55:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:55:51 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 18:58:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 18:58:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-02 18:58:29 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 18:58:29 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 20:51:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 20:51:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 20:51:30 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 20:51:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 20:51:31 --> [Pagination Debug] Total log items found: 29
DEBUG - 2025-05-02 20:51:31 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 20:51:31 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 29
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 20:51:31 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "29"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 20:51:31 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 20:51:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 20:51:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 20:51:31 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 20:51:31 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 20:51:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 20:51:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 20:51:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 20:51:45 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 20:52:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 20:52:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/update/12"
INFO - 2025-05-02 20:52:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 20:52:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 20:52:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 20:52:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 20:52:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 20:52:09 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:07:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:07:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-02 21:07:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:07:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 21:07:57 --> [Pagination Debug] Total log items found: 29
DEBUG - 2025-05-02 21:07:57 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 21:07:57 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 29
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 21:07:57 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "29"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(17) "http://localhost/"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 21:07:57 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/?page=2">2</a>

</span>
<span>
			<a href="http://localhost/?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 21:07:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:07:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 21:07:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:07:59 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:08:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:08:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:08:01 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:12:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:12:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:12:31 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:15:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:15:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:15:01 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:15:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:15:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:15:26 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:24:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:24:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:24:40 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:24:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:24:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:24:41 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:30:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:30:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:30:30 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:30:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:30:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:30:31 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:32:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:32:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:32:00 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:32:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:32:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:32:01 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:33:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:33:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:33:49 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:33:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:33:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:33:50 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:34:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:34:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:34:10 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:34:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:34:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:34:11 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:34:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:34:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:34:12 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:37:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:37:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
ERROR - 2025-05-02 21:37:20 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:37:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:37:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
ERROR - 2025-05-02 21:37:21 --> Warning - Attempt to assign property 'search' of non-object in /var/www/html/my_fuel_project/fuel/core/classes/route.php on line 235
WARNING - 2025-05-02 21:41:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:41:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-02 21:41:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:41:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:41:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:41:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-02 21:41:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:41:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 21:41:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-02 21:41:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-02 21:41:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-02 21:41:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-02 21:41:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-02 21:42:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:42:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 21:42:33 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:42:33 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 21:42:33 --> [Pagination Debug] Total log items found: 29
DEBUG - 2025-05-02 21:42:33 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 21:42:33 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 29
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 21:42:33 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "29"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 21:42:33 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 21:42:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:42:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 21:42:34 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:42:34 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:46:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:46:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 21:46:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:46:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:46:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:46:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-02 21:46:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:46:56 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:46:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:46:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 21:46:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:46:59 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:47:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/13/status"
INFO - 2025-05-02 21:47:03 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:03 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 21:47:03 --> Received status update request: ID=13 Status=played
WARNING - 2025-05-02 21:47:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 21:47:03 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:03 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:47:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 21:47:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:47:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:47:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:09 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:47:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:47:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:09 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:47:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:47:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:47:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:47:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:11 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:47:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:47:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:47:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:47:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:12 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:47:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/update/14"
INFO - 2025-05-02 21:47:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:47:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:47:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 21:47:57 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:47:57 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 21:48:12 --> [Pagination Debug] Total log items found: 29
DEBUG - 2025-05-02 21:48:12 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 21:48:12 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 29
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 21:48:12 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "29"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 21:48:12 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 21:48:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 21:48:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:12 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 21:48:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:23 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-02 21:48:34 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:34 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 21:48:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:26 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-02 21:48:28 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:28 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 21:48:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 21:48:49 --> [Pagination Debug] Total log items found: 30
DEBUG - 2025-05-02 21:48:49 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 21:48:49 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 30
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 21:48:49 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(3)
    ["total_items"]=>
    string(2) "30"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 21:48:49 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 21:48:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:48:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
WARNING - 2025-05-02 21:48:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:48:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 21:48:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:48:59 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:49:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:49:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-02 21:49:01 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:01 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:49:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:49:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:49:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:14 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:49:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:49:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:49:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:49:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:49:15 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:15 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:49:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:49:15 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:15 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 21:49:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 21:49:09 --> [Pagination Debug] Total log items found: 31
DEBUG - 2025-05-02 21:49:09 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 21:49:09 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 31
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 21:49:09 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "31"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 21:49:09 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 21:49:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 21:49:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 21:49:09 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:03:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:03:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:03:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:03:10 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:03:11 --> [Pagination Debug] Total log items found: 31
DEBUG - 2025-05-02 22:03:11 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:03:11 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 31
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:03:11 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "31"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:03:11 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:03:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:03:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:03:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:03:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:03:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:03:11 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:03:11 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:03:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:03:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:03:12 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:03:12 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:03:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:03:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 22:03:21 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:03:21 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:03:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:03:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/update/14"
INFO - 2025-05-02 22:03:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:03:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:03:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:03:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:03:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:03:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:04:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:04:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/12/status"
INFO - 2025-05-02 22:04:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:04:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:04:17 --> Received status update request: ID=12 Status=played
WARNING - 2025-05-02 22:04:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:04:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:04:18 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:07:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 22:07:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:40 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:07:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 22:07:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:07:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-02 22:07:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:50 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:07:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:07:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:51 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:07:51 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-02 22:07:51 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-02 22:07:51 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-02 22:07:51 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-02 22:07:51 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-02 22:07:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-02 22:07:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:55 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:07:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:07:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:56 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:07:56 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-02 22:07:56 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-02 22:07:56 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-02 22:07:56 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-02 22:07:56 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-02 22:07:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:07:59 --> [Pagination Debug] Total log items found: 31
DEBUG - 2025-05-02 22:07:59 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:07:59 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 31
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:07:59 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "31"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:07:59 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:07:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 22:07:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:07:59 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:08:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:08:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 22:08:07 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:08:07 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:08:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:08:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/update/15"
INFO - 2025-05-02 22:08:22 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:08:22 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:08:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:08:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:08:25 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:08:25 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:10:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:10:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/14/status"
INFO - 2025-05-02 22:10:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:10:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:10:13 --> Received status update request: ID=14 Status=played
WARNING - 2025-05-02 22:10:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:10:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:10:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:10:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:23:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:23:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 22:23:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:18 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:23:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 22:23:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:28 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:23:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:23:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:23:20 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:20 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:23:20 --> [Pagination Debug] Total log items found: 31
DEBUG - 2025-05-02 22:23:20 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:23:20 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 31
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:23:20 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "31"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:23:20 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:23:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 22:23:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:21 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:23:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:23:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-02 22:23:27 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:27 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:23:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:23:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/update/15"
INFO - 2025-05-02 22:23:53 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:53 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:23:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:23:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:23:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:23:46 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:24:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:24:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/update/2"
INFO - 2025-05-02 22:24:02 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:24:02 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:24:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:24:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:24:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:24:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:24:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:24:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:24:28 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:24:28 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:24:28 --> [Pagination Debug] Total log items found: 31
DEBUG - 2025-05-02 22:24:28 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:24:28 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 31
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:24:28 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "31"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:24:28 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:24:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:24:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:24:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:29:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/15/status"
INFO - 2025-05-02 22:29:29 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:29:29 --> Received status update request: ID=15 Status=played
WARNING - 2025-05-02 22:29:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/3"
INFO - 2025-05-02 22:29:39 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:39 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:29:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:29:30 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:30 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:29:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
WARNING - 2025-05-02 22:29:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:30 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:30 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:29:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/3/songs"
INFO - 2025-05-02 22:29:31 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:31 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:29:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-02 22:29:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:29:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:29:42 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:29:42 --> [Pagination Debug] Total log items found: 32
DEBUG - 2025-05-02 22:29:42 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:29:42 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 32
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:29:42 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "32"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:29:42 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:29:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
WARNING - 2025-05-02 22:29:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:29:43 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:42:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:42:37 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:37 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:42:38 --> [Pagination Debug] Total log items found: 32
DEBUG - 2025-05-02 22:42:38 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:42:38 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 32
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:42:38 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "32"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:42:38 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:42:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:42:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:39 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:42:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:42:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:42:45 --> [Pagination Debug] Total log items found: 32
DEBUG - 2025-05-02 22:42:45 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:42:45 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 32
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:42:45 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "32"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:42:45 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:42:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:42:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:45 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:42:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:42:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:45 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:42:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:42:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:55 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:42:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-02 22:42:49 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:49 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:42:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-02 22:42:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:50 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:42:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-02 22:42:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-02 22:42:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-02 22:42:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-02 22:42:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-02 22:42:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:42:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-02 22:42:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:42:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:43:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:43:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-02 22:43:00 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:43:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-02 22:43:00 --> [Pagination Debug] Total log items found: 33
DEBUG - 2025-05-02 22:43:00 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-02 22:43:00 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 33
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-02 22:43:00 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(4)
    ["total_items"]=>
    string(2) "33"
    ["num_links"]=>
    int(3)
    ["uri_segment"]=>
    string(4) "page"
    ["show_first"]=>
    bool(false)
    ["show_last"]=>
    bool(false)
    ["pagination_url"]=>
    string(27) "http://localhost/home/index"
    ["link_offset"]=>
    float(0.5)
    ["calculated_page"]=>
    int(1)
  }
  ["template":protected]=>
  array(25) {
    ["wrapper"]=>
    string(46) "<div class="pagination">
	{pagination}
</div>
"
    ["first"]=>
    string(37) "<span class="first">
	{link}
</span>
"
    ["first-marker"]=>
    string(14) "&laquo;&laquo;"
    ["first-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["first-inactive"]=>
    string(0) ""
    ["first-inactive-link"]=>
    string(0) ""
    ["previous"]=>
    string(40) "<span class="previous">
	{link}
</span>
"
    ["previous-marker"]=>
    string(7) "&laquo;"
    ["previous-link"]=>
    string(40) "		<a href="{uri}" rel="prev">{page}</a>
"
    ["previous-inactive"]=>
    string(49) "<span class="previous-inactive">
	{link}
</span>
"
    ["previous-inactive-link"]=>
    string(36) "		<a href="#" rel="prev">{page}</a>
"
    ["regular"]=>
    string(23) "<span>
	{link}
</span>
"
    ["regular-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["active"]=>
    string(38) "<span class="active">
	{link}
</span>
"
    ["active-link"]=>
    string(25) "		<a href="#">{page}</a>
"
    ["next"]=>
    string(36) "<span class="next">
	{link}
</span>
"
    ["next-marker"]=>
    string(7) "&raquo;"
    ["next-link"]=>
    string(40) "		<a href="{uri}" rel="next">{page}</a>
"
    ["next-inactive"]=>
    string(45) "<span class="next-inactive">
	{link}
</span>
"
    ["next-inactive-link"]=>
    string(36) "		<a href="#" rel="next">{page}</a>
"
    ["last"]=>
    string(36) "<span class="last">
	{link}
</span>
"
    ["last-marker"]=>
    string(14) "&raquo;&raquo;"
    ["last-link"]=>
    string(29) "		<a href="{uri}">{page}</a>
"
    ["last-inactive"]=>
    string(0) ""
    ["last-inactive-link"]=>
    string(0) ""
  }
  ["raw_results":protected]=>
  array(0) {
  }
}

DEBUG - 2025-05-02 22:43:00 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	<span class="previous-inactive">
			<a href="#" rel="prev">&laquo;</a>

</span>
<span class="active">
			<a href="#">1</a>

</span>
<span>
			<a href="http://localhost/home/index?page=2">2</a>

</span>
<span>
			<a href="http://localhost/home/index?page=3">3</a>

</span>
<span class="next">
			<a href="http://localhost/home/index?page=2" rel="next">&raquo;</a>

</span>

</div>

WARNING - 2025-05-02 22:43:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:43:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-02 22:43:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:43:10 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-02 22:43:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-02 22:43:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:43:10 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-02 22:43:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-02 22:43:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-02 22:43:01 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-02 22:43:01 --> Fuel\Core\Request::execute - Setting main Request
