<?php
error_reporting(E_ALL);
session_start();
$log = "";
$psw = "";
$submit = $_POST['submit'];
foreach ($_POST as $var => $value) 
{
if (preg_match("/^[A-Za-z0-9]{4,15}$/", $value)) {
 if ($var=="log"){ $log=$value;}
 if ($var=="psw"){ $psw=$value;}
}
}
$log = htmlentities($log);
$psw = htmlentities($psw);
//die($log."=".$psw."\n");

if(isset($submit) )
{
include ("../setup.php");
$log2=$log;
$result=mysql_query("select * from slt_lobby_users where login='$log2' ") or die("Error: ".mysql_error());
$row=mysql_fetch_array($result);
$base_login=$row[1];
$base_psw=$row[2];

//function getIp()
//{
//    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
//    {
//      $ip=$_SERVER['HTTP_CLIENT_IP'];
//    }
//    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
//    {
//      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
//    }
//    else
//    {
//      $ip=$_SERVER['REMOTE_ADDR'];
//    }
//    return $ip;
//}

if($log==$base_login && $psw==$base_psw && $log<>"")
{
$_SESSION['l']=$base_login;
//mysql_query("insert into logins (gamer,ip) values ('".$_SESSION['l']."','".getIp()."')");
Header("Location: index.php");
exit;
}
else
{
Header("Location: ../index.php");
exit;
}
}
?>
