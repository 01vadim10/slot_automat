<?php

class	SlotPosition{
	
	private $_top;
	private $_left;
	
	public function	__construct($top = 0, $left = 0)
	{
		$this->_top = $top;
		$this->_left = $left;
	}
	
	public function getTop()
	{
		return $this->_top;
	}

	public function getLeft()
	{
		return $this->_left;
	}

}