<?php
require $_SERVER['DOCUMENT_ROOT'].'/lmp/lock.php';
require $_SERVER['DOCUMENT_ROOT'].'/lmp/method/connect.php';

extract($_POST);

$user = $_SESSION['id'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];



$update="UPDATE location SET last='0' WHERE user_id = '$user' AND last = 1";
$save="INSERT INTO location (lat,lng,user_id) VALUES ('$lat','$lng','$user')";

if ($lat==0 || $lng==0){
	echo "valeurs égale à 0";
} else {
	mysql_query($update) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
	mysql_query($save) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
}

mysql_close($connection);
?>