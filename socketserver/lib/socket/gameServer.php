<?php

class gameServer extends socketServer
{
/*	public function on_accept(gameServerClient $client)
	{
		echo '@@@@@@@@@@@@@@@@@@@@@@@@@@@@';
		$client->write(json_encode(array('test'=>1))."\0");
	}*/
}

class gameServerClient extends socketServerClient
{
	/**
	 * @var ModuleUser
	 */
	private $_user;
	/**
	 * @var ModuleGame
	 */
	private $_game;
	/**
	 * @var int
	 */
	private $_last_request_time = 0;
	/**
	 * Requests per second
	 *
	 * @var int
	 */
	private $_rps = 0;
	

	public function on_connect()
	{	
		$this->_user = new ModuleUser($this);
		$this->_game = new ModuleGame($this);
		echo "[gameServerClient] accepted connection from {$this->remote_address}"."<br />";
	}
	
	public function on_read()
	{
		if(time() != $this->_last_request_time)
			$this->_rps = 0;
		
		while($this->read_buffer)
		{
			if($this->_rps >= SERVER_RPS)
				break;
			
			$msg_end_pos = mb_strpos($this->read_buffer, "\0");
			if($msg_end_pos === false) break;
			
			$msg = mb_substr($this->read_buffer, 0, $msg_end_pos);
			$this->read_buffer  = mb_substr($this->read_buffer, $msg_end_pos + 1);
			$this->process_request($msg);
		}
	}
	
	private  function process_request($request)
	{
		echo "[gameServerClient] onRequest "/*.htmlspecialchars($request)*/." <br />";
		$data = @json_decode($request, true);
		$res = array('response' => null, 'query_id' => '');
		if($data !== false)
		{
			$res['query_id'] = $data['query_id'];
			$module = '_'.$data['module'];
			if ((property_exists($this, '_'.$data['module'])) && 
				(method_exists($this->$module, $data['action'])))
				{
					$res['response'] = call_user_func(array($this->$module, $data['action']), $data['params']);
					$res['errors'] = array();
					if($this->$module instanceof Errors)
						$res['errors'] = call_user_func(array($this->$module, 'getErrors'));
				}
		}
		$this->_rps++;
		$this->_last_request_time = time();
		
		echo "<pre>";
			var_dump($data);
			var_dump($res);
			var_dump('RPS: '.$this->_rps);
		echo "</pre>";
		
		$this->sendJSON($res);
	}

	public function on_disconnect()
	{
		echo "[gameServerClient] {$this->remote_address} disconnected<br/>";
	}
	
	public function on_timer()
	{
		$this->on_read();
		echo "[gameServerClient] onTimer {$this->remote_address}<br />";
		
		if((time() - DAEMON_STARTED) >= SERVER_RESTART_EVERY)
			exit();
	}

	public function sendJSON($data)
	{
		$this->write(json_encode($data)."\0");
	}
	
	/**
	 * @return ModuleUser
	 */
	public function get_user()
	{
		return $this->_user;
	}
	
}

?>