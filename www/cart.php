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
$FindEmail = mysql_query("SELECT email FROM `user_account` WHERE guid = '$guid'")or die(" 查詢失敗: " . mysql_error());
$result = mysql_fetch_array($FindEmail); //query translate to correct value;
$email = $result[0];
//
$data =mysql_query("SELECT * FROM `cart` where userID = '$email' AND state = 1");
$page = 3;
if (!isset($_GET["counter"])){ //假如$_GET["page"]未設置
        $counter=0; //則在此設定起始頁數
    } else {
        $counter = intval($_GET["counter"]); //確認頁數只能夠是數值資料
    }
$num_data = mysql_num_rows($data);
for($x=0;$x<$num_data;$x++){
	$r1[$x]=mysql_fetch_row($data);
}

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
							<li class="active"><a href="cart.php">Cart</a></li>
							<li><a href="history.php">History</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				<div>
						<div class="right-sidebar">
							<div class="clear"> </div>
						<div class="clear"> </div>
						<div class="left-content-bg">
						<div class="table0">
							<ul>
								<p> Hello <?php echo $email ?></p>
								<li><a href="logout.php">LogOut</a></li>
							</ul>	
						</div>
						<?php if($num_data-$counter>0){ ?>
							<div class="table1">
								<p>Book Name:</p>
									<?php echo $r1[$counter][3]?> 
								<p>Author: &nbsp
									<?php echo $r1[$counter][4]?>
								</p>
								<p>ISBN: &nbsp
									<?php echo $r1[$counter][5]?>
								</p>
								<p>Publisher:</p>
									<?php echo $r1[$counter][6]?>
								<p>Price: &nbsp $NT
									<?php echo $r1[$counter][7]?>
								</p>
								<p>New: &nbsp
									<?php echo $r1[$counter][8]?>%
								</p>
								<?php $bookID = $r1[$counter][2]?>
								<br>
								<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="button" value="Cancel" onclick="location.href='cancel.php?counter=<?=$counter+1?>&bookID=<?=$bookID?>&email=<?=$email?>&'"></td>
								
							</div>
						<?php } ?>
							<?php $counter+=1?>
						<?php if($num_data-$counter>0){?>
						<div class="table2">
								<p>Book Name:</p>
									<?php echo $r1[$counter][3]?> 
								<p>Author: &nbsp
									<?php echo $r1[$counter][4]?>
								</p>
								<p>ISBN: &nbsp
									<?php echo $r1[$counter][5]?>
								</p>
								<p>Publisher:</p>
									<?php echo $r1[$counter][6]?>
								<p>Price:&nbsp $NT
									<?php echo $r1[$counter][7]?>
								</p>
								<p>New: &nbsp
									<?php echo $r1[$counter][8]?>%
								</p>
									<?php $bookID = $r1[$counter][2]?>
									<br>
									<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="button" value="cancel" onclick="location.href='cancel.php?counter=<?=$counter+1?>&bookID=<?=$bookID?>&email=<?=$email?>&'"></td>
							</div>
						<?php }?>
						<?php $counter+=1?>
						<?php if($num_data-$counter>0){?>
						<div class="table3">
								<p>Book Name:</p>
									<?php echo $r1[$counter][3]?> 
								<p>Author:
									<?php echo $r1[$counter][4]?>
								</p>
								<p>ISBN:
									<?php echo $r1[$counter][5]?>
								</p>
								<p>Publisher:</p>
									<?php echo $r1[$counter][6]?>
								<p>Price:&nbsp $NT
									<?php echo $r1[$counter][7]?>
								</p>
								<p>New:
									<?php echo $r1[$counter][8]?>%
								</p>
									<?php $bookID = $r1[$counter][2]?>
									<br>
									<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="button" value="cancel" onclick="location.href='cancel.php?counter=<?=$counter+1?>&bookID=<?=$bookID?>&email=<?=$email?>&'"></td>
							</div>
						<?php }?>
						<?php if($num_data > 0){?>
						<td> &nbsp &nbsp <input type="button" value="BUY" onclick="location.href='buy.php?counter=<?=$counter+1?>&email=<?=$email?>&'"></td>
						<?php } ?>
						<div class="main">
						<a> &nbsp &nbsp </a>
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
