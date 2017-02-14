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

$sold = mysql_query("SELECT * FROM `sold_book` WHERE bookID ='$bookID'");
$r1 = mysql_fetch_row($sold);
$num_book = mysql_query("SELECT * FROM `cart` WHERE userID = '$email' AND state = 1");


if(mysql_num_rows($num_book) >= 3){
echo "<script>";
echo "alert(\"Sorry,the maximum is 3\");location.href='order.php';";
echo "</script>";
}
else if($r1[8] != 1){
echo "<script>";
echo "alert(\"Sorry,it was sold out just now\");location.href='order.php';";
echo "</script>";
}
else{
mysql_query("UPDATE sold_book SET state = 2 WHERE bookID = '$bookID'");
mysql_query("INSERT INTO cart VALUES('$email','$r1[0]','$r1[1]','$r1[2]','$r1[3]','$r1[4]','$r1[5]','$r1[6]','$r1[11]','$r1[8]',NULL,NULL)");
echo "<script>";
echo "alert(\"Add to Cart Successfully\");location.href='order.php';";
echo "</script>";
}
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