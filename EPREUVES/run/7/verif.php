<?php
extract($_POST);
$reponse = $_POST['reponse'];

		if(($reponse == "animateur") || ($reponse == "ANIMATEUR") || ($reponse == "Animateur")){
			header("Location:../validate.php?validated=7");
		} else {
		header("Location: wait.php");
		}
?>