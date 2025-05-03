<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2025-05-03 13:02:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:02:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-03 13:02:25 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:02:25 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:02:25 --> [Pagination Debug] Total log items found: 33
DEBUG - 2025-05-03 13:02:25 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:02:25 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 33
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:02:26 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#41 (3) {
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

DEBUG - 2025-05-03 13:02:26 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:02:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:02:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:02:27 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:02:27 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:02:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:02:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2025-05-03 13:02:37 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:02:37 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:02:37 --> [Pagination Debug] Total log items found: 33
DEBUG - 2025-05-03 13:02:37 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:02:37 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/
    [total_items] => 33
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:02:37 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#41 (3) {
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

DEBUG - 2025-05-03 13:02:37 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:02:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:02:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:02:38 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:02:38 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:02:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:02:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:02:48 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:02:48 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:02:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:02:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:02:49 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:02:49 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:02:49 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-03 13:02:49 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-03 13:02:49 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-03 13:02:49 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-03 13:02:49 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-03 13:03:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:03:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:03:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:03:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:03:26 --> [Pagination Debug] Total log items found: 33
DEBUG - 2025-05-03 13:03:26 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:03:26 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 33
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:03:26 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
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

DEBUG - 2025-05-03 13:03:26 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:03:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:03:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:03:27 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:03:27 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:03:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:03:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:03:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:03:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:03:30 --> [Pagination Debug] Total log items found: 33
DEBUG - 2025-05-03 13:03:30 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:03:30 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 33
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:03:30 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
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

DEBUG - 2025-05-03 13:03:30 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:03:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:03:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:03:31 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:03:31 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:04:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:04:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:04:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:04:23 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:04:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:04:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:04:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:04:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:04:23 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-03 13:04:23 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-03 13:04:23 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-03 13:04:23 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-03 13:04:23 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-03 13:04:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:04:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:04:27 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:04:27 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:04:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:04:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:04:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:04:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:04:33 --> [Pagination Debug] Total log items found: 34
DEBUG - 2025-05-03 13:04:33 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:04:33 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 34
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:04:33 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
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
    string(2) "34"
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

DEBUG - 2025-05-03 13:04:33 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:04:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:04:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:04:33 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:04:33 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:09:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:09:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:09:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:09:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:09:44 --> [Pagination Debug] Total log items found: 34
DEBUG - 2025-05-03 13:09:44 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:09:44 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 34
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:09:44 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
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
    string(2) "34"
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

DEBUG - 2025-05-03 13:09:44 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:09:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:09:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:09:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:09:45 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:09:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:09:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:09:49 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:09:49 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:09:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:09:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:09:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:09:50 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:09:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-03 13:09:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-03 13:09:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-03 13:09:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-03 13:09:50 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-03 13:09:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:09:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:09:53 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:09:53 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:09:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:09:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:09:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:09:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:09:55 --> [Pagination Debug] Total log items found: 35
DEBUG - 2025-05-03 13:09:55 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:09:55 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 35
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:09:55 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
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
    string(2) "35"
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

DEBUG - 2025-05-03 13:09:55 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:09:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:09:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:09:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:09:55 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:10:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:10:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:10:08 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:10:08 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:10:08 --> [Pagination Debug] Total log items found: 35
DEBUG - 2025-05-03 13:10:08 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:10:08 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 35
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:10:08 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
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
    string(2) "35"
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

DEBUG - 2025-05-03 13:10:08 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:10:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:10:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:10:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:10:09 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:10:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:10:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:10:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:10:13 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:10:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:10:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:10:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:10:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:10:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3 -> /assets/uploads/songs/c19cc574f6912294737fe68349c4bc40.mp3
DEBUG - 2025-05-03 13:10:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3 -> /assets/uploads/songs/e35b53487729f04ac424fccbbc7e19b6.mp3
DEBUG - 2025-05-03 13:10:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3 -> /assets/uploads/songs/29b34a11c0bf5a6de9bfbe9ef9dd9d6b.mp3
DEBUG - 2025-05-03 13:10:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3 -> /assets/uploads/songs/3f375bddeacf197109f653644fbdfc39.mp3
DEBUG - 2025-05-03 13:10:14 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3 -> /assets/uploads/songs/70499c8303f5d7ed69a153d7bbfc2ffa.mp3
WARNING - 2025-05-03 13:10:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:10:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:10:26 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:10:26 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:10:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:10:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:10:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:10:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:10:19 --> [Pagination Debug] Total log items found: 36
DEBUG - 2025-05-03 13:10:19 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:10:19 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 36
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:10:19 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
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
    string(2) "36"
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

