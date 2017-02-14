<?php
extract($_POST);
$reponse = $_POST['reponse'];

		if(($reponse == "labourd") || ($reponse == "LABOURD") || ($reponse == "Labourd")){
			header("Location:../validate.php?validated=9");
		} else {
		header("Location: wait.php");
		}
?>