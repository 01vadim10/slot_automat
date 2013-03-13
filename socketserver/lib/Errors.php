<?php

/**
 * Work with errors messages, store and get text messages
 *
 */
class Errors
{
	private $_errors = array();
	private $_ids = array();
	
	/**
	 * Add errors message to list
	 *
	 * @param string|Errors $msg_id
	 */
	public function pushError($msg_id)
	{
		if($msg_id instanceof Errors)
		{
			$ids = $msg_id->getErrorsIds();
		}else{
			$ids = array($msg_id);
		}
		foreach ($ids as $_id)
		{
			$item = Messages::getMessageArray(Messages::TYPE_ERROR, $_id);
			$this->_ids[] = $_id;
			if($item !== null)
			{
				$this->_errors[$item['code']] = $item['text'];
			}else
				$this->_errors[11111111] = 'Unknown error';
		}
	}
	
	/**
	 * List of errors
	 * key - message ID
	 * value - message text
	 *
	 * @param bool $clear
	 * @return array
	 */
	public function getErrors($clear = true)
	{
		$res = $this->_errors;
		if($clear)
			$this->clearErrors();
		return $res;
	}
	
	/**
	 * List of errors IDS
	 *
	 * @param bool $clear
	 * @return array
	 */
	public function getErrorsIds($clear = true)
	{
		$res = $this->_ids;
		if($clear)
			$this->clearErrors();
		return $res;
	}
	
	/**
	 * @return bool
	 */
	public function hasErrors()
	{
		return count($this->_ids)?true:false;
	}
	
	/**
	 * Clear errors buffer
	 */
	public function clearErrors()
	{
		$this->_errors = array();
		$this->_ids = array();
	}
}