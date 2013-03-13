<?php
session_start();
?>
<a href="/lobby/login.php">Перейти к странице авторизации</a><br>
<br/>
<a href="../../index.php">Перейти к странице авторизированного пользователя (только если залогинен)</a><br>
<br/>
<a href="../../../index.php">Перейти к главной странице</a>
<br/><br/><br/>
<?php
require_once('../../../api_user/api_user.php');

// Создаем объект пользователя - пераметр класса $_usernsme берем из сессии
// Соединение с БД происходит автоматически
$user = new APIUser();

if ( !$user->check_auth() )
{
  echo '<b>Ошибка: Пользователь не вошел в систему</b> и в сессии нет его данных! (функция check_auth() ) '."<br/>";
  exit;
}
if (!$ballance = $user->get_balance())
{
  echo 'Ошибка при доступе к баллансу пользователя (функция get_balance() )'."<br/>";
  exit;  
}
if (!$username = $user->get_username())
{
  echo 'error with func  get_username()';
  exit;
}
if (!$userid = $user->get_id())
{
  echo 'error with func  get_id()';
  exit;
}

echo 'Пользователь вошел в систему в сессии есть его логин (функция check_auth() )'."<br/>"; 
echo "Балланс пользователя из таблицы `slt_users` колонка cash (функция get_balance() )  : $ballance <br/>";
echo "Имя из базы : $username <br/>";
echo "id в базе : $userid <br/><br/>";

if (!$user->pay(20.15)) // пересчет балланса пользователя значение могут быть +/- по умолчанию 0
{
  echo 'error with func  pay()';
  exit;
}
else 
{
  echo 'функцией pay(count) прибавим пользователю 20.15 балланса. '."\n";
  $newbalance = $user->get_balance();
  echo "Балланс после обновления : $newbalance <br/><br/>";
}
if (!$user->pay(-20.15)) // пересчет балланса пользователя значение могут быть +/- по умолчанию 0
{
  echo 'error with func  pay()';
  exit;
}
else 
{
  echo 'функцией pay(count) отнимем пользователю те же -20.15 балланса. '."\n";
  $newbalance = $user->get_balance();
  echo "Балланс после обновления : $newbalance <br/><br/>";
}
?>
<br/><br/>
<a href="/lobby/rules.php">Выход</a><br>
<br/>
