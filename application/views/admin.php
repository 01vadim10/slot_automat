<form action = <?=URL::site('/member/delete')?> method = "post">
<table >
	<tr align="left"><a href=<?=URL::site('member/register')?>><h4>Регистрация нового пользователя</h4></a></tr>
	<tr>
		<h3>Список модераторов:</h3>
	</tr>
	<tr>
		<td></td>
		<th>ID-пользователя</th>
		<th>Логин</th>
		<th>Почта(Email)</th>
	</tr>
	<?php foreach ($data as $a) {?><br>
		<tr>
		<td align = center><input type = "checkbox" name = "id_del[]" value = "<?=HTML::chars($a['id'])?>"></td>
		<td align = "center"><?=HTML::chars($a['id'])?></td>
		<td align = "center"><a href="<?=HTML::chars(URL::site('member/edit/'.$a['id']))?>"><?=HTML::chars($a['username'])?></a></td>
		<td align = "center"><?=HTML::chars($a['email'])?></td>
		</tr>
		<?}?>
</table>
<br>
<br>
<input type = "submit" name = "delete" value = "Удалить отмеченные" onclick="return confirm('Удалить?')">
</form>