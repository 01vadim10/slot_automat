<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-27 02:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 02:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 02:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 02:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 03:19:06 --- ERROR: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-27 03:19:06 --- STRACE: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password_confir...', '2')
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(34): Kohana_ORM->__set('password_confir...', '2')
#2 [internal function]: Controller_Member->action_register()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-27 03:25:46 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-11-27 03:25:46 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#1 Z:\home\slot-auto\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(26): Model_Auth_User->create_user(Array, Array)
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-27 03:52:57 --- ERROR: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH\classes\controller\member.php [ 42 ]
2011-11-27 03:52:57 --- STRACE: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH\classes\controller\member.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-27 03:54:10 --- ERROR: ErrorException [ 2 ]: array_values() [function.array-values]: The argument should be an array ~ APPPATH\classes\controller\member.php [ 43 ]
2011-11-27 03:54:10 --- STRACE: ErrorException [ 2 ]: array_values() [function.array-values]: The argument should be an array ~ APPPATH\classes\controller\member.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler('password must b...')
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(43): array_values()
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(104): Controller_Member->action_register()
#3 [internal function]: Controller_Member->action_edit(Object(Controller_Member))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-27 03:59:56 --- ERROR: ErrorException [ 2 ]: array_values() [function.array-values]: The argument should be an array ~ APPPATH\classes\controller\member.php [ 44 ]
2011-11-27 03:59:56 --- STRACE: ErrorException [ 2 ]: array_values() [function.array-values]: The argument should be an array ~ APPPATH\classes\controller\member.php [ 44 ]
--
#0 [internal function]: Kohana_Core::error_handler('password must b...')
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(44): array_values()
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(105): Controller_Member->action_register()
#3 [internal function]: Controller_Member->action_edit(Object(Controller_Member))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-27 04:00:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '=' ~ APPPATH\classes\controller\member.php [ 42 ]
2011-11-27 04:00:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '=' ~ APPPATH\classes\controller\member.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_memb...')
#1 {main}
2011-11-27 04:07:02 --- ERROR: ErrorException [ 2 ]: array_values() [function.array-values]: The argument should be an array ~ APPPATH\classes\controller\member.php [ 43 ]
2011-11-27 04:07:02 --- STRACE: ErrorException [ 2 ]: array_values() [function.array-values]: The argument should be an array ~ APPPATH\classes\controller\member.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler('?????????? emai...')
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(43): array_values()
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(105): Controller_Member->action_register()
#3 [internal function]: Controller_Member->action_edit(Object(Controller_Member))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-27 04:20:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\member.php [ 41 ]
2011-11-27 04:20:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\member.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_memb...')
#1 {main}
2011-11-27 04:34:08 --- ERROR: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ APPPATH\classes\controller\member.php [ 41 ]
2011-11-27 04:34:08 --- STRACE: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ APPPATH\classes\controller\member.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-27 04:59:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2011-11-27 04:59:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2011-11-27 04:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admion was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-27 04:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admion was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 04:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-27 04:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 05:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 05:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 05:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 05:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 05:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 05:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/combinations.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-27 06:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-27 06:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL application/views was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-27 06:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL application/views was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 06:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-27 06:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL application was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 06:00:56 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2011-11-27 06:00:56 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2011-11-27 06:09:08 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2011-11-27 06:09:08 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2011-11-27 06:23:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  params ~ APPPATH\views\admin\games\index.php [ 19 ]
2011-11-27 06:23:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  params ~ APPPATH\views\admin\games\index.php [ 19 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\games\index.php(19): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 06:40:06 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\games\index.php [ 13 ]
2011-11-27 06:40:06 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\games\index.php [ 13 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\games\index.php(13): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 06:47:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\games\index.php [ 13 ]
2011-11-27 06:47:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\games\index.php [ 13 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\games\index.php(13): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 06:47:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\games\index.php [ 13 ]
2011-11-27 06:47:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\games\index.php [ 13 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\games\index.php(13): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 06:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL games/settings2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 06:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL games/settings2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 06:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL games/settings/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 06:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL games/settings/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 07:22:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
2011-11-27 07:22:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(11): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 07:23:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
2011-11-27 07:23:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(11): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 07:23:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
2011-11-27 07:23:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(11): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 07:23:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
2011-11-27 07:23:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(11): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 07:24:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
2011-11-27 07:24:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\settings.php [ 11 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(11): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 07:43:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'param_games' in 'where clause' [ SELECT * FROM `game_params` WHERE `param_games` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-27 07:43:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'param_games' in 'where clause' [ SELECT * FROM `game_params` WHERE `param_games` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-27 07:43:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\settings.php [ 21 ]
2011-11-27 07:43:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\settings.php [ 21 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(21): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 07:55:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\views\settings.php [ 15 ]
2011-11-27 07:55:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\views\settings.php [ 15 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(15): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 08:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 08:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 08:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 08:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL games/denomination/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 08:25:56 --- ERROR: ErrorException [ 8 ]: Undefined index:  value ~ APPPATH\views\settings.php [ 14 ]
2011-11-27 08:25:56 --- STRACE: ErrorException [ 8 ]: Undefined index:  value ~ APPPATH\views\settings.php [ 14 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(14): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 09:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 09:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 09:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 09:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 09:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 09:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 09:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-27 09:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:21:02 --- ERROR: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-27 09:21:02 --- STRACE: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-27 09:22:47 --- ERROR: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-27 09:22:47 --- STRACE: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-27 09:28:02 --- ERROR: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-27 09:28:02 --- STRACE: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(69): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-27 09:29:26 --- ERROR: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-27 09:29:26 --- STRACE: Database_Exception [ 1048 ]: Column 'game_id' cannot be null [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES (NULL, 'gfnh', '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(69): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-27 09:30:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\settings.php [ 1 ]
2011-11-27 09:30:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\settings.php [ 1 ]
--
#0 Z:\home\slot-auto\www\application\views\settings.php(1): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(90): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Games))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-27 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-27 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-27 09:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-27 09:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-27 09:43:34 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-df' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'df', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-27 09:43:34 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-df' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'df', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(64): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-27 09:45:44 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1-df' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'df', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-27 09:45:44 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1-df' for key 'game_id' [ INSERT INTO `param_names` (`game_id`, `name`, `value`) VALUES ('1', 'df', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 Z:\home\slot-auto\www\application\classes\controller\games.php(64): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Games->action_settings()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Games))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}