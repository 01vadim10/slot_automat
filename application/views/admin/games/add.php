<form action = "" method = "post">
	<table>
	<h3><?=$action=='edit'?'Редактировать':'Добавить'?> игру:</h3>
	<tr>
		<th>Название игры:</th>
		<td><input id="name" type="text" name="name" value="<?=HTML::chars($userdata['name'])?>" /></td>
	</tr>
	<tr>
		<th>Описание игры:</th>
		<td><textarea name="description"><?=HTML::chars($userdata['description'])?></textarea></td>
	</tr>
	</table>
	<br />
	<br />
	<input type = "submit" name = "change" value = "<?=$action=='edit'?'Сохранить':'Добавить игру'?>" />
</form>