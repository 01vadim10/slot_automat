<h1>Добро пожаловать, <?php echo HTML::chars($username);?></h1>
<table>
<tr>
<td><a href=<?=URL::site('member')?>>Модераторы</a></td>
<td><a href=<?=URL::site('games')?>>Игры</a></td>
<td><a href=<?=URL::site('member/logout')?>>Выйти</a></td>
</tr>
</table>