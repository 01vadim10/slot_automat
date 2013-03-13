<?php

class SlotWinning{
	
	private $_line;
	/*private $_shuffled;
	private $_symbol;
	private $_count;*/
	private $_winnings = array();
	
	public function __construct($line)
	{
		$this->_line = $line;
		/*$this->_shuffled = $shuffled;
		$this->_symbol = $symbol;
		$this->_count = $count;*/
	}
	
	public function push(SlotCombination $item)
	{
		array_push($this->_winnings, $item);
	}
	
	public function getWin()
	{
		return $this->_winnings;
	}
	
}