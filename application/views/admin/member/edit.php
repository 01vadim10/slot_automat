<form action = "" method = "post">
<h3>Модератор:</h3>
<table >
<tr>
	<th>ID-пользователя</th>
	<th>Логин</th>
	<th>Почта(Email)</th>
	<th>Новый пароль</th>
</tr>
<tr>
	<td align = "center"><?=HTML::chars($userdata['id'])?></td>
	<td align = "center"><?=HTML::chars($userdata['username'])?></td>
	<td align = "center"><?=HTML::chars($userdata['email'])?></td>
	<td align = "center"><input type = "text" name = "pass" /></td>
</tr>
</table>
<br>
<br>
<input type="submit" name="change" value="Изменить" />
</form>