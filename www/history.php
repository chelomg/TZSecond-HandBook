<?php

error_reporting(E_ALL ^ E_DEPRECATED);
include('incsession.php');
$db_host = "localhost";
$db_user = "root";
$db_passwd = "1234";
$db_name = "2014/12/20";
$connect = mysql_connect($db_host, $db_user, $db_passwd) or die ('Loading fail');
mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_name);

// Try to find your name in the database
$guid = $_COOKIE['session_id'];
mysql_select_db($db_name);
$FindEmail = mysql_query("SELECT email FROM `user_account` WHERE guid = '$guid'")or die(" ²éÔƒÊ§”¡: " . mysql_error());
$result = mysql_fetch_array($FindEmail); //query translate to correct value;
$email = $result[0];
//
$guid = $_COOKIE['session_id'];
$price = mysql_query("SELECT SUM(price) FROM `sold_book` Where userID = '$email' and state = 0");
$result = mysql_fetch_array($price); //query translate to correct value;
$earn = $result[0];


?>
<!DOCTYPE HTML>
<html><head>
<title>The Modern-Hotel for Iphone, Android, Smartphone Mobile Website Template | Home :: w3layouts</title>
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Economica|Quantico">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link media="all" type="text/css" rel="stylesheet" href="css/style.css">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta content="Modern-Hotel Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" name="keywords">
</head>
	<body>
		<div class="wrap">
				<div class="header">
						<div class="logo">
							<a href="index.html"><img title="logo" src="images/logo.png"></a>
						</div>
				</div>
					<div class="top-menu">
						<ul>
							<li><a href="sell.php">Sell</a></li>
							<li><a href="order.php">Order</a></li>
							<li><a href="cart.php">Cart</a></li>
							<li class="active"><a href="history.php">History</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				<div>
						<div class="right-sidebar">
							<div class="clear"> </div>
						<div class="clear"> </div>
						<div class="left-content-bg">
						<div class="tablehistory">
							<ul>
								<p> Hello <?php echo $email ?></p>
								<li><a href="logout.php">LogOut</a></li>
								<br>
								<li><p>Your_Wallet: &nbsp $NT <?php echo $earn ?> </p></li>
								<li><a href="sellhistory.php">Sell History</a></li>
								<li><a href="buyhistory.php">Buy History</a></li>
								<li><a href="logout.php">LogOut</a></li>
							</ul>	
						</div>
						
					<div class="clear"> </div>
					</div>
						
						<div class="clear"> </div>
						<div class="Toll-Free">
							<ul>
								<li><span>Call Free&nbsp;:</span></li>
								<li><p>2-243-568-2013</p></li>
							</ul>
							<div class="clear"> </div>
						</div>
					
					<div class="clear"> </div>
					</div>
				</div>
				 </div>
					<div class="footer">
						<div class="wrap">
							
			</div>
		</div>



</body></html>
