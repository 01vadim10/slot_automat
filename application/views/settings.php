<form action = "" method = "post">
<table>
	<tr>
		<h3>Добавить новый параметр:</h3>
	</tr>
	<tr>
		<td><b>Имя параметра: </b><input type="text" name="add_name" value="" /></td>
		<td><b>Значение параметра: </b><input type="text" name="add_value" value="" /></td>
	</tr>
</table>
<br>
<input type = "submit" name = "add_param" value = "Добавить"></tr>
</form>
<form action = "" method = "post">
<table>
	<tr>
		<h3>Редактирование параметров:</h3>
	</tr>
	<tr>
		<td></td>
		<th>Имя параметра</th>
		<th>Значение параметра</th>
	</tr>
	<?php foreach ($data as $a) {?>
	<tr>
		<td align = center><input type = "checkbox" name = "id_del_settings[]" value = "<?=HTML::chars($a['id'])?>"></td>
		<td align = center><?=HTML::chars($a['name'])?></td>
		<td align = center><input type = "text" name = "value[<?=HTML::chars($a['id'])?>]" value="<?=HTML::chars($a['value'])?>"></td>
	</tr>
	<?}?>
</table>
<br>
<br>
<input type = "submit" name = "delete_settings" value = "Удалить отмеченные" onclick="return confirm('Удалить?')">
<input type = "submit" name = "save_settings" value = "Сохранить изменения">
</form>