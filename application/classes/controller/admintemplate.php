<?php defined('SYSPATH') or die('No direct script access.');

header('Content-Type: text/html; charset=utf-8');

class Controller_AdminTemplate extends Controller_Template
{
	public $template = 'admin/index';

     /**
      * Инициализируем свойства до запуска методов контроллера (actions),
      */
     public function before()
      {
         // Выполняем всё что нужно выполнить до этого
         parent::before();
         
         if($this->auto_render)
         {
            // Инициализируем переменные шаблона с пустыми значениями
            $this->template->title            = 'Aдминка';
            $this->template->meta_keywords    = '';
            $this->template->meta_description = '';
            $this->template->meta_copywrite   = '';
            $this->template->header           = '';
            $this->template->navigation       = '';
            $this->template->messages         =	array();
            $this->template->content          = '';
            $this->template->styles           = array();
            $this->template->scripts          = array();
          }
         
	    	if (Auth::instance()->logged_in() && Auth::instance()->get_user()->has('roles', 2))
	    	{	
				
		         
		    }
	    	elseif($this->request->action() != 'login')
    		{ 
    			//$this->template->messages['error'] = 'Вы незарегистрированный пользователь!';
    			$this->request->redirect('member/login');
    		}
      }

     /**
      * Заполняем значения по умолчанию для наших свойств перед выводом.
      */
    public function after()
    {
         if($this->auto_render)
         {
             // Определяем значения по умолчанию
             $styles                  = array(
             								'css/style.css' => 'screen',
             							);
             $scripts                 = array(
             							);

             // Добавляем значения по умолчанию к переменным шаблона
             $this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
             $this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
         }
//        var_dump(Auth::instance()->logged_in());
        if (Auth::instance()->logged_in())
        {
			$menu = View::factory('admin/menu');
			$menu->set('username', Auth::instance()->get_user()->username);
			$this->template->navigation = $menu;
        }
        
        if(isset($_SESSION['__messages']) && is_array($_SESSION['__messages']) && count($_SESSION['__messages']))
		{
			if(is_array($this->template->messages))
				$this->template->messages = array_merge($this->template->messages, $_SESSION['__messages']);
			unset($_SESSION['__messages']);
		}
		$e = $this->template->messages;
		if (is_array($e))
		{
            	foreach ($e as $_k=>$_e)
            		if(is_array($_e))
            		{
            			$e = array_merge($e, $_e);
            			unset($e[$_k]);
            		}
		}
        $this->template->messages = $e;
		
         //$this->template->messages = Messages::printAll(true);
         // Выполняем всё что нужно выполнить после этого
         parent::after();
    }
    
    public function setMessage($key, $msg)
    {
    	$_SESSION['__messages'][$key] = $msg;
    }
}