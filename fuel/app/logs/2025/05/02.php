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
