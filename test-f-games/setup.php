<?php
$dbhost="localhost";
$dbuname="root";
$dbpass="";
$dbname="slot-auto";

$full_base = mysql_connect($dbhost, $dbuname, $dbpass) or die("error");
mysql_query("SET NAMES UTF8");
mysql_select_db($dbname, $full_base);
date_default_timezone_set('UTC');
