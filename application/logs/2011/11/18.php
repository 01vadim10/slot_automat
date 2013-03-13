<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-18 10:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 10:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 10:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 10:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 11:08:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\classes\controller\admintemplate.php [ 55 ]
2011-11-18 11:08:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\classes\controller\admintemplate.php [ 55 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(55): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:49:31 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:49:31 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:51:06 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:51:06 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:51:07 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:51:07 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:51:07 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:51:07 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:51:08 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:51:08 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:51:13 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:51:13 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:52:32 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:52:32 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:55:29 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:55:29 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:55:42 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:55:42 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(61): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:57:31 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:57:31 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(63): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:57:31 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:57:31 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(63): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:57:32 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:57:32 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(63): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:57:32 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:57:32 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(63): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 11:57:32 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 11:57:32 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(63): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:04:48 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 12:04:48 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(72): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:10:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\classes\controller\admintemplate.php [ 50 ]
2011-11-18 12:10:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\classes\controller\admintemplate.php [ 50 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->before(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:12:21 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: messages ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 12:12:21 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: messages ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(50): Kohana_View->__get('messages')
#1 [internal function]: Controller_AdminTemplate->before()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:18:39 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-11-18 12:18:39 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(72): Kohana_View->__get('styles')
#1 [internal function]: Controller_AdminTemplate->after()
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Member))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:19:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 79 ]
2011-11-18 12:19:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 79 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(79): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:29:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
2011-11-18 12:29:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:35:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
2011-11-18 12:35:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:36:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
2011-11-18 12:36:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:37:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
2011-11-18 12:37:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 77 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 12:38:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\menu.php [ 1 ]
2011-11-18 12:38:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\menu.php [ 1 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\menu.php(1): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(23): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(82): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-18 12:44:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\admintemplate.php [ 2 ]
2011-11-18 12:44:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\admintemplate.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Admi...')
#1 {main}
2011-11-18 12:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-18 12:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 12:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-18 12:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 12:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-18 12:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 12:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-18 12:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 12:51:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 76 ]
2011-11-18 12:51:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 76 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(76): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:04:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 69 ]
2011-11-18 13:04:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 69 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(69): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:04:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 69 ]
2011-11-18 13:04:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 69 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(69): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:05:10 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 69 ]
2011-11-18 13:05:10 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\admintemplate.php [ 69 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(69): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:05:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 72 ]
2011-11-18 13:05:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 72 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(72): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:08:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 73 ]
2011-11-18 13:08:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admintemplate.php [ 73 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(73): Kohana_Core::error_handler()
#1 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:09:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 15 ]
2011-11-18 13:09:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 15 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(15): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:11:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:11:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:11:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:11:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:13:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:13:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:16:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:16:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:17:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:17:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:17:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:17:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:17:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:17:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:17:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:17:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:18:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 17 ]
2011-11-18 13:18:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 17 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(17): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:19:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 17 ]
2011-11-18 13:19:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 17 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(17): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:21:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:21:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(78): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:26:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
2011-11-18 13:26:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_login(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:26:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
2011-11-18 13:26:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_login(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:26:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
2011-11-18 13:26:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_login(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:27:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
2011-11-18 13:27:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_login(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:27:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
2011-11-18 13:27:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH\classes\controller\member.php [ 75 ]
--
#0 Z:\home\slot-auto\www\application\classes\controller\member.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Member->action_login(Object(Controller_Member))
#2 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-18 13:28:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
2011-11-18 13:28:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\menu.php(3): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(21): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(96): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-18 13:29:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
2011-11-18 13:29:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\menu.php(3): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(21): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(96): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-18 13:31:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
2011-11-18 13:31:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\menu.php(3): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(21): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(97): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-18 13:32:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
2011-11-18 13:32:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\admin\menu.php [ 3 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\menu.php(3): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\views\admin\index.php(21): Kohana_View->__toString('Z:\home\slot-au...', Array)
#5 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#6 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(97): Kohana_Controller_Template->after()
#9 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#10 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-18 13:34:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
2011-11-18 13:34:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\views\admin\index.php [ 16 ]
--
#0 Z:\home\slot-auto\www\application\views\admin\index.php(16): Kohana_Core::error_handler('Z:\home\slot-au...', Array)
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(61): include('Z:\home\slot-au...')
#2 Z:\home\slot-auto\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\slot-auto\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 Z:\home\slot-auto\www\application\classes\controller\admintemplate.php(97): Kohana_Controller_Template->after()
#5 [internal function]: Controller_AdminTemplate->after(Object(Controller_Member))
#6 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-18 13:52:45 --- ERROR: View_Exception [ 0 ]: The requested view member/admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-18 13:52:45 --- STRACE: View_Exception [ 0 ]: The requested view member/admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('member/admin')
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(30): Kohana_View->__construct('member/admin', NULL)
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(93): Kohana_View::factory('member/admin')
#3 [internal function]: Controller_Member->action_login()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-18 13:53:36 --- ERROR: View_Exception [ 0 ]: The requested view views/admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-18 13:53:36 --- STRACE: View_Exception [ 0 ]: The requested view views/admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('views/admin')
#1 Z:\home\slot-auto\www\system\classes\kohana\view.php(30): Kohana_View->__construct('views/admin', NULL)
#2 Z:\home\slot-auto\www\application\classes\controller\member.php(93): Kohana_View::factory('views/admin')
#3 [internal function]: Controller_Member->action_login()
#4 Z:\home\slot-auto\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-18 14:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:07 --- ERROR: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\controller\admintemplate.php [ 34 ]
2011-11-18 14:10:07 --- STRACE: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\controller\admintemplate.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-18 14:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-18 14:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 14:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-18 14:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 14:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-18 14:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 14:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-18 14:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 14:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-18 14:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\slot-auto\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\slot-auto\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-18 14:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-18 14:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-18 14:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/menu.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\slot-auto\www\index.php(109): Kohana_Request->execute()
#1 {main}