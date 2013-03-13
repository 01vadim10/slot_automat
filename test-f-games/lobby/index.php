<?php
session_start();
if (!isset($_SESSION['l']) || $_SESSION['l'] == '')
{
  header('Location: ../index.php');
}
print_r($_SESSION['l']);
echo "<br/>";
?>

<a href="/lobby/rules.php">Выход (удаляет из сессии логин пользователя)</a><br>
<br/>
<a href="game/game1/index.php">Игра 1</a>