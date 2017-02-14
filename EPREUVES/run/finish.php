	<?php 
	if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
		echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;\" />";
	}
	if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) {
		echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=2.4; maximum-scale=2.4; user-scalable=0;\" />";
	}
	?>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/lmp/lock.php';
require $_SERVER['DOCUMENT_ROOT'].'/lmp/method/connect.php';

$id=$_SESSION['id'];

$sql="SELECT * FROM user WHERE id=$id";
$req=mysql_query($sql) or die ('DEAD');
$data =  mysql_fetch_row($req);

if($data[4] == 19){
	$time=time();
	
	if(empty($data[14])){
		$sql = "SELECT * FROM user ORDER BY finish";
		$req = mysql_query($sql) or die ('DEAD 1');
		$i = 0;
		while($data = mysql_fetch_assoc($req)) {
			if(!empty($data['finish']) && isset($data['finish'])) $i++;
		}
		$i++;

		$sql = "UPDATE user SET finish='$time', finish_line='$i' WHERE id=$id";
		$req = mysql_query($sql) or die ('DEAD 2');
	}
?>	
	<meta http-equiv="Refresh" content="10; url=http://inscription.devoralive.com/EPREUVES/finish_line.php">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<center><h1>Bravo !<br />Vous avez termin&egrave; avec succ&egrave;s toutes les &eacute;preuves de la G&eacute;omagna &eacute;dition 64</h1>
	<br /><img src="img/flag.gif"><br /><br /><h3>Acc&egrave;s au classement...</h3></center>

<?php
}else{
?>
	<meta http-equiv="Refresh" content="10; url=http://inscription.devoralive.com/requete/goatlast.php">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<center><h1>Vous n'avez pas termin&eacute; toutes les &eacute;preuves</h1>
	<h2>Vous allez &ecirc;tre redirig&eacute; vers l'&eacute;preuve pr&eacute;c&eacute;dente dans quelques secondes</h2></center>
<?php
}

mysql_close($connection);
?>