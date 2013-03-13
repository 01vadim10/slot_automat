<?php

class MySQLDBase
{
	const LOG_ENABLED = false;
	/**
	 * @var resource
	 */
	private $_handle;
	public static $queries_count = 0;
	/**
	 * @var MySQLDBase
	 */
	public static $instance = null;
	
	private $_host;
	private $_user;
	private $_password;
	private $_dbase;
	
	/**
	 * @param string $host
	 * @param string $user
	 * @param string $password
	 * @param string $dbase
	 */
	public function __construct($host = 'localhost', $user = 'root', $password = '', $dbase = 'slot-auto')
	{
		MySQLDBase::$instance = $this;
		$this->_host = $host;
		$this->_user = $user;
		$this->_password = $password;
		$this->_dbase = $dbase;
		$this->checkConnection();
		$this->saveToLog();
	}
	
	private function checkConnection()
	{
		if (!$this->_handle || !mysql_ping($this->_handle))
	    {
			$this->_handle = mysql_connect($this->_host, $this->_user, $this->_password);
			mysql_query('SET NAMES \'utf8\' COLLATE \'utf8_general_ci\'');
			if (!mysql_select_db($this->_dbase, $this->_handle))
				$this->errmess(mysql_error($this->_handle)."<br>host: $host<br>");
	    }
	}
	
	public function __destruct()
	{
		if(is_resource($this->_handle))
			mysql_close($this->_handle);
	}
	
	/**
	 * @param string $query
	 * @return resource
	 */
	public function Query($query)
	{
		$this->checkConnection();
		MySQLDBase::$queries_count++;
		$result = mysql_query($query, $this->_handle);
		$this->saveToLog($query);
		
		if($result == '')
			$this->errmess(mysql_error($this->_handle)."<br>$query");
		return $result;
	}

	/**
	 * @param resource $resource
	 * @return array
	 */
	public function Fetch($resource)
	{
		return mysql_fetch_assoc($resource);
	}
	
	/**
	 * @return int
	 */
	public function AffectedRows()
	{
		return mysql_affected_rows($this->_handle);
	}
	
	/**
	 * @param string $str
	 * @return string
	 */
	public function Escape($str)
	{
		return mysql_real_escape_string($str, $this->_handle);
	}
	
	/**
	 * @return resource
	 */
	public function Handle()
	{
		return $this->_handle;
	}

	/**
	 * @param string $query
	 * @param string $keyfield
	 * @return array
	 */
	public function Select($query, $keyfield = false)
	{
		$this->checkConnection();
		MySQLDBase::$queries_count++;
		$result = mysql_query("SELECT ".$query,$this->_handle);
		$this->saveToLog('SELECT '.$query);
		if($result)
		{
			$res = array();
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				if($keyfield)
					$res[$row[$keyfield]] = $row;
				else
					$res[] = $row;
			}
			mysql_free_result($result);
			return $res;
		}
		else
			$this->errmess(mysql_error($this->_handle)."<br>SELECT $query<br>");
	}

	/**
	 * Enter description here...
	 *
	 * @param array $params = array('table'=>string, 'fields'=>array(), 'match'=>array, 'extra_conditions'=>string, 'safe_vals'=>int 0/1)
	 * @return 0|1
	 */
	public function Update($params = array())
	{
		$this->checkConnection();
		//$params=array('table'=>string, 'fields'=>array(), 'match'=>array, 'extra_conditions'=>string, 'safe_vals'=>int 0/1);
		$_def_params = array('safe_vals'=>1);
		$params = array_merge_sub($_def_params, $params);

		$qry = '';
		foreach($params['fields'] as $field => $value)
			$qry .= (strlen($qry)>0?", ":" ").'`'.$field.'`'."=".($params['safe_vals']==1?"'".mysql_real_escape_string($value)."'":$value);
		$qry = "UPDATE `".$params['table']."` SET ".$qry;
		if($params['match'] != '')
		{
			$qry .= " WHERE 1 ";
			foreach($params['match'] as $key=>$value)
			{
				if(is_array($value))
				{
					$qry .= ' and (0';
					foreach($value as $item)
						$qry .= ' or `'.$key."`='".$item."'";
					$qry .= ')';
				}
				else
					$qry .= ' and `'.$key."`='".$value."'";
			}
		}
		$qry .= $params['extra_conditions'];
		if (!mysql_query($qry, $this->_handle))
		{
			$this->errmess(mysql_error($this->_handle)."<br>$qry<br>");
			return 0;
		}
		$this->saveToLog($qry);
		return 1;
	}

	/**
	 * @param array $params = array('table'=>string, 'fields'=>array(), 'safe_vals'=>int 0/1);
	 * @param bool $replace (use REPLACE INTO)
	 * @return int - insert_id
	 */
	public function Insert($params=array(), $replace = false)
	{
		$this->checkConnection();
		//$params=array('table'=>string, 'fields'=>array(), 'safe_vals'=>int 0/1);
		$_def_params = array('safe_vals'=>1);
		$params = array_merge_sub($_def_params, $params);

		$fields = '';
		$values = '';

		$qry = '';
		foreach($params['fields'] as $field=>$value)
			$qry .= (strlen($qry)>0?', ':' ').'`'.$field."`=".($params['safe_vals']==1?"'".mysql_real_escape_string($value)."'":$value);
		$qry = ($replace?'REPLACE':'INSERT').' INTO `'.$params['table'].'` set '.$qry;
		if (!mysql_query($qry, $this->_handle))
		{
			$this->errmess(mysql_error($this->_handle)."<br>$qry<br>");
			return 0;
		}
		$this->saveToLog($qry);
		return mysql_insert_id($this->_handle);
	}
	
	public function hasErrors()
	{
		return mysql_errno($this->_handle);
	}
	
	// ERROR MESSAGE SHOW
	private function errmess ($text, $exit='', $quiet='')
	{
		if($quiet == '' && ini_get("error_reporting") != 0)
			echo "<html><body><br><font color='red'>$text</font></body><html>";
		if($exit)
			exit;
	}
	
	private function saveToLog($q = '===================================')
	{
		if(!self::LOG_ENABLED) return;
		require_once(LIB_DIR.'Logger.class.php');
		Logger::save('mysql.log', "\n".$_SERVER['REQUEST_URI']."\n".$q."\n".mysql_stat()."\n===================================\n");
	}

}

?>