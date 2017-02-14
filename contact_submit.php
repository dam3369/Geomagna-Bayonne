<?php
extract($_POST);
$success = $error = false;

$pattern = "/([a-z0-9._]*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|biz|info|name|aero|biz|info|jobs|museum)\b)/i";
$pregError = "<p>Adresse e-mail requise ou invalide.</p>";
$textError = "<p>Le corps du texte est requis.</p>";

$user = array();
foreach($_POST as $key => $post){
	$post = htmlentities($post);
	$user[$key]=	addslashes($post);
}

preg_match($pattern, $_POST['email'], $match);
$email = $match[0];
if($email || $user['text']){
	if(!$email){
		$error = $pregError;
	} elseif (!$user['text']) {
		$error = $textError;
	} else {
		$prenomNom = "anonyme";
		if($user['prenom']) $prenomNom = $user['prenom']." ";
		if($user['nom']) $prenomNom .= $user['nom'];
		$headers ='From: "'.$prenomNom.'"<'.$email.'>'."\n"; 
		$headers .='Reply-To: dam3369@gmail.com'."\n"; 
		$headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
		$headers .='Content-Transfer-Encoding: 8bit';
		$message ='Question de '.$user['prenom'].' '.$user['nom'].' :'." \n". $user['text'];
		$titre = 'geomagna '.$user['service'];
		
		if($user['service'] == 'presse'){
			$to = 'valy.s@hotmail.fr';
		}else{
			$to = 'dam3369@gmail.com';
		}
		$mail = mail($to , $titre , $message, $headers);
		if($mail)
		$success = "<p>Votre message à bien été envoyé</p>";
		else
			$error = "<p>Un problème empèche l'envoie de votre demande.</p><p>Essayez plus tard.</p>";
	}
}
else {
	$error = $pregError.$textError;
}

if($success){
	echo "<div class='green msg'>".$success."</div>";
}elseif ($error) {
	echo "<div class='red msg'>".$error."</div>";
}
?>