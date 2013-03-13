<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Games extends Controller_AdminTemplate{
	public function action_index()
    {
    	$data = DB::select()->from('games')->execute()->as_array();
    	$view = View::factory('admin/games/index');
    	$view->set('data', $data);
    	$this->template->content = $view;
    }
    
   public function action_add()
   {
   		$id = $this->request->param('id');
	   	$games = ORM::factory('game', $id);
	   	
		if($id !== NULL && !$games->loaded())
			$this->request->redirect('game');

		if(isset($_REQUEST['change']))
   		{
   			$action = $this->request->action();
   			$games->name = $_POST['name'];
	        $games->description = $_POST['description'];
	        
			try
			{
				$games->save();
				$this->setMessage('add_user', 'Игра была успешно '.($action == 'edit'?'отредактирована':'добавлена'));
	        	$this->request->redirect('games');
			}
			catch(ORM_Validation_Exception $e)
			{
				list($e) = array_values($e->errors('models', false));
				$this->template->messages['err_val_except'] = $e;
			}
			
   		}
   		
   		$data = $games->as_array();
    	$view = View::factory(URL::site('admin/games/add'));
    	$view->set('userdata', $data);
    	$view->set('action', $this->request->action());
    	$this->template->content = $view;
   	}
   
	public function action_add_settings()
	{
		if(isset($_REQUEST['add_param']))
   		{
   			$action = $this->request->action();
   			$id = $this->request->param('id');
   			$name = $_POST['add_name'];
   			$value = $_POST['add_value'];
   			if (!empty($name))
	        {
				$query = DB::insert('param_names', array('game_id', 'name', 'value', 'denomination'))->
        				values(array($id, $name, $value, '1'))->execute();
				$this->setMessage('add_param', 'Параметр был успешно добавлен.');
	        }
	        else
	        	$this->setMessage('add_param', 'Имя параметра не может быть пустым!');
			
   		}
   		$this->request->redirect($this->request->uri());
	}
   
	public function action_edit()
	{
		$this->action_add();
	}
	
	public function action_settings()
	{
		$action = $this->request->action();
		$id = $this->request->param('id');
//		var_dump($action);
		if ($action == 'denomination')
			$data = DB::select()->from('param_names')->where('game_id', '=', $id)->and_where('denomination', '=', '1')->execute()->as_array();
		elseif ($action == 'settings')
			$data = DB::select()->from('param_names')->where('game_id', '=', $id)->and_where('denomination', '=', '0')->execute()->as_array();

		if (isset($_POST['add_param']))
			$this->action_add_settings();

		if (isset($_POST['delete_settings']))
			$this->action_delete_settings();
		
		if (isset($_POST['save_settings']))
			$this->action_save_settings();
		
		$view = View::factory(URL::site('settings'));
		$view->set('data', $data);
		$view->set('action', $this->request->action());
		$this->template->content = $view;
	}
	
	public function action_denomination()
	{
		$this->action_settings();
	}
	
	public function action_delete_settings()
	{
		$this->action_delete();
	}
	
	public function action_save_settings()
	{
		$id_save = (array)$_POST['id_del_settings'];
		$id_s = array_flip($id_save);
		$value = array_intersect_key((array)$_POST['value'],$id_s);
		array_walk($id_save, 'intval');
		array_walk($value, 'intval');
		if(count($id_save))
		foreach ($value as $key=>$val)
			$result = DB::update('param_names')->set(array('value'=>$val))->where('id', '=', $key)->execute();
		$this->request->redirect($this->request->uri());
	}

	public function action_delete()
   	{
   		if (isset($_POST['id_del']))
   		{
   			$id_del = (array)$_POST['id_del'];
   			array_walk($id_del, 'intval');
   			if(count($id_del))
				$result = DB::delete('games')->where('id', 'IN', $id_del)->execute();
			$this->request->redirect('games');
   		}
   		
   		elseif (isset($_POST['delete_settings']))
   		{
   			$id_del = (array)$_POST['id_del_settings'];
   			array_walk($id_del, 'intval');
   			if(count($id_del))
				$result = DB::delete('param_names')->where('id', 'IN', $id_del)->execute();
		$this->request->redirect($this->request->uri());
   		}
   	}
}