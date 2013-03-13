<?php

class SlotSymbols_Collection{
	
	private $_symbols = array();
	private $_lines = array();
	
	/**
	 *
	 * @param SlotSymbol $item
	 */
	public function push(SlotSymbol $item)
	{
		$this->_symbols[$item->getId()] = $item;
	}
	
	/**
	 *
	 * @param string $id
	 * @return SlotSymbol
	 */
	public function getSymbol($id)
	{
		return $this->_symbols[$id];
	}
	
	/**
	 *
	 * @return SlotSymbol
	 */
	public function getSpecialSymbol()
	{
		foreach ($this->_symbols as $_symbol)
			if($_symbol->isspecial())
				return $_symbol;
	}
	
	/**
	 * @return array
	 */
	public function getShuffledIds()
	{
		$a = array_keys($this->_symbols);
		shuffle($a);
		return $a;
	}
	
	public function getCount()
	{
		return count($this->_symbols);
	}
	
	public function setWinLines($win_lines)
	{
		$this->_lines = $win_lines;
	}
}