<?php
	error_reporting(E_ALL);
	set_time_limit(0);
	ob_implicit_flush();
	
	require_once(realpath(dirname(__FILE__).DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.'conf'.DIRECTORY_SEPARATOR.'includes.php');
	
	new MySQLDBase(MYSQLHOST.':'.MYSQLPORT, MYSQLUSER, MYSQLPASSWORD, MYSQLDBASE);
	
	$daemon = new socketDaemon();
	$server = $daemon->create_server('gameServer', 'gameServerClient', SERVER_IP, SERVER_PORT);
	$daemon->process();
?>