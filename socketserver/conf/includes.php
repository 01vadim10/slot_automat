<?php

require_once(dirname(__FILE__).'/localsettings.php');

define('LIB_DIR',		ROOT.'lib/');
require_once(LIB_DIR.'socket'.DIRECTORY_SEPARATOR.'socket.php');
require_once(LIB_DIR.'socket'.DIRECTORY_SEPARATOR.'gameServer.php');



define('TBL_USERS', 	TBL_PREFIX.'lobby_users');
define('TBL_SYMBOLS', 	TBL_PREFIX.'symbols');
/*
define('TBL_SESSION',	TBL_PREFIX_FORUM.'sessions');
define('TBL_ONLINE', 	TBL_PREFIX.'online');*/
define('DAEMON_STARTED', time());
define('TBL_GAME_COUNT',	TBL_PREFIX.'game_count');
define('TBL_SUCCESS_COUNT', TBL_PREFIX.'success_count');
define('TBL_BETS', TBL_PREFIX.'bets');
define('TBL_PARAM_NAMES', TBL_PREFIX.'param_names');
define('TBL_PARAM_GROUPS', TBL_PREFIX.'param_groups');

require_once(LIB_DIR.'MySQLDBase.class.php');
require_once(LIB_DIR.'General.php');
require_once(LIB_DIR.'Messages.php');
require_once(LIB_DIR.'Errors.php');
Messages::init();

function __autoload($class) {
    $path = strtolower(preg_replace('/([a-z])([A-Z])/', '$1/$2', $class));
    if(file_exists(LIB_DIR. $path . '.php')) {
        require_once(LIB_DIR. $path . '.php');
        return TRUE;
    }
}
?>