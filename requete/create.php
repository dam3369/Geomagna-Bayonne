<?php
require './../lmp/config.php';
				$connection = mysql_connect (DB_HOST,DB_LOGIN,DB_PASS);
				if (!$connection) die ("connection impossible");
				mysql_select_db (DB_BDD) or die ("pas de connection");

extract($_POST);

if(isset($_POST['accepte']) && $_POST['accepte'] == 'Yes') {

//$login=htmlentities($_POST['login']);
$password=htmlentities($_POST['password']);
$confirm_password=htmlentities($_POST['confirm_password']);
$mail=htmlentities($_POST['mail']);
$euro=htmlentities($_POST['euro']);
$prenom=htmlentities($_POST['prenom']);
$nom=htmlentities($_POST['nom']);

//$login=addslashes($login);
$password=addslashes($password);
$confirm_password=addslashes($confirm_password);
$mail=addslashes($mail);
$euro=addslashes($euro);
$prenom=addslashes($prenom);
$nom=addslashes($nom);


if ($password == "" || $confirm_password == "" || $mail == "" || $prenom == "" || $nom  == "") {
	
	if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') ) {
		echo  "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" /><br /><br /><div style=\"background:pink;border:1px solid red;color:red;\"><center><h1>Merci de remplir<br />tous les champs<br /><a href=\"javascript:history.back()\"><img src=http://www.zdesigns.fr/images/icone_retour.png></a></h1></center></div>";
	} else {
		echo  "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.4, maximum-scale=1.4, user-scalable=no\" /><center><div style=\"background:pink;border:1px solid red;color:red;width:500px;\"><h1>Merci de remplir tous les champs<br /><a href=\"javascript:history.back()\"><img src=http://www.zdesigns.fr/images/icone_retour.png></a></h1></center></div>";
	}

} else {
		$token = md5(time());
		if ($password === $confirm_password){
			
			$password = sha1($password);
			$sql="INSERT INTO user (password, mail, euro, prenom, nom, token) VALUES ('$password','$mail','$euro','$prenom','$nom','$token')"; // requête		
			$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		
		if ($req){
				$token = md5(time());
			     $headers ='From: "geoMagna - Bayonne"<dam3369@gmail.com>'."\n"; 
			     $headers .='Reply-To: dam3369@gmail.com'."\n"; 
			     $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
			     $headers .='Content-Transfer-Encoding: 8bit'; 

			     $message ='<html><body><br />F&eacute;licitation '.$prenom.' '.$nom.',<br><br><a href=http://inscription.devoralive.com/emailVerif.php?token='.$token.'>Valider mon inscription</a><br /><br />Votre identifiant unique sera '.$mail.' <br />Votre mot de pass: <em>&quot;masqu&eacute;&quot;</em><br />Promesse de don : '.$euro.' &#8364;</body></html>';
				
			
			mail($mail, 'Confirmation de votre inscription', $message, $headers);
			header('location:../merci.php');
			}
} else { 

		if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') ) {
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" /><br /><br /><center><div style=\"background:pink;border:1px solid red;color:red;\"><h1>Password Error<br /><a href=\"javascript:history.back()\"><img src=http://www.zdesigns.fr/images/icone_retour.png></a></h1></center></div>";
		} else {
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.4, maximum-scale=1.4, user-scalable=no\" /><center><div style=\"background:pink;border:1px solid red;color:red;width:400px;\"><h1>Password Error<br /><a href=\"javascript:history.back()\"><img src=http://www.zdesigns.fr/images/icone_retour.png></a></h1></center></div>"; 
	}
}
}
} else {
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\"/><center>N'oubliez pas d'accepter les conditions du r&egrave;glement<br /><a href=\"javascript:history.back()\"><img src=http://www.aucame.fr/images/fleche_retour.png></a></center>";
} 

mysql_close($connection); 
?>