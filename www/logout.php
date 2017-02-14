<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include('incsession.php');
//logout
$cookieexpiry = (time() + 21600);
setcookie("session_id", "", $cookieexpiry-21600);
echo 'Logout......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
?>