<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'username'=>array(
		'unique'=>'Такое имя уже существует!',
		'not_empty'=>'Имя пользователя не может быть пустым!'),
	'email'=>array(
		'unique'=>'Такой email уже существует!',
		'not_empty'=>'Вы забыли указать email пользователя!',
		'regex'=>'Неправильный формат email-адреса!'),
	'password'=>array(
		'not_empty'=>'Пароль не может быть пустым!',
	),
);