DEBUG - 2025-05-03 13:10:19 --> [Pagination Debug] Rendered HTML: <div class="pagination">
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

WARNING - 2025-05-03 13:10:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:10:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:10:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:10:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:12:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:12:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:12:29 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:12:29 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:12:29 --> データベースエラー[プレイリスト一覧取得]: Table 'my_music_app_db.playlists' doesn't exist [ SELECT * FROM `playlists` ORDER BY `created_at` ASC ]
ERROR - 2025-05-03 13:12:29 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
ERROR - 2025-05-03 13:12:29 --> データベースエラー[ログ件数取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT COUNT(*) AS total_row_count FROM `play_logs` ]
DEBUG - 2025-05-03 13:12:29 --> [Pagination Debug] Total log items found: 0
DEBUG - 2025-05-03 13:12:29 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:12:29 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 0
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:12:29 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(0)
    ["total_items"]=>
    int(0)
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

ERROR - 2025-05-03 13:12:29 --> データベースエラー[ログ一覧取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT `play_logs`.`created_at`, `songs`.`name` FROM `play_logs` INNER JOIN `songs` ON (`play_logs`.`song_id` = `songs`.`id`) ORDER BY `play_logs`.`created_at` DESC LIMIT 10 OFFSET 0 ]
DEBUG - 2025-05-03 13:12:29 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	
</div>

WARNING - 2025-05-03 13:12:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:12:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:12:30 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:12:30 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:12:30 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
WARNING - 2025-05-03 13:12:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
DEBUG - 2025-05-03 13:12:41 --> Migrate class initialized
WARNING - 2025-05-03 13:12:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:12:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:12:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:12:54 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:12:54 --> データベースエラー[プレイリスト一覧取得]: Table 'my_music_app_db.playlists' doesn't exist [ SELECT * FROM `playlists` ORDER BY `created_at` ASC ]
ERROR - 2025-05-03 13:12:54 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
ERROR - 2025-05-03 13:12:54 --> データベースエラー[ログ件数取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT COUNT(*) AS total_row_count FROM `play_logs` ]
DEBUG - 2025-05-03 13:12:54 --> [Pagination Debug] Total log items found: 0
DEBUG - 2025-05-03 13:12:54 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:12:54 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 0
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:12:54 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(0)
    ["total_items"]=>
    int(0)
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

ERROR - 2025-05-03 13:12:54 --> データベースエラー[ログ一覧取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT `play_logs`.`created_at`, `songs`.`name` FROM `play_logs` INNER JOIN `songs` ON (`play_logs`.`song_id` = `songs`.`id`) ORDER BY `play_logs`.`created_at` DESC LIMIT 10 OFFSET 0 ]
DEBUG - 2025-05-03 13:12:54 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	
</div>

WARNING - 2025-05-03 13:12:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:12:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:12:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:12:55 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:12:55 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
WARNING - 2025-05-03 13:13:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:13:35 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:35 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:13:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:13:35 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:35 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:13:35 --> データベースエラー:Table 'my_music_app_db.songs' doesn't exist [ SELECT * FROM `songs` ORDER BY `created_at` ASC ]
WARNING - 2025-05-03 13:13:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:13:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:40 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:13:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:13:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:41 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:13:41 --> データベースエラー:Table 'my_music_app_db.songs' doesn't exist [ SELECT * FROM `songs` ORDER BY `created_at` ASC ]
WARNING - 2025-05-03 13:13:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:13:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:43 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:13:43 --> データベースエラー[プレイリスト一覧取得]: Table 'my_music_app_db.playlists' doesn't exist [ SELECT * FROM `playlists` ORDER BY `created_at` ASC ]
ERROR - 2025-05-03 13:13:43 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
ERROR - 2025-05-03 13:13:43 --> データベースエラー[ログ件数取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT COUNT(*) AS total_row_count FROM `play_logs` ]
DEBUG - 2025-05-03 13:13:43 --> [Pagination Debug] Total log items found: 0
DEBUG - 2025-05-03 13:13:43 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:13:43 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 0
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:13:43 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(0)
    ["total_items"]=>
    int(0)
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

