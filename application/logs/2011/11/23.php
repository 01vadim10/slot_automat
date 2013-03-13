<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-23 10:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-23 10:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-23 10:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-23 10:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-23 10:53:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\controller\member.php [ 22 ]
2011-11-23 10:53:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\controller\member.php [ 22 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(22): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 10:54:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\controller\member.php [ 22 ]
2011-11-23 10:54:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\controller\member.php [ 22 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(22): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 11:56:31 --- ERROR: View_Exception [ 0 ]: The requested view admin/member/register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-23 11:56:31 --- STRACE: View_Exception [ 0 ]: The requested view admin/member/register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/member/re...')
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/member/re...', NULL)
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(87): Kohana_View::factory('admin/member/re...')
#3 Z:\home\slot-auto\www\application\classes\controller\member.php(201): Controller_Member->action_register()
#4 [internal function]: Controller_Member->action_edit()
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-23 12:15:19 --- ERROR: View_Exception [ 0 ]: The requested view admin/member/register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-23 12:15:19 --- STRACE: View_Exception [ 0 ]: The requested view admin/member/register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/member/re...')
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/member/re...', NULL)
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(53): Kohana_View::factory('admin/member/re...')
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-23 12:16:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\admin\register.php [ 3 ]
2011-11-23 12:16:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\admin\register.php [ 3 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\register.php(3): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(27): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(73): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-23 12:21:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\views\admin\register.php [ 6 ]
2011-11-23 12:21:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\views\admin\register.php [ 6 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\register.php(6): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(27): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(73): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-23 12:23:38 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-23 12:23:38 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(36): Kohana_ORM->add('roles', 1)
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-23 12:39:12 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-23 12:39:12 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(35): Kohana_ORM->add('roles', 1)
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-23 12:39:45 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-23 12:39:45 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(35): Kohana_ORM->add('roles', 1)
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-23 12:40:39 --- ERROR: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-23 12:40:39 --- STRACE: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(35): Kohana_ORM->__get('values')
#1 [internal function]: Controller_Member->action_register()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 13:03:15 --- ERROR: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-23 13:03:15 --- STRACE: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(35): Kohana_ORM->__get('values')
#1 [internal function]: Controller_Member->action_register()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 13:13:23 --- ERROR: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-23 13:13:23 --- STRACE: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(35): Kohana_ORM->__get('values')
#1 [internal function]: Controller_Member->action_register()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 13:13:42 --- ERROR: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-23 13:13:42 --- STRACE: Kohana_Exception [ 0 ]: The values property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(35): Kohana_ORM->__get('values')
#1 [internal function]: Controller_Member->action_register()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 13:14:36 --- ERROR: Kohana_Exception [ 0 ]: The password_comfirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-23 13:14:36 --- STRACE: Kohana_Exception [ 0 ]: The password_comfirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(37): Kohana_ORM->__get('password_comfir...')
#1 [internal function]: Controller_Member->action_register()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 13:15:50 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-23 13:15:50 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(39): Kohana_ORM->add('roles', 1)
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-23 13:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL members was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-23 13:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL members was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-23 13:26:53 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\admin\index.php [ 18 ]
2011-11-23 13:26:53 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\admin\index.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\slot-au...', Array)
#1 {main}
2011-11-23 13:46:47 --- ERROR: ErrorException [ 8 ]: Undefined index:  __messages ~ APPPATH\classes\controller\admintemplate.php [ 43 ]
2011-11-23 13:46:47 --- STRACE: ErrorException [ 8 ]: Undefined index:  __messages ~ APPPATH\classes\controller\admintemplate.php [ 43 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->before(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-23 14:04:56 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\controller\admintemplate.php [ 73 ]
2011-11-23 14:04:56 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\controller\admintemplate.php [ 73 ]
--
#0 [internal function]: Kohana_Core::error_handler(NULL, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(73): array_merge()
#2 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}