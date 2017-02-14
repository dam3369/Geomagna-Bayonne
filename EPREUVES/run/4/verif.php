<?php
extract($_POST);
$reponse = $_POST['reponse'];

		if(($reponse == "sept") || ($reponse == "7")){
			header("Location:../validate.php?validated=4");
		} else {
		header("Location: wait.php");
		}
?>