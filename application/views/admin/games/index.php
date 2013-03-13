<form action = "<?=URL::site('games/delete')?>" method = "post">
<table >
<thead>
	<tr align="left"><a href=<?=URL::site('games/add')?>><h4>Добавить новую игру</h4></a></tr>
</thead>
<tbody>
	<td></td>
	<th>ID-игры</th>
	<th>Название игры</th>
	<th>Описание игры</th>
	<th>Параметры</th>
	</tr>
	<?php foreach ($data as $a) {?><br>
		<tr>
			<td align = center><input type = "checkbox" name = "id_del[]" value = "<?=HTML::chars($a['id'])?>"></td>
			<td align = "center"><?=HTML::chars($a['id'])?></td>
			<td align = "center"><a href="<?=HTML::chars(URL::site('games/edit/'.$a['id']))?>"><?=HTML::chars($a['name'])?></a></td>
			<td align = "center"><?=HTML::chars($a['description'])?></td>
			<td align = center><a href=<?=URL::site('games/settings/'.$a['id'])?>>Выигрышные комбинации</a>
								<a href=<?=URL::site('games/denomination/'.$a['id'])?>>Деноминация</a></td>
		</tr>
	<?}?>
</tbody>
</table>
<br>
<br>
<input type = "submit" name = "delete" value = "Удалить отмеченные" onclick="return confirm('Удалить?')">
</form>