<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'name'=>array(
		'not_empty'=>'Имя не может быть пустым!',
		'min_length'=>'Имя не может быть меньше :param2 символов!',
		'max_length'=>'Имя не может быть более :param2 символов!',
		'unique'=>'Игра с таким именем уже существует!',
	),
	'description'=>array(
		'max_length'=>'Имя не может быть более :param2 символов!')
);
