<form action = "" method = "post">
<table>
<h3><?=$action=='edit'?'Редактировать':'Добавить'?> пользователя:</h3>
<tr>
	<th>Логин:</th>
	<td><input id="username" type="text" name="username" value="<?=HTML::chars($userdata['username'])?>"/></td>
<tr/>
<tr>
	<th>Почта(Email)</th>
	<td><input id="email" type="text" name="email" value="<?=HTML::chars($userdata['email'])?>"/></td>
</tr>
<tr>
	<th>Пароль:</th>
	<td><input id="password" type="password" name="password" /></td>
</tr>
<tr>
	<th>Повторите Пароль:</th>
	<td><input id="password_confirm" type="password" name="password_confirm" /></td>
</tr>
</table>
<br>
<br>
<input type = "submit" name = "add" value = "<?=$action=='edit'?'Сохранить':'Добавить '.'пользователя'?>">
</form>