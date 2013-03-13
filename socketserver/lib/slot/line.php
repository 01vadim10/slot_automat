<?php

class SlotLine implements Iterator {
	
	private $_id;
	private $_points = array();
	
	public function __construct($id)
	{
		$this->_id = $id;
	}
	
	public function getId()
	{
		return $this->_id;
	}
	
	public function push(SlotPosition $item)
	{
		array_push($this->_points, $item);
	}
	
	function rewind() {
        reset($this->_points);
    }

    function current() {
        return $this->_points[key($this->_points)];
    }

    function key() {
        return key($this->_points);
    }

    function next() {
        next($this->_points);
    }

    function valid() {
        return isset($this->_points[key($this->_points)]);
    }
}