ERROR - 2025-05-03 13:13:43 --> データベースエラー[ログ一覧取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT `play_logs`.`created_at`, `songs`.`name` FROM `play_logs` INNER JOIN `songs` ON (`play_logs`.`song_id` = `songs`.`id`) ORDER BY `play_logs`.`created_at` DESC LIMIT 10 OFFSET 0 ]
DEBUG - 2025-05-03 13:13:43 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	
</div>

WARNING - 2025-05-03 13:13:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:13:44 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:44 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:13:44 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
WARNING - 2025-05-03 13:13:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:13:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:46 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:13:46 --> データベースエラー[プレイリスト一覧取得]: Table 'my_music_app_db.playlists' doesn't exist [ SELECT * FROM `playlists` ORDER BY `created_at` ASC ]
ERROR - 2025-05-03 13:13:46 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
ERROR - 2025-05-03 13:13:46 --> データベースエラー[ログ件数取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT COUNT(*) AS total_row_count FROM `play_logs` ]
DEBUG - 2025-05-03 13:13:46 --> [Pagination Debug] Total log items found: 0
DEBUG - 2025-05-03 13:13:46 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:13:46 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 0
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:13:46 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(0)
    ["total_items"]=>
    int(0)
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

ERROR - 2025-05-03 13:13:46 --> データベースエラー[ログ一覧取得]: Table 'my_music_app_db.play_logs' doesn't exist [ SELECT `play_logs`.`created_at`, `songs`.`name` FROM `play_logs` INNER JOIN `songs` ON (`play_logs`.`song_id` = `songs`.`id`) ORDER BY `play_logs`.`created_at` DESC LIMIT 10 OFFSET 0 ]
DEBUG - 2025-05-03 13:13:46 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	
</div>

WARNING - 2025-05-03 13:13:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:13:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:46 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2025-05-03 13:13:46 --> データベースエラー[予約一覧取得]: Table 'my_music_app_db.reservations' doesn't exist [ SELECT `reservations`.`id`, `reservations`.`playlist_id`, `reservations`.`reservation_datetime`, `reservations`.`status`, `playlists`.`name` AS `playlist_name`, `reservations`.`created_at`, `reservations`.`updated_at` FROM `reservations` INNER JOIN `playlists` ON (`reservations`.`playlist_id` = `playlists`.`id`) ORDER BY `reservations`.`reservation_datetime` ASC ]
WARNING - 2025-05-03 13:13:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:13:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-05-03 13:13:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:13:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:13:55 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => 1be9a3c5c445c0588f6184a11c2f7bfa.mp3
    [name] => 白薔薇.mp3
    [type] => audio/mpeg
    [file] => /tmp/phpscYxLI
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

DEBUG - 2025-05-03 13:13:55 --> Original filename: 白薔薇.mp3
DEBUG - 2025-05-03 13:13:55 --> Song name generated: 白薔薇
DEBUG - 2025-05-03 13:13:55 --> Data to save in DB: Array
(
    [name] => 白薔薇
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/1be9a3c5c445c0588f6184a11c2f7bfa.mp3
)

ERROR - 2025-05-03 13:13:56 --> データベースエラー[登録]: Table 'my_music_app_db.songs' doesn't exist [ INSERT INTO `songs` (`name`, `file_path`) VALUES ('白薔薇', '/var/www/html/my_fuel_project/public/assets/uploads/songs/1be9a3c5c445c0588f6184a11c2f7bfa.mp3') ] Data: Array
(
    [name] => 白薔薇
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/1be9a3c5c445c0588f6184a11c2f7bfa.mp3
)

