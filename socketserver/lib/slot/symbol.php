<?php

class SlotSymbol{
	
	private $_combinations = array();
	private $_id;
	private $_highlights;
	private $_special;
	/*private $_per_success;
	private $_multy;
	private $_together;*/
	
	public function __construct($id, $special = false)
	{
		$this->_id = $id;
		$this->_highlights = array();
		$this->_special = $special;
	}
	
	/**
	 * @return bool
	 */
	public function isspecial()
	{
		return  $this->_special;
	}
	
	public function highlight($line_id)
	{
		$this->_highlights[] = $line_id;
	}
	
	public function getId()
	{
		return $this->_id;
	}
	public function getHighlight()
	{
		return $this->_highlights;
	}
	/**
	 * @param SlotCombination $item
	 */
	public function addCombination(SlotCombination $item)
	{
		$this->_combinations[$item->count] = $item;
	}
	
	/*public function addSuccess($percent_of_success, $count)
	{
		$this->_id->_combinations[$count]->_per_success = $percent_of_success;
	}*/
	
	/**
	 * @param int $count
	 * @return SlotCombination
	 */
	public function getCombination($count = 0)
	{
		if (isset($this->_combinations[$count]))
			return $this->_combinations[$count];
		return new SlotCombination($this->_id, $count, 0);
	}
	
//	Одновременное выпадание нескольких комбинаций
	
	/*public function setCombTogether($amount)
	{
		$this->_id->_together = $amount;
	}*/
	
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
			case 'id':
				$res = $this->_id;
			break;
		}
		
		return $res;
	}
}