<?php
$userid = $_POST['userid'];
$usermail = $_POST['usermail'];
$userpasswd = $_POST['userpasswd'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
require "connectsql.php";

//defense
$userid = htmlentities($userid, ENT_QUOTES, "UTF-8");
$userpasswd = htmlentities($userpasswd, ENT_QUOTES, "UTF-8");
$usermail = htmlentities($usermail, ENT_QUOTES, "UTF-8");
$userid = mysql_real_escape_string($userid);
$userpasswd = mysql_real_escape_string($userpasswd);
$usermail = mysql_real_escape_string($usermail);

//test already regist

//user table(uid, id, password, nickname, cookie, status, title)

	mysql_query("INSERT INTO user_account VALUES (null,'$usermail', password('$userpasswd'), null, '$userid', '$address' ,$phonenumber, 0);");
	echo "<script>";
	echo "alert(\"Success\");location.href='login.php';";
	echo "</script>";
?>
<html>
	<head>
		<meta charset='utf-8'></meta>
		<title>Wrong message</title>	
	</head>
	<body>
		<a href="signup.html"><button>回上頁</button></a>
	</body>
</html>
