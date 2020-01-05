<?php


$config['base_url'] = 'http://localhost:8001/';



$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'db',
	'username' => 'root',
	'password' => 'test',
	'database' => 'myDb',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);


$config['salt'] = 'cobasaja';
$config['with_love'] = 'wkwk';