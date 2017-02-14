<?php

extract($_POST);
$reponse = $_POST['reponse'];

		if(($reponse == "trente") || ($reponse == "30")){
			header("Location: ../validate.php?validated=19");
		} else {
		header("Location: wait.php");
		}
?>
