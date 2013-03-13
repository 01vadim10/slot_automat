<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Game extends ORM {

	public function rules ()
	{
		return array(
			'name'=>array(
				array('not_empty'),
				array('min_length', array(':value', 3)),
				array('max_length', array(':value', 255)),
				array(array($this, 'unique'), array('name', ':value')),
			),
			'description'=>array(
				array('max_length', array(':value', 1024))));
	}
}