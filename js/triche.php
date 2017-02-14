<?php
require "../lmp/lock.php";
require "../lmp/config.php";


				$connection = mysql_connect (DB_HOST,DB_LOGIN,DB_PASS);
				if (!$connection) die ("connection impossible");
				mysql_select_db (DB_BDD) or die ("pas de base");

$id=$_SESSION['id'];
$sql="UPDATE user SET triche=1 WHERE id=$id";
$req= mysql_query ($sql) or die ('erreur SQL<br>'.$sql.'<br>' .mysql_error());
header("location:http://inscription.devoralive.com/lmp/method/logout.php");
?>