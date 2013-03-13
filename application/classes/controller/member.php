<?php defined('SYSPATH') or die('No direct access allowed.');
 // Описание класса
class Controller_Member extends Controller_AdminTemplate {
 
	public function action_index()
    {
    	$data = DB::select()->from('roles_users')->where('role_id', '=', 1)->join('users')->on('user_id', '=', 'id')->execute()->as_array();
    	$view = View::factory(URL::site('admin'));
    	$view->set('data', $data);
    	$this->template->content = $view;
    }
    // Регистрация пользователей
    public function action_register()
    {
    	$id = $this->request->param('id');
	   	$model = ORM::factory('user', $id);
	   	
		if($id !== NULL && !$model->loaded())
			$this->request->redirect('member');
		
   		if(isset($_REQUEST['add']))
   		{
   			$action = $this->request->action();
			
	        try
	        {
				if($action == 'register')
				{
					$model->create_user($_POST, array('username', 'password', 'email'));
					$model->add('roles', 1);
				}else{
					$model->update_user($_POST, array('username', 'password', 'email'));
				}
				
				$this->setMessage('edit_user', 'Модератор был успешно '.($action == 'edit'?'отредактирован':'добавлен'));
     	        $this->request->redirect('member');
	        }
	        catch (ORM_Validation_Exception $e)
	        {
	            // Это если возникли какие-то ошибки
	            list($e) = array_values($e->errors('models', false));
	            $this->template->messages['err_val_except'] = $e;
	        }
   		}
   		$data = $model->as_array();
    	$view = View::factory(URL::site('admin/register'));
    	$view->set('userdata', $data);
    	$view->set('action', $this->request->action());
    	$this->template->content = $view;
    }
    
    // Метод разлогивания
    public function action_logout()
    {
    // Пытаемся разлогиниться
    if (Auth::instance()->logout())
        {
            // Если получается, то предлагаем снова залогиниться
            return $this->request->redirect('member/login');
        }
    else
        {
            // А иначе - пишем что не удалось
            $err_mes = 'Ошибка выхода!';
        }
    }
 
    // Метод логина
    public function action_login()
    {
        // Проверям, вдруг пользователь уже зашел
         if(Auth::instance()->logged_in())
            {
            // И если это так, то отправляем его сразу на страницу администратора
            return $this->request->redirect('member');
            }
 
        // Если же пользователь не зашел, но данные на страницу пришли, то:
        if ($_POST)
        {
            // Создаем переменную, отвечающую за связь с моделью данных User
            $user = ORM::factory('user');
            // в $status помещаем результат функции login
            $status = Auth::instance()->login($_POST['username'], $_POST['password']);
            // Если логин успешен, то
            if ($status)
            {
                // Отправляем пользователя на его страницу
                $this->request->redirect('member');
            }
            else
            {
                // Иначе ничего не получилось, пишем failed
                $this->template->messages['err_msg'] = 'Ошибка входа!';
            }
        }
        // Грузим view логина
        $this->template->content = View::factory(URL::site('login'));
    }
    
   public function action_edit()
   {
	   	$this->action_register();
   }
   
   public function action_delete()
   {
   		if (isset($_REQUEST['id_del']))
   		{
   			$id_del = (array)$_REQUEST['id_del'];
   			array_walk($id_del, 'intval');
   			if(count($id_del))
				$result = DB::delete('users')->where('id', 'IN', $id_del)->execute();
			$this->request->redirect('member');
   		}
   }
}