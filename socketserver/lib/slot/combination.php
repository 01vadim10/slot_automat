<?php

class SlotCombination
{
	private $_symbol_id;
	private $_count;
	private $_multy;
	private $_expectation;
	
	/**
	 * @param String $symbol_id
	 * @param int $count
	 * @param float $multy
	 * @param float $expectation   0 < $expectation < 1
	 */
	public function __construct($symbol_id, $count, $multy, $expectation = 0.1)
	{
		$this->_symbol_id = $symbol_id;
		$this->_count = $count;
		$this->_multy = $multy;
		$this->_expectation = $expectation;
	}
	
	public function __get($name)
	{
		$res = null;
		switch ($name)
		{
			case 'symbol_id':
				$res = $this->_symbol_id;
			break;
			case 'count':
				$res = $this->_count;
			break;
			case 'multy':
				$res = $this->_multy;
			break;
			case 'expectation':
				$res = $this->_expectation;
			break;
		}
		
		return $res;
	}
	
	/*public function setExpectation($expectation)
	{
		$this->_expectation = $expectation;
	}
	
	public function getExpectation()
	{
		return $this->_expectation;
	}*/
}