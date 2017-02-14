<?php

$token = $_GET["token"];

require "lmp/config.php";
mysql_connect (DB_HOST,DB_LOGIN,DB_PASS);
mysql_select_db (DB_BDD);


$sql="SELECT * FROM user WHERE token = '$token'";
$req= mysql_query ($sql);
$data=mysql_fetch_assoc ($req);

if ($data) {
	mysql_query ("UPDATE user SET mail_activated='1'");
	header("location:email_ok.php");
}
?>