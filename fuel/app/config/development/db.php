<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type'        => 'mysqli',
		'connection'  => array(
			'hostname'   => 'db',
			'database'   => 'my_music_app_db',
			'username'   => 'root',
			'password'   => 'root',
			'persistent' => false,
		),
		'identifier'   => '`',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'collation'    => 'utf8_unicode_ci',
		'enable_cache' => true,
		'profiling'    => false,
	),
);