ERROR - 2025-05-03 13:13:56 --> DB登録に失敗しました。File: /var/www/html/my_fuel_project/public/assets/uploads/songs/1be9a3c5c445c0588f6184a11c2f7bfa.mp3
WARNING - 2025-05-03 13:35:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-03 13:35:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
DEBUG - 2025-05-03 13:35:52 --> Migrate class initialized
WARNING - 2025-05-03 13:40:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-03 13:42:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
DEBUG - 2025-05-03 13:42:14 --> Migrate class initialized
INFO - 2025-05-03 13:42:04 --> Migrating to version: 
INFO - 2025-05-03 13:42:04 --> Migrating to version: 1
INFO - 2025-05-03 13:42:04 --> Migrating to version: 2
INFO - 2025-05-03 13:42:04 --> Migrating to version: 3
INFO - 2025-05-03 13:42:04 --> Migrating to version: 4
INFO - 2025-05-03 13:42:05 --> Migrating to version: 5
INFO - 2025-05-03 13:42:05 --> Migrating to version: 6
INFO - 2025-05-03 13:42:05 --> Migrated to 6 successfully.
WARNING - 2025-05-03 13:42:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:42:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:42:32 --> [Pagination Debug] Total log items found: 0
DEBUG - 2025-05-03 13:42:32 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:42:32 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 0
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:42:32 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(0)
    ["total_items"]=>
    int(0)
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

DEBUG - 2025-05-03 13:42:32 --> [Pagination Debug] Rendered HTML: <div class="pagination">
	
</div>

WARNING - 2025-05-03 13:42:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:42:33 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:33 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:42:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-05-03 13:42:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:42:40 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => 72c3a37b826b84f6e6146c7b025c45cc.mp3
    [name] => 白薔薇.mp3
    [type] => audio/mpeg
    [file] => /tmp/phpb9ZVXC
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

DEBUG - 2025-05-03 13:42:40 --> Original filename: 白薔薇.mp3
DEBUG - 2025-05-03 13:42:40 --> Song name generated: 白薔薇
DEBUG - 2025-05-03 13:42:40 --> Data to save in DB: Array
(
    [name] => 白薔薇
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
)

WARNING - 2025-05-03 13:42:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:42:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:46 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:42:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:42:47 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:42:47 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3 -> /assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
WARNING - 2025-05-03 13:42:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:42:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:50 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:42:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:42:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:42:55 --> [Pagination Debug] Total log items found: 1
DEBUG - 2025-05-03 13:42:55 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:42:55 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 1
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:42:55 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "1"
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

DEBUG - 2025-05-03 13:42:55 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 13:42:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:42:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:42:55 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:42:55 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:43:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-05-03 13:43:07 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:07 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:43:08 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => a03748448c671488018a4795b025f89e.mp3
    [name] => 思い返すと.mp3
    [type] => audio/mpeg
    [file] => /tmp/phpvhuI9v
    [error] => 
    [size] => 2510592
    [extension] => mp3
    [basename] => 思い返すと
    [mimetype] => audio/mpeg
    [saved_to] => /var/www/html/my_fuel_project/public/assets/uploads/songs/
    [errors] => Array
        (
        )

)

DEBUG - 2025-05-03 13:43:08 --> Original filename: 思い返すと.mp3
DEBUG - 2025-05-03 13:43:08 --> Song name generated: 思い返すと
DEBUG - 2025-05-03 13:43:08 --> Data to save in DB: Array
(
    [name] => 思い返すと
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3
)

WARNING - 2025-05-03 13:43:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-05-03 13:43:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:43:13 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => 2f13098cf13638318351453e2010beb6.mp3
    [name] => 星の降る夜なんて幻想だって.mp3
    [type] => audio/mpeg
    [file] => /tmp/phpkQJ9Iv
    [error] => 
    [size] => 6947520
    [extension] => mp3
    [basename] => 星の降る夜なんて幻想だって
    [mimetype] => audio/mpeg
    [saved_to] => /var/www/html/my_fuel_project/public/assets/uploads/songs/
    [errors] => Array
        (
        )

)

DEBUG - 2025-05-03 13:43:13 --> Original filename: 星の降る夜なんて幻想だって.mp3
DEBUG - 2025-05-03 13:43:13 --> Song name generated: 星の降る夜なんて幻想だって
DEBUG - 2025-05-03 13:43:13 --> Data to save in DB: Array
(
    [name] => 星の降る夜なんて幻想だって
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3
)

