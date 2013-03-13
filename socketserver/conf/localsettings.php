<?php

//define('ONLINE', 1);
error_reporting(E_ALL ^ E_NOTICE);

define('MYSQLHOST', 'localhost');
define('MYSQLPORT', '3306');
define('MYSQLUSER', 'root');
define('MYSQLPASSWORD', '');
define('MYSQLDBASE', 'slot-auto');

define('SERVER_IP', '127.0.0.1');
define('SERVER_PORT', 1113);
define('SERVER_TIMER', 2000);	//onTime event in usec
define('SERVER_RPS', 10);	//requests per seconds that server can handle from 1 user
define('SERVER_RESTART_EVERY', 3600);	//exit server every .. seconds

define('TBL_PREFIX','slt_');

define('ROOT', realpath(dirname(__FILE__).'/../').'/');
define('HOST', $_SERVER['SERVER_NAME']);
define('ROOTHTML', 'http://'.HOST.'/');
define('COOKIE_DOMAIN', '');
define('COOKIE_PATH', '/');

?>