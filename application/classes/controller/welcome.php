<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Front  {

	public function action_index()
	{
//		$this->response->body('hello, world!');
		$this->content = View::factory('index');
	}

} // End Welcome
