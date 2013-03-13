<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-21 11:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-21 11:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-21 11:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-21 11:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-21 11:55:41 --- ERROR: Database_Exception [ 1146 ]: Table 'slot-auto.gameses' doesn't exist [ SHOW FULL COLUMNS FROM `gameses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-21 11:55:41 --- STRACE: Database_Exception [ 1146 ]: Table 'slot-auto.gameses' doesn't exist [ SHOW FULL COLUMNS FROM `gameses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('gameses')
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#6 Z:\home\slot-auto\www\application\classes\controller\games.php(14): Kohana_ORM::factory('games', '1')
#7 [internal function]: Controller_Games->action_edit()
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#9 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#12 {main}
2011-11-21 12:10:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: userdata ~ APPPATH\views\admin\games\edit.php [ 9 ]
2011-11-21 12:10:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: userdata ~ APPPATH\views\admin\games\edit.php [ 9 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\games\edit.php(9): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(37): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(75): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-21 12:34:24 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-11-21 12:34:24 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(29): Kohana_ORM->save()
#3 [internal function]: Controller_Games->action_edit()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-21 13:25:08 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\controller\games.php [ 28 ]
2011-11-21 13:25:08 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\controller\games.php [ 28 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\games.php(28): Kohana_Core::error_handler()
#1 [internal function]: Controller_Games->action_edit(Object(Controller_Games))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-21 13:30:00 --- ERROR: ErrorException [ 1 ]: Call to undefined function arra_values() ~ APPPATH\classes\controller\games.php [ 28 ]
2011-11-21 13:30:00 --- STRACE: ErrorException [ 1 ]: Call to undefined function arra_values() ~ APPPATH\classes\controller\games.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-21 13:58:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Games' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-11-21 13:58:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Games' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('games')
#1 {main}
2011-11-21 14:06:43 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `games` (`name`, `description`) VALUES ('drtgy', 'tftuyytutyu') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-21 14:06:43 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `games` (`name`, `description`) VALUES ('drtgy', 'tftuyytutyu') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ga...', false, Array)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 Z:\home\slot-auto\www\application\classes\controller\games.php(54): Kohana_ORM->save()
#4 [internal function]: Controller_Games->action_add()
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-21 14:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-21 14:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-21 14:28:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  add_user ~ APPPATH\classes\controller\member.php [ 16 ]
2011-11-21 14:28:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  add_user ~ APPPATH\classes\controller\member.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(16): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}