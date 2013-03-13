<?php

class SlotGamefield{
	
	private $_lines = array();
	private $_rows;
	private $_columns;
	
	public function __construct($rows, $columns)
	{
		$this->_rows = $rows;
		$this->_columns = $columns;
	}
	
	public function push(SlotLine $item)	
	{
		array_push($this->_lines, $item);
	}

	/**
	 * @return int
	 */
	public function getColumnsCount()
	{
		return $this->_columns;
	}
	
	/**
	 * @return int
	 */
	public function getRowsCount()
	{
		return $this->_rows;
	}
	
	public function getLinePosition($line_number)
	{
		return $this->_gamefield->_lines[$line_number];
	}
	
	/**
	 * Lines list
	 *
	 * @return array of SlotLines
	 */
	public function getLines()
	{
		return $this->_lines;
	}
	
	public function getCountLines()
	{
		return count($this->_lines);
	}
	
	public function getLinesId($top, $left)
	{
		$line_pos_exist = array();
		foreach ($this->_lines as $line)
		{
			foreach ($line as $position)
			{
				if (($position->getTop() == $top) && ($position->getLeft() == $left))
					$line_pos_exist[] = $line->getId();
			}
		}
		return $line_pos_exist;
	}
}