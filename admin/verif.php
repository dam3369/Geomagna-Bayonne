<?php

extract($_POST);
$reponse = $_POST['reponse'];

		if($reponse != "Maillot"){
			header("Location: index.php");
		} else {
header("Location: liste.php");
		}
?>
