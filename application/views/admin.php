<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Room</title>
</head>
<body>
<form action = '../classes/controller/member.php' method = "post">
<table border width = 100%>
<tr>
Список модераторов:
<?php foreach ($data as $a) {?><br>
	<tr>
	<td align = center>
	<input type = "checkbox" name = "id_del[]" value = "<?=$a['id']?>">
	<td align = "center"><?=$a['id']?>
	<td align = "center">
	<input type="text" name="moder_name[<?=$a['id']?>]" value="<?=$a['username']?>">
	<td align = "center"><?=$a['email']?>
	<?}?>
</table>
<br>
<input type = 'submit' name = 'save' value = 'Save'>
<input type = "submit" name = "delete" value = "Удалить отмеченные" onclick="return confirm('Удалить?')">
</form>
<?echo '<br /><a href=\'logout\'>logout</a>'?>
<?echo '<br /><a href=\'register\'>Зарегестрировать нового пользователя.</a>'?>
</body>
</html>