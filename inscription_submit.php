<?php
require './lmp/method/connect.php';
extract($_POST);
$success = $error = false;

$pattern = "/([a-z0-9._]*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|biz|info|name|aero|biz|info|jobs|museum)\b)/i";

$user = array();
$user['accepte'] = false;
foreach($_POST as $key => $post){
	$post = htmlentities($post);
	$user[$key]=	addslashes($post);
}

preg_match($pattern, $_POST['email'], $match);
$email=false;
if ($match) $email = $match[0];
if($email || $user['password'] || $user['password_bis'] || $user['nom'] || $user['prenom'] || $user['euro'] || $user['accepte']){
	if(!$email){
		$error = "<p>Adresse e-mail requise ou invalide.</p>";
	}elseif(!$user['password']){
		$error = "<p>Mot de passe requis</p>";
	}elseif(!$user['password_bis']){
		$error = "<p>Confirmation de mot de passe requis</p>";
	}elseif(!$user['nom']){
		$error = "<p>Nom de famille requis</p>";
	}elseif(!$user['prenom']){
		$error = "<p>Prénom requis requis</p>";
	}elseif(!$user['euro']){
		$error = "<p>Une promesse de dons requis</p>";
	}elseif($user['accepte'] != 'Yes'){
		$error = "<p>Vous devez accepter le réglement</p>";
	}else {
		if ($password === $password_bis) {
			
			$password = sha1($password);
			$token = md5(time());
		    $headers ='From: "geoMagna - Bayonne"<dam3369@gmail.com>'."\n"; 
		    $headers .='Reply-To: dam3369@gmail.com'."\n"; 
		    $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
		    $headers .='Content-Transfer-Encoding: 8bit'; 

		    $message ='<html><body><br />F&eacute;licitation '.$prenom.' '.$nom.',<br><br><a href=http://inscription.devoralive.com/emailVerif.php?token='.$token.'>Valider mon inscription</a><br /><br />Votre identifiant unique sera '.$email.' <br />Votre mot de pass: <em>&quot;masqu&eacute;&quot;</em><br />Promesse de don : '.$euro.' &#8364;</body></html>';
			
			mail($email	, 'Confirmation de votre inscription', $message, $headers);
			
			$success = "<p>Enregistrement réussi.</p><p>Un e-mail de confiramtion vient d'être envoyé</p>";
			$sql="INSERT INTO user (password, mail, euro, prenom, nom, token) VALUES ('$password','$email','$euro','$prenom','$nom','$token')"; // requête
			$req = mysql_query($sql) or die ("<p>Un problème empèche l'envoie de votre demande.</p><p>Essayer plus tard.</p>");
		}else {
			$error = "<p>Les mots de passe ne sont pas concordants</p>";
		}
	}
}
else {
	$error = "Tout les champs sont obligatoires";
}
// Affichage des messages.
if($success){
	echo "<div class='green msg'>".$success."</div>";
}elseif ($error) {
	echo "<div class='red msg'>".$error."</div>";
}
?>