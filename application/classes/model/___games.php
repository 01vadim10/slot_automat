<?php defined('SYSPATH') OR die('No Direct Script Access');
class Model_Games extends Model{
	public $_game_list;
	
	public function __construct()
	{
		
	}
	
//	Получает список игр и их параметры
	public function get_game($id = 0)
	{
		if ($id == 0)
		{
			$this->_game_list;
		}
	}
	
//	Обновляет параметры игр
	public function update_game()
	{
		
	}
	
//	Предоставляет статистику по отдельной игре
	public function get_stat_game()
	{
		
	}
	
//	Проверяет подключена ли игра или нет
	public function valid_game()
	{
		
	}
	
//	Добавляет новую игру в список игр
	public function add_game()
	{
		
	}
}