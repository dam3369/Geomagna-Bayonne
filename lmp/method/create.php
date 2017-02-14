<?php
require './connect.php';

extract('$_POST');

$login=htmlentities($_POST['login']);
$password=htmlentities($_POST['password']);
$confirm_password=htmlentities($_POST['confirm_password']);

$login=addslashes($login);
$password=addslashes($password);
$confirm_password=addslashes($confirm_password);

if ($password == $confirm_password){
	$password = sha1($password);
	$sql="INSERT INTO user (login, password) VALUES ('$login','$password');"; // requête
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		
	if ($req){
		header($after_create);
	}
}	else {  ?>
	<p>les mots de passe ne correspondent pas</p>
<?php	}?>

<?php mysql_close($connection); ?>