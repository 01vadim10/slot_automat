<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-16 10:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-16 10:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 10:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-16 10:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 11:16:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Member::has() ~ APPPATH\classes\controller\member.php [ 50 ]
2011-11-16 11:16:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Member::has() ~ APPPATH\classes\controller\member.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 11:16:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Member::has() ~ APPPATH\classes\controller\member.php [ 50 ]
2011-11-16 11:16:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Member::has() ~ APPPATH\classes\controller\member.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 11:23:59 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_ORM::has() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\member.php [ 50 ]
2011-11-16 11:23:59 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_ORM::has() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\member.php [ 50 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-16 11:25:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Member::has() ~ APPPATH\classes\controller\member.php [ 52 ]
2011-11-16 11:25:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Member::has() ~ APPPATH\classes\controller\member.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 12:09:19 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:09:19 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:01 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:01 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:02 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:02 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:02 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:02 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:03 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:03 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:10:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:10:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:20 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:20 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:23 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:23 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:23 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:23 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:23 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:23 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:24 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:24 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:24 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:24 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:24 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:24 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:11:25 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:11:25 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 52 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(52): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:26:07 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 54 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2011-11-16 12:26:07 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in Z:\home\slot-auto\www\application\classes\controller\member.php on line 54 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 Z:\home\slot-auto\www\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(Array)
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(54): Kohana_Database_Query_Builder_Where->where()
#2 [internal function]: Controller_Member->action_view(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 12:32:43 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2011-11-16 12:32:43 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2011-11-16 12:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 12:49:51 --- ERROR: ErrorException [ 2 ]: Controller_Member::include(../views/admin.php) [function.Controller-Member-include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\member.php [ 46 ]
2011-11-16 12:49:51 --- STRACE: ErrorException [ 2 ]: Controller_Member::include(../views/admin.php) [function.Controller-Member-include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\member.php [ 46 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(46): Kohana_Core::error_handler()
#1 Z:\home\slot-auto\www\application\classes\controller\member.php(46): Controller_Member::action_admin()
#2 [internal function]: Controller_Member->action_admin(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-16 13:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:10:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:10:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:11:21 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
2011-11-16 13:11:21 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Front' not found ~ APPPATH\classes\controller\welcome.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2011-11-16 13:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/ADMIN was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:15:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\admin.php [ 11 ]
2011-11-16 13:15:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\admin.php [ 11 ]
--
#0 Z:\home\slot-auto\www\application\views\admin.php(11): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(47): Kohana_Response->body()
#6 [internal function]: Controller_Member->action_admin(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-16 13:16:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\member.php [ 47 ]
2011-11-16 13:16:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\member.php [ 47 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_admin(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-16 13:16:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\admin.php [ 11 ]
2011-11-16 13:16:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\admin.php [ 11 ]
--
#0 Z:\home\slot-auto\www\application\views\admin.php(11): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 Z:\home\slot-auto\www\application\classes\controller\member.php(49): Kohana_Response->body()
#6 [internal function]: Controller_Member->action_admin(Object(Controller_Member))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-16 13:16:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\member.php [ 47 ]
2011-11-16 13:16:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\member.php [ 47 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_admin(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-16 13:34:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\admin.php [ 25 ]
2011-11-16 13:34:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\admin.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\slot-au...', Array)
#1 {main}
2011-11-16 13:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:37:18 --- ERROR: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\controller\member.php [ 13 ]
2011-11-16 13:37:18 --- STRACE: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\controller\member.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 13:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/moderator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/vew was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-16 13:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/vew was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 13:58:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\member.php [ 54 ]
2011-11-16 13:58:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\member.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_memb...')
#1 {main}
2011-11-16 13:58:48 --- ERROR: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\controller\member.php [ 46 ]
2011-11-16 13:58:48 --- STRACE: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\controller\member.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}