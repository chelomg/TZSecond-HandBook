<?php

error_reporting(E_ALL ^ E_DEPRECATED);
include('incsession.php');

$db_host = "localhost";
$db_user = "root";
$db_passwd = "1234";
$db_name = "2014/12/20";
$connect = mysql_connect($db_host, $db_user, $db_passwd) or die ('Loading fail');

$bookName = $_POST['bookName'];
$author = $_POST['author'];
$ISBN = $_POST['ISBN'];
$Publisher = $_POST['publisher'];
$PRICE = $_POST['price'];
//$state = $_POST['state'];
$description = $_POST['description'];
$OnSale = 1;
$New = $_POST['new'];

// Try to find a match in the database
$guid = $_COOKIE['session_id'];
mysql_select_db($db_name);
$FindEmail = mysql_query("SELECT email FROM `user_account` WHERE guid = '$guid'")or die(" 查詢失敗: " . mysql_error());
$result = mysql_fetch_array($FindEmail); //query translate to correct value;
$email = $result[0];
//

//time
$date = date ("Y- m - d");
$time = date ("H : i : s"); 
//

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_name);
$data =mysql_query("SELECT * FROM `user_account`");
$rs= mysql_fetch_row($data);
$rt= mysql_fetch_row($data);
mysql_query("INSERT INTO sold_book VALUES ('$email',null,'$bookName' ,'$author', $ISBN, '$Publisher', $PRICE, '$description', $OnSale, '$date', '$time', $New);");
echo "<script>";
echo "alert(\"Success\");location.href='sell.php';";
echo "</script>";
?>
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
							<li class="active"><a href="sell.php">Sell</a></li>
							<li><a href="order.php">Order</a></li>
							<li><a href="cart.php">Cart</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="history.php">History</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				<div class="content">
						<div class="right-sidebar">
							<div class="clear"> </div>
						<div class="search-bar">
							<form>
								<input type="text" value="">
								<input type="submit" value="Search">
							</form>
						</div>
						<div class="clear"> </div>
						<div class="left-content-bg">
						</div>
						<div class="table1">
							<p>userID:<?php echo $rs[0]?> </p>
							<p>passwords:<?php echo $rs[1]?></p>
							<p>Price:</p>
							<p>State:</p>
						</div>	
						<div class="table2">
							<p>userID:<?php echo $rt[0]?> </p>
							<p>passwords:<?php echo $rt[1]?></p>
							<p>Price:</p>
							<p>State:</p>
						</div>
						<div class="table3">
							<p>Book Name:</p>
							<p>Author:</p>
							<p>Price:</p>
							<p>State:</p>
						</div>
						<div class="main">
						<form>
							<h3>Sell your books</h3>
							<table>
								<body><tr>
									<td><span>Book Name:</span></td>
									<td><input type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" id="bookName" name="bookName1" required></td>
								</tr>
								<tr>
									<td><span>Author:</span></td>
									<td><input type="text" id="author" name="author" required></td>
								</tr>
								<tr>
									<td><span>ISBN:</span></td>
									<td><input type="text" id="ISBN" name="ISBN" required></td>
								</tr>
								<tr>
									<td><span>State:</span></td>
									<td><select>
										<option>10%</option>
										<option>20%</option>
										<option>30%</option>
										<option>40%</option>
										<option>50%</option>
										<option>60%</option>
										<option>70%</option>
										<option>80%</option>
										<option>90%</option>
										<option>100%</option>
									</select></td>
									
								</tr>
								<tr>
									<td><span>Description:</span></td>
									<td><input type="text" style="height:50px;outline:none;" id="description" name="description" required></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="Submit" value="Submit"><input type="reset"></td>
								</tr>
							</tbody></table>
						</form>
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

