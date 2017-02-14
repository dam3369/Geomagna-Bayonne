<?php

require './../lmp/config.php';
				$connection = mysql_connect (DB_HOST,DB_LOGIN,DB_PASS);
				if (!$connection) die ("connection impossible");
				mysql_select_db (DB_BDD) or die ("pas de connection");

extract('$_POST');

$mail=htmlentities($_POST['mail']);
$mail=addslashes($mail);

$sql="DELETE FROM user WHERE mail='$mail'"; // requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
$data=mysql_fetch_assoc($req);

if ($req){
	header("Location: ../admin/listedelete.php");
}

mysql_close($connection);

?>