<?php 
/**
 * Прослойка для работы сокет-сервера для игр с основным порталом
 * 
 */
class ItemUser extends Errors
{
  	private $_id = null;			//ID пользователя в системе
	private $_session_id = null;	//ID сессии в системе
	private $_username = null;		//имя пользователя\псевдоним
	private $_balance = null;		//текущий баланс $
	
/**
 * Создает объект если есть сессия, если не пуста или не равна 'demo'
 *
 * @return bool
 */
	public function __construct($sid='')
	{ 
	  	$this->_id = null;
		$this->_session_id = $sid;
		$this->_username = null;
		$this->_balance = null;
		
		/*if ( !isset($_SESSION['l']) || $_SESSION['l'] == '' || $_SESSION['l'] == 'demo' )
		{
		  $this->errors[] = 'user not loggined';
		  return;
		}*/
		$this->_username = 'test';
		return;
	}

/**
 * Проверяет логин пользователя в сессии
 *
 * @return bool
 */
	public function check_auth()
	{
		/*return $_SESSION;
    	if ( !isset($_SESSION['l']) || $_SESSION['l'] != $this->_username )
		{
		  $this->errors[] = 'user not loggined';
		  return false;
		}*/
		return true;
	}

/**
 * Делает коннект к БД и возвращает ресурс с подключением
 * 
 * @return resourse
 */
	private static function getDbConnect()
	{
	  	return MySQLDBase::$instance->Handle();
	}
	
/**
 * Возвращает login пользователя если он залогинен 
 *
 * @return string
 */
  public function get_username()
  {
    if ( !$this->check_auth() )
    {
    	$this->pushError('user_not_enough_balance');
      //$this->errors[] = 'Error in getUsername - user is not login';
      return '';
    }
    return $this->_username;
  }

/**
 * Возвращает id пользователя из таблицы `users`
 *
 * @return integer
 */
  	public function get_id()
	{
		if ( !$this->check_auth() )
	    {
	    	$this->pushError('user_not_logged_in');
	      //$this->errors[] = 'Error in get_id - user is not login';
	      return 0;
	    }
	    $query = sprintf('SELECT id FROM `'.TBL_USERS.'` WHERE login = "%s" LIMIT 1;',
	                        mysql_real_escape_string( $this->_username , self::getDbConnect() ) 
	                    );
	    if ( !$result = mysql_query( $query, self::getDbConnect() ) )
	    {
	    	$this->pushError('mysql_error');
	      //$this->errors[] = 'Error in mysql_query func get_id()';
	      return 0;
	    }
	    if (mysql_num_rows($result) == 0)
	    {
	    	$this->pushError('user_not_logged_in');
	      //$this->errors[] = 'not find cell';
	      return 0;
	    }
	    $row = mysql_fetch_assoc($result);
	    $this->_id = $row['id'];
	    return $this->_id;
	}
	
	public function get_session_id()
	{
		return $this->_session_id;
	}
	
/**
 * Возвращает массив содержащий все ошибки
 *
 * @return array
 */
	/*public function get_errors()
	{
	 	return $this->_errors;
	}*/
	
/**
 * Возвращает текущий балланс пользователя, в случае неудачи 0
 *
 * @return float
 */
	public function get_balance()
	{
	    if ( !$this->check_auth() )
	    {
	    	$this->pushError('user_not_logged_in');
	      //$this->errors[] = 'Error in get_balance - user is not login';
	      return 0;
	    }
	    $query = sprintf( 'SELECT cash FROM `'.TBL_USERS.'` WHERE login = "%s" LIMIT 1',
	                       mysql_real_escape_string($this->_username, self::getDbConnect()) 
	                    );
	                    
	    if ( !$result = mysql_query( $query, self::getDbConnect() ) )
	    {
	    	$this->pushError('mysql_error');
	      //$this->errors[] = 'Error in mysql_query func get_balance()';
	      return 0;
	    }
	    if (mysql_num_rows($result) == 0)
	    {
	    	$this->pushError('user_not_logged_in');
	      //$this->errors[] = 'not find';
	      return 0;
	    }
	    $row = mysql_fetch_assoc($result);
	    $this->_balance = $row['cash'];
	    return $this->_balance;
	}
	
/**
 * Если $amount положительное число, значит пополняем баланс, иначе - снимаем с баланса
 * Если все прошло удачно (хватило баланса) возвращает TRUE, иначе FALSE
 *
 * @param float $amount
 * @return bool
 */
	public function pay($amount = 0)
	{
		if ( !$this->check_auth() )
		{
			$this->pushError('user_not_logged_in');
			//$this->errors[] = 'Error in pay - user not log in';
			return false;
		}
		
		if ($this->get_balance() + $amount < 0)
		{
			$this->pushError('user_not_enough_balance');
			return false;
		}
		
		$query = sprintf('UPDATE `'.TBL_USERS.'` SET cash = cash + "%f" WHERE login = "%s" ',
			$amount,
			mysql_real_escape_string($this->_username, self::getDbConnect())
		);
		
		if ( !$result = mysql_query( $query, self::getDbConnect() ) )
		{
			$this->pushError('mysql_error');
			//$this->errors[] = 'Error in mysql_query func pay()';
			return false;
		}
		return true;
	}

}