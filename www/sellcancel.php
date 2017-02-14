<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db_host = "localhost";
$db_user = "root";
$db_passwd = "1234";
$db_name = "2014/12/20";
$connect = mysql_connect($db_host, $db_user, $db_passwd) or die ('Loading fail');
mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_name);

$counter = $_GET['counter'];
$bookID = $_GET['bookID'];
$email = $_GET['email'];
mysql_query("delete FROM `sold_book` WHERE bookID ='$bookID'");
mysql_query("delete FROM `cart` WHERE bookID ='$bookID'");
echo "<script>";
echo "alert(\"cancel successfully\");location.href='sell.php';";
echo "</script>";

/*
create table sold_book(
 userID varchar(255),
 bookID int(50) unsigned NOT NULL auto_increment,
 bookName varchar(50),
 author varchar(50),
 ISBN varchar(50),
 publisher varchar(50),
 price int(50),
 description varchar(255),
 state int(50),
 soldDate varchar(50),
 soldTime varchar(50),
  new
 Primary KEY (bookID)
);
create table cart(
 userID varchar(50),
 seller varchar(50),
 bookID int(50),
 bookName varchar(50),
 author varchar(50),
 ISBN varchar(50),
 publisher varchar(50),
 price int(50),
 new int(50), 
 state int(50),
 soldDate varchar(50),
 soldTime varchar(50),
 Primary KEY (bookID)
);
*/
?>