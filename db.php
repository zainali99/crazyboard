<?php
$servername="";
$user="";
$password="";
$connection=mysql_connect("$servername","$user","$password") or die(mysql_errno());
$db = mysql_select_db($database) or die(mysql_errno());
if($connection && $db) {
	echo "Connected";
}
?>