WARNING - 2025-05-03 13:43:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-05-03 13:43:21 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:21 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:43:21 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => fc96a84b41365b7638b083f12b7a5241.mp3
    [name] => 淡い祈り.mp3
    [type] => audio/mpeg
    [file] => /tmp/phpV2J67z
    [error] => 
    [size] => 1970421
    [extension] => mp3
    [basename] => 淡い祈り
    [mimetype] => audio/mpeg
    [saved_to] => /var/www/html/my_fuel_project/public/assets/uploads/songs/
    [errors] => Array
        (
        )

)

DEBUG - 2025-05-03 13:43:21 --> Original filename: 淡い祈り.mp3
DEBUG - 2025-05-03 13:43:21 --> Song name generated: 淡い祈り
DEBUG - 2025-05-03 13:43:21 --> Data to save in DB: Array
(
    [name] => 淡い祈り
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3
)

WARNING - 2025-05-03 13:43:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-05-03 13:43:27 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:43:27 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => 2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
    [name] => Twilight_Pulse.mp3
    [type] => audio/mpeg
    [file] => /tmp/phpyIuSGF
    [error] => 
    [size] => 5362509
    [extension] => mp3
    [basename] => Twilight_Pulse
    [mimetype] => audio/mpeg
    [saved_to] => /var/www/html/my_fuel_project/public/assets/uploads/songs/
    [errors] => Array
        (
        )

)

DEBUG - 2025-05-03 13:43:27 --> Original filename: Twilight_Pulse.mp3
DEBUG - 2025-05-03 13:43:27 --> Song name generated: Twilight_Pulse
DEBUG - 2025-05-03 13:43:27 --> Data to save in DB: Array
(
    [name] => Twilight_Pulse
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
)

