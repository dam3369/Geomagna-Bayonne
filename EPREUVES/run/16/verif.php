<?php
extract($_POST);
$reponse = $_POST['reponse'];

		if(($reponse == "jardin") || ($reponse == "Jardin") || ($reponse == "JARDIN") || ($reponse == "Le Jardin") || ($reponse == "LE JARDIN") || ($reponse == "Le jardin") || ($reponse == "le jardin")){
			header("Location:../validate.php?validated=16");
		} else {
		header("Location: wait.php");
		}
?>