<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-25 10:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-25 10:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-25 10:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-25 10:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-25 11:20:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\i18n.php [ 164 ]
2011-11-25 11:20:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\i18n.php [ 164 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\i18n.php(164): strtr(Array, Array)
#2 Z:\home\slot-auto\www\system\classes\kohana\validation.php(577): __('models/user', true)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', true)
#4 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models')
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(55): Kohana_ORM_Validation_Exception->errors()
#6 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-25 11:29:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\i18n.php [ 164 ]
2011-11-25 11:29:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\i18n.php [ 164 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\i18n.php(164): strtr(Array, Array)
#2 Z:\home\slot-auto\www\system\classes\kohana\validation.php(577): __('models/user', true)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', true)
#4 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models')
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(55): Kohana_ORM_Validation_Exception->errors()
#6 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-25 11:30:33 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\i18n.php [ 164 ]
2011-11-25 11:30:33 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\i18n.php [ 164 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\i18n.php(164): strtr(Array, Array)
#2 Z:\home\slot-auto\www\system\classes\kohana\validation.php(577): __('models/user', true)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', true)
#4 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models')
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(55): Kohana_ORM_Validation_Exception->errors()
#6 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-25 11:37:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_AdminTemplate::setMessage(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ APPPATH\classes\controller\admintemplate.php [ 84 ]
2011-11-25 11:37:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_AdminTemplate::setMessage(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ APPPATH\classes\controller\admintemplate.php [ 84 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(84): Kohana_Core::error_handler('user_pass_empty')
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Controller_AdminTemplate->setMessage()
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(173): Controller_Member->action_register()
#3 [internal function]: Controller_Member->action_edit(Object(Controller_Member))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-25 11:45:31 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
2011-11-25 11:45:31 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\validation.php(583): strtr('models/user', false)
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', false)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models', false)
#4 Z:\home\slot-auto\www\application\classes\controller\member.php(58): Kohana_ORM_Validation_Exception->errors()
#5 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-25 11:45:44 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
2011-11-25 11:45:44 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\validation.php(583): strtr('models/user', false)
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', false)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models', false)
#4 Z:\home\slot-auto\www\application\classes\controller\member.php(58): Kohana_ORM_Validation_Exception->errors()
#5 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-25 11:47:21 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
2011-11-25 11:47:21 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\validation.php(583): strtr('models/user', false)
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', false)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models', false)
#4 Z:\home\slot-auto\www\application\classes\controller\member.php(58): Kohana_ORM_Validation_Exception->errors()
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(173): Controller_Member->action_register()
#6 [internal function]: Controller_Member->action_edit(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-25 11:50:59 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
2011-11-25 11:50:59 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\validation.php(583): strtr('models/user', false)
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', false)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models', false)
#4 Z:\home\slot-auto\www\application\classes\controller\member.php(58): Kohana_ORM_Validation_Exception->errors()
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(173): Controller_Member->action_register()
#6 [internal function]: Controller_Member->action_edit(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-25 11:51:13 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
2011-11-25 11:51:13 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\validation.php(583): strtr('models/user', false)
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', false)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models', false)
#4 Z:\home\slot-auto\www\application\classes\controller\member.php(58): Kohana_ORM_Validation_Exception->errors()
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(173): Controller_Member->action_register()
#6 [internal function]: Controller_Member->action_edit(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-25 11:56:02 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
2011-11-25 11:56:02 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\validation.php [ 583 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\validation.php(583): strtr('models/user', false)
#2 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('user', Array, 'models', false)
#3 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('models', false)
#4 Z:\home\slot-auto\www\application\classes\controller\member.php(58): Kohana_ORM_Validation_Exception->errors()
#5 [internal function]: Controller_Member->action_register(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-25 12:34:49 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-11-25 12:34:49 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(32): Kohana_ORM->save()
#3 Z:\home\slot-auto\www\application\classes\controller\member.php(185): Controller_Member->action_register()
#4 [internal function]: Controller_Member->action_edit()
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-25 13:31:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\member.php [ 116 ]
2011-11-25 13:31:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\member.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_memb...')
#1 {main}
2011-11-25 13:32:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\member.php [ 116 ]
2011-11-25 13:32:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\member.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_memb...')
#1 {main}
2011-11-25 13:33:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\member.php [ 116 ]
2011-11-25 13:33:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\member.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_memb...')
#1 {main}
2011-11-25 13:43:21 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-25 13:43:21 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2011-11-25 13:49:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\member.php [ 31 ]
2011-11-25 13:49:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\member.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_memb...')
#1 {main}
2011-11-25 13:59:56 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2011-11-25 13:59:56 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2011-11-25 14:00:24 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-25 14:00:24 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(37): Kohana_ORM->add('roles', 1)
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-25 14:07:36 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-25 14:07:36 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(37): Kohana_ORM->add('roles', 1)
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-25 14:15:13 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH\classes\kohana\view.php [ 339 ]
2011-11-25 14:15:13 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH\classes\kohana\view.php [ 339 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#1 Z:\home\slot-auto\www\application\views\admin\index.php(26): Kohana_View->__toString()
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\slot-au...', Array)
#4 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(81): Kohana_Controller_Template->after()
#6 [internal function]: Controller_AdminTemplate->after()
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-25 14:15:25 --- ERROR: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-25 14:15:25 --- STRACE: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('')
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(45): Kohana_View::factory('')
#3 [internal function]: Controller_Member->action_register()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-25 14:25:03 --- ERROR: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-25 14:25:03 --- STRACE: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password_confir...', '')
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(31): Kohana_ORM->__set('password_confir...', '')
#2 [internal function]: Controller_Member->action_register()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-25 14:30:42 --- ERROR: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-25 14:30:42 --- STRACE: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password_confir...', '')
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(31): Kohana_ORM->__set('password_confir...', '')
#2 [internal function]: Controller_Member->action_register()
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-25 14:33:19 --- ERROR: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-25 14:33:19 --- STRACE: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password_confir...', '')
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set('password_confir...', '')
#2 Z:\home\slot-auto\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\slot-auto\www\application\classes\controller\member.php(26): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Member->action_register()
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-25 14:33:55 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-11-25 14:33:55 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
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
2011-11-25 14:35:50 --- ERROR: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-11-25 14:35:50 --- STRACE: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password_confir...', '')
#1 Z:\home\slot-auto\www\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set('password_confir...', '')
#2 Z:\home\slot-auto\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\slot-auto\www\application\classes\controller\member.php(28): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Member->action_register()
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#9 {main}