WARNING - 2025-05-03 13:43:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs/upload"
INFO - 2025-05-03 13:43:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:43:32 --> Saved file info: Array
(
    [field] => song_file
    [saved_as] => de926cc2f7318d486386d5b085e42bd7.mp3
    [name] => 白薔薇.mp3
    [type] => audio/mpeg
    [file] => /tmp/phpuhW06E
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

DEBUG - 2025-05-03 13:43:32 --> Original filename: 白薔薇.mp3
DEBUG - 2025-05-03 13:43:32 --> Song name generated: 白薔薇
DEBUG - 2025-05-03 13:43:32 --> Data to save in DB: Array
(
    [name] => 白薔薇
    [file_path] => /var/www/html/my_fuel_project/public/assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3
)

WARNING - 2025-05-03 13:43:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:43:36 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:36 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:43:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:43:37 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:37 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:43:37 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3 -> /assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
DEBUG - 2025-05-03 13:43:37 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3 -> /assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3
DEBUG - 2025-05-03 13:43:37 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3 -> /assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3
DEBUG - 2025-05-03 13:43:37 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3 -> /assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3
DEBUG - 2025-05-03 13:43:37 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3 -> /assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
DEBUG - 2025-05-03 13:43:37 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3 -> /assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3
WARNING - 2025-05-03 13:43:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:43:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:43:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:43:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:43:46 --> [Pagination Debug] Total log items found: 2
DEBUG - 2025-05-03 13:43:46 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:43:46 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 2
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:43:46 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "2"
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

DEBUG - 2025-05-03 13:43:46 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 13:43:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:43:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:43:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:43:46 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:44:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-03 13:44:19 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:19 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:44:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/create"
INFO - 2025-05-03 13:44:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:44:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/create"
INFO - 2025-05-03 13:44:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:40 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:44:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/1"
INFO - 2025-05-03 13:44:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:43 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:44:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/1/songs"
INFO - 2025-05-03 13:44:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:44:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:44:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:44:45 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3 -> /assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
DEBUG - 2025-05-03 13:44:45 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3 -> /assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3
DEBUG - 2025-05-03 13:44:45 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3 -> /assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3
DEBUG - 2025-05-03 13:44:45 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3 -> /assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3
DEBUG - 2025-05-03 13:44:45 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3 -> /assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
DEBUG - 2025-05-03 13:44:45 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3 -> /assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3
WARNING - 2025-05-03 13:44:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/1/songs"
INFO - 2025-05-03 13:44:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:51 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:44:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:44:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/1/songs"
INFO - 2025-05-03 13:44:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:44:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:45:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:17 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:45:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:17 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/1"
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
WARNING - 2025-05-03 13:45:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/1/songs"
INFO - 2025-05-03 13:45:30 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:30 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-03 13:45:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:38 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:45:38 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3 -> /assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
DEBUG - 2025-05-03 13:45:38 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3 -> /assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3
DEBUG - 2025-05-03 13:45:38 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3 -> /assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3
DEBUG - 2025-05-03 13:45:38 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3 -> /assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3
DEBUG - 2025-05-03 13:45:38 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3 -> /assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
DEBUG - 2025-05-03 13:45:38 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3 -> /assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3
WARNING - 2025-05-03 13:45:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:45:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:45:40 --> [Pagination Debug] Total log items found: 2
DEBUG - 2025-05-03 13:45:40 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:45:40 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 2
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:45:40 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "2"
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

DEBUG - 2025-05-03 13:45:40 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 13:45:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
WARNING - 2025-05-03 13:45:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:41 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-03 13:45:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:43 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:45:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:46 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:45:46 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3 -> /assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
DEBUG - 2025-05-03 13:45:46 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3 -> /assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3
DEBUG - 2025-05-03 13:45:46 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3 -> /assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3
DEBUG - 2025-05-03 13:45:46 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3 -> /assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3
DEBUG - 2025-05-03 13:45:46 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3 -> /assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
DEBUG - 2025-05-03 13:45:46 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3 -> /assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3
WARNING - 2025-05-03 13:45:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 13:45:51 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:51 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 13:45:52 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:52 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 13:45:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:56 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 13:45:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:56 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:45:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-03 13:45:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:45:59 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:45:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-03 13:45:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:00 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:46:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:46:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs/6"
INFO - 2025-05-03 13:46:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:46:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:46:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:46:08 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:08 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:46:08 --> [Pagination Debug] Total log items found: 2
DEBUG - 2025-05-03 13:46:08 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:46:08 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 2
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:46:08 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "2"
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

DEBUG - 2025-05-03 13:46:08 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 13:46:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-03 13:46:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:09 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:46:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:46:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists"
INFO - 2025-05-03 13:46:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:46:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:46:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/create"
INFO - 2025-05-03 13:46:40 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:40 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:46:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:46:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:46:32 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:46:32 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:48:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:48:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 13:48:56 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:48:56 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:48:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:48:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 13:48:57 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:48:57 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:48:57 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3 -> /assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
DEBUG - 2025-05-03 13:48:57 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3 -> /assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3
DEBUG - 2025-05-03 13:48:57 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3 -> /assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3
DEBUG - 2025-05-03 13:48:57 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3 -> /assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3
DEBUG - 2025-05-03 13:48:57 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3 -> /assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
DEBUG - 2025-05-03 13:48:57 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3 -> /assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3
WARNING - 2025-05-03 13:49:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:49:02 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:02 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:49:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:49:02 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:02 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:49:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:49:06 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:06 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:49:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:49:17 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:49:18 --> [Pagination Debug] Total log items found: 3
DEBUG - 2025-05-03 13:49:18 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:49:18 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 3
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:49:18 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "3"
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

DEBUG - 2025-05-03 13:49:18 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 13:49:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:49:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:18 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:49:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-03 13:49:22 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:22 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:49:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2025-05-03 13:49:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:23 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:49:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:49:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:49:27 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:49:27 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:52:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:52:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:52:50 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:52:50 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:52:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:52:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:52:59 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:52:59 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:52:59 --> [Pagination Debug] Total log items found: 5
DEBUG - 2025-05-03 13:52:59 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:52:59 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 5
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:52:59 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "5"
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

DEBUG - 2025-05-03 13:52:59 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 13:53:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:53:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:53:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:53:10 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:53:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:53:10 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:53:10 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:53:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:53:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:53:00 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:53:00 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:54:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations/1/status"
INFO - 2025-05-03 13:54:03 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:03 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:54:03 --> Received status update request: ID=1 Status=played
WARNING - 2025-05-03 13:54:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/1"
INFO - 2025-05-03 13:54:03 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:03 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:54:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:54:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/1/songs"
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:54:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/logs/play"
INFO - 2025-05-03 13:54:05 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:05 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 13:54:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 13:54:13 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 13:54:13 --> [Pagination Debug] Total log items found: 6
DEBUG - 2025-05-03 13:54:13 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 13:54:13 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 6
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 13:54:13 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "6"
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

DEBUG - 2025-05-03 13:54:13 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 13:54:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ".well-known/appspecific/com.chrome.devtools"
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
WARNING - 2025-05-03 13:54:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 13:54:14 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 14:02:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:02:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "playlist/view/2"
INFO - 2025-05-03 14:02:47 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:02:47 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 14:02:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:02:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/playlists/2/songs"
INFO - 2025-05-03 14:02:48 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:02:48 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 14:06:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:06:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 14:06:45 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:06:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 14:06:45 --> [Pagination Debug] Total log items found: 6
DEBUG - 2025-05-03 14:06:45 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 14:06:45 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 6
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 14:06:46 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "6"
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

DEBUG - 2025-05-03 14:06:46 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 14:06:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:06:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 14:06:46 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:06:46 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 14:08:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:08:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 14:08:03 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:08:03 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 14:08:04 --> [Pagination Debug] Total log items found: 6
DEBUG - 2025-05-03 14:08:04 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 14:08:04 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 6
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 14:08:04 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "6"
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

DEBUG - 2025-05-03 14:08:04 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 14:08:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:08:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 14:08:04 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:08:04 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 14:10:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:10:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "home/index"
INFO - 2025-05-03 14:10:53 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:10:53 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 14:10:54 --> [Pagination Debug] Total log items found: 6
DEBUG - 2025-05-03 14:10:54 --> [Pagination Debug] Items per page setting: 10
DEBUG - 2025-05-03 14:10:54 --> [Pagination Debug] Config: Array
(
    [pagination_url] => http://localhost/home/index
    [total_items] => 6
    [per_page] => 10
    [uri_segment] => page
)

DEBUG - 2025-05-03 14:10:54 --> [Pagination Debug] Pagination Object Dump: object(Fuel\Core\Pagination)#42 (3) {
  ["config":protected]=>
  array(12) {
    ["current_page"]=>
    NULL
    ["offset"]=>
    int(0)
    ["per_page"]=>
    int(10)
    ["total_pages"]=>
    int(1)
    ["total_items"]=>
    string(1) "6"
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

DEBUG - 2025-05-03 14:10:54 --> [Pagination Debug] Rendered HTML: 
WARNING - 2025-05-03 14:10:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:10:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/reservations"
INFO - 2025-05-03 14:10:54 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:10:54 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 14:10:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:10:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "songs/index"
INFO - 2025-05-03 14:10:57 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:10:57 --> Fuel\Core\Request::execute - Setting main Request
WARNING - 2025-05-03 14:10:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
INFO - 2025-05-03 14:10:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "api/songs"
INFO - 2025-05-03 14:10:57 --> Fuel\Core\Request::execute - Called
INFO - 2025-05-03 14:10:57 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2025-05-03 14:10:58 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3 -> /assets/uploads/songs/72c3a37b826b84f6e6146c7b025c45cc.mp3
DEBUG - 2025-05-03 14:10:58 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3 -> /assets/uploads/songs/a03748448c671488018a4795b025f89e.mp3
DEBUG - 2025-05-03 14:10:58 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3 -> /assets/uploads/songs/2f13098cf13638318351453e2010beb6.mp3
DEBUG - 2025-05-03 14:10:58 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3 -> /assets/uploads/songs/fc96a84b41365b7638b083f12b7a5241.mp3
DEBUG - 2025-05-03 14:10:58 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3 -> /assets/uploads/songs/2537b807faa1ce48d2c8b3f4a0e3f4e3.mp3
DEBUG - 2025-05-03 14:10:58 --> Converted path: /var/www/html/my_fuel_project/public/assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3 -> /assets/uploads/songs/de926cc2f7318d486386d5b085e42bd7.mp3
