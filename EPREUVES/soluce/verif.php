<?php

extract($_POST);
$reponse = $_POST['reponse'];

		if($reponse != "popopo"){
			header("Location: ../plan.html");
		} else {
header("Location: index.html");
		}
?>
