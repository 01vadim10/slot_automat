<?php

class Messages{
	
	const TYPE_ERROR = 'ERRORS';
	private static $_list = array();
	
	public static function init()
	{
		self::$_list[self::TYPE_ERROR] = array(
			'game_not_found' => array('code'=>1, 'text' => 'Игра не найдена'),
			'user_not_enough_balance' => array('code'=>2, 'text' => 'Недостаточно средств'),
			'user_not_logged_in' => array('code'=>3, 'text' => 'Вы не авторизованы'),
			'mysql_error' => array('code'=>4, 'text' => 'Ошибка БД'),
		);
	}
	
	/**
	 * @param string $type
	 * @param string $id
	 * @return string
	 */
	public static function getMessage($type, $id)
	{
		if(isset(self::$_list[$type]) && isset(self::$_list[$type][$id]))
			return self::$_list[$type][$id]['text'];
		return 'Unknown';
	}
	
	/**
	 * @param string $type
	 * @param string $id
	 * @return array|NULL
	 */
	public static function getMessageArray($type, $id)
	{
		if(isset(self::$_list[$type]) && isset(self::$_list[$type][$id]))
			return self::$_list[$type][$id];
		return null;
	}
	
}
