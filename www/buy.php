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
$email = $_GET['email'];


$cart_books = mysql_query("select bookID FROM `cart` WHERE userID ='$email' AND state = 1");
$r1 = mysql_fetch_row($cart_books);
if($r1[0] != null){
$num = mysql_num_rows($cart_books);
mysql_query("update `sold_book` set state = 0 where bookID = '$r1[0]'");
if($num > 1)
mysql_query("update `sold_book` set state = 0 where bookID = '$r1[1]'");
if($num > 2)
mysql_query("update `sold_book` set state = 0 where bookID = '$r1[2]'");
}

mysql_query("update `cart` set state = 0 WHERE userID ='$email'");

echo "<script>";
echo "alert(\"Buy books successfully\");location.href='order.php';";
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