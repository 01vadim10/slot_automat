<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-28 10:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-28 10:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-28 10:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-28 10:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-28 10:32:18 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2011-11-28 10:32:18 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2011-11-28 10:33:32 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-gh' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'gh', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 10:33:32 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-gh' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'gh', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(64): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 10:40:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\controller\games.php [ 72 ]
2011-11-28 10:40:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\controller\games.php [ 72 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\games.php(72): Kohana_Core::error_handler()
#1 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-28 10:43:48 --- ERROR: ErrorException [ 8 ]: Undefined property:  Controller_Games::$action ~ APPPATH\classes\controller\games.php [ 52 ]
2011-11-28 10:43:48 --- STRACE: ErrorException [ 8 ]: Undefined property:  Controller_Games::$action ~ APPPATH\classes\controller\games.php [ 52 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\games.php(52): Kohana_Core::error_handler()
#1 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-28 10:56:49 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-dfg' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'dfg', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 10:56:49 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-dfg' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'dfg', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:03:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `id` IN ('1')' at line 1 [ UPDATE `param_names` SET  WHERE `id` IN ('1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:03:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `id` IN ('1')' at line 1 [ UPDATE `param_names` SET  WHERE `id` IN ('1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(95): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(77): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:03:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `id` IN ('2')' at line 1 [ UPDATE `param_names` SET  WHERE `id` IN ('2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:03:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `id` IN ('2')' at line 1 [ UPDATE `param_names` SET  WHERE `id` IN ('2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(95): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(77): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:03:57 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-dfg' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'dfg', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:03:57 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-dfg' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'dfg', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:04:13 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-cvv' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'cvv', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:04:13 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-cvv' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'cvv', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:10:11 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-ds' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'ds', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:10:11 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-ds' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'ds', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:11:39 --- ERROR: ErrorException [ 2 ]: Header may not contain more than a single header, new line detected. ~ SYSPATH\classes\kohana\http\header.php [ 926 ]
2011-11-28 11:11:39 --- STRACE: ErrorException [ 2 ]: Header may not contain more than a single header, new line detected. ~ SYSPATH\classes\kohana\http\header.php [ 926 ]
--
#0 [internal function]: Kohana_Core::error_handler('Location: POST ...', false)
#1 Z:\home\slot-auto\www\system\classes\kohana\http\header.php(926): header(Array, false)
#2 Z:\home\slot-auto\www\system\classes\kohana\http\header.php(893): Kohana_HTTP_Header->_send_headers_to_php(Object(Response), false, NULL)
#3 Z:\home\slot-auto\www\system\classes\kohana\response.php(358): Kohana_HTTP_Header->send_headers()
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(956): Kohana_Response->send_headers(Object(Request))
#5 Z:\home\slot-auto\www\application\classes\controller\games.php(67): Kohana_Request->redirect()
#6 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-28 11:17:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\games.php [ 56 ]
2011-11-28 11:17:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\games.php [ 56 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\games.php(56): Kohana_Core::error_handler()
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(79): Controller_Games->action_add_settings()
#2 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:18:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\games.php [ 56 ]
2011-11-28 11:18:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\games.php [ 56 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\games.php(56): Kohana_Core::error_handler()
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(79): Controller_Games->action_add_settings()
#2 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:20:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  id_del_settings ~ APPPATH\classes\controller\games.php [ 101 ]
2011-11-28 11:20:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  id_del_settings ~ APPPATH\classes\controller\games.php [ 101 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\games.php(101): Kohana_Core::error_handler()
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#2 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:24:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  id_del_settings ~ APPPATH\classes\controller\games.php [ 101 ]
2011-11-28 11:24:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  id_del_settings ~ APPPATH\classes\controller\games.php [ 101 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\games.php(101): Kohana_Core::error_handler()
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#2 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-28 11:25:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `param_names` SET `0` = '14' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:25:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `param_names` SET `0` = '14' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(103): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:30:29 --- ERROR: ErrorException [ 2 ]: array_walk() [function.array-walk]: The argument should be an array ~ APPPATH\classes\controller\games.php [ 103 ]
2011-11-28 11:30:29 --- STRACE: ErrorException [ 2 ]: array_walk() [function.array-walk]: The argument should be an array ~ APPPATH\classes\controller\games.php [ 103 ]
--
#0 [internal function]: Kohana_Core::error_handler(NULL, 'intval')
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(103): array_walk()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:30:48 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:30:48 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(105): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:31:09 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:31:09 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(106): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:32:16 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Update::set() must be an array, string given, called in Z:\home\slot-auto\www\application\classes\controller\games.php on line 106 and defined ~ MODPATH\database\classes\kohana\database\query\builder\update.php [ 56 ]
2011-11-28 11:32:16 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Update::set() must be an array, string given, called in Z:\home\slot-auto\www\application\classes\controller\games.php on line 106 and defined ~ MODPATH\database\classes\kohana\database\query\builder\update.php [ 56 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\update.php(56): Kohana_Core::error_handler('value', 'IN', Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(106): Kohana_Database_Query_Builder_Update->set()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:37:32 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:37:32 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(105): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:38:10 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:38:10 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(105): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:38:14 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:38:14 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN ('14') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(105): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:38:47 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN (('14')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:38:47 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN (('14')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(105): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 11:38:57 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN (('14')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 11:38:57 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '6') WHERE `id` IN (('14')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(105): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 12:07:00 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('1', '3') WHERE `id` IN ('14', '19') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 12:07:00 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('1', '3') WHERE `id` IN ('14', '19') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(106): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 12:08:07 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('4', '') WHERE `id` IN (('14', '19')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 12:08:07 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('4', '') WHERE `id` IN (('14', '19')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(106): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 12:10:06 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '') WHERE `id` IN (('20', '19')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 12:10:06 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `param_names` SET `value` = ('5', '') WHERE `id` IN (('20', '19')) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `param_n...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(107): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(86): Controller_Games->action_save_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 12:24:53 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-cvv' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'cvv', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 12:24:53 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-cvv' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'cvv', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(57): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(80): Controller_Games->action_add_settings()
#3 [internal function]: Controller_Games->action_settings()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 12:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-28 12:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-28 12:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-28 12:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-28 12:54:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'game_id, denomination' in 'where clause' [ SELECT * FROM `param_names` WHERE `game_id, denomination` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 12:54:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'game_id, denomination' in 'where clause' [ SELECT * FROM `param_names` WHERE `game_id, denomination` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(78): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(99): Controller_Games->action_settings()
#3 [internal function]: Controller_Games->action_denomination()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-28 12:56:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'game_id AND denomination' in 'where clause' [ SELECT * FROM `param_names` WHERE `game_id AND denomination` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-28 12:56:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'game_id AND denomination' in 'where clause' [ SELECT * FROM `param_names` WHERE `game_id AND denomination` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(78): Kohana_Database_Query->execute()
#2 Z:\home\slot-auto\www\application\classes\controller\games.php(99): Controller_Games->action_settings()
#3 [internal function]: Controller_Games->action_denomination()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}