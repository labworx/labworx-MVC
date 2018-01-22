<?php
$config = array();

// database configuration for Capsule
// See: https://github.com/illuminate/database

$config['db'] = array(
	'driver'    =>'mysql',
	'host'      =>'localhost',
	'username'  =>'root',
	'password'  =>'root',
	'database'  =>'dbname',
	'charset'   =>'utf8',
	'collation' =>'utf8_unicode_ci',
	'prefix'    =>''
);

$config['debug'] = true;