<?php

require './../lmp/config.php';
				$connection = mysql_connect (DB_HOST,DB_LOGIN,DB_PASS);
				if (!$connection) die ("connection impossible");
				mysql_select_db (DB_BDD) or die ("pas de connection");
				

extract('$_POST');

$mail=htmlentities($_POST['mail']);
$payera=htmlentities($_POST['payera']);

$mail=addslashes($mail);
$payera=addslashes($payera);

date_default_timezone_set('Europe/Paris'); 
$top_depart = mktime(8, 30, 0, 5, 8, 2011);	//8 Mai 2011, 14:30 

if ($payera>=2 && time() >= $top_depart) {
	
	$sql="UPDATE user SET paye_tant=$payera, paid='1' WHERE mail='$mail'"; // requête
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
	$data=mysql_fetch_assoc($req);
		
	if ($req) header("Location: ../admin/liste.php");
}
else {
	header("Location: ../admin/liste.php");
}
mysql_close($connection); 
?>