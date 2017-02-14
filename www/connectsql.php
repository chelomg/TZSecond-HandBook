<?php
$db_host = "localhost";
$db_user = "root";
$db_passwd = "1234";
$db_name = "2014/12/20";
$connect = mysql_connect($db_host, $db_user, $db_passwd) or die ('Loading fail');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_name);
?>