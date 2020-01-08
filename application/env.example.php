<?php


$config['base_url'] = 'http://localhost:8001/';

// testing/
$config['recatpcha_site_key'] = 'lala_6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
$config['recatpcha_secret_key'] = 'lala_6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';

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