<?php include('../header.php'); ?>
<style>
	#bulle_plate {
	visibility:hidden;
	}
</style>
<center>
<h1>16&egrave;me Epreuve !</h1><br />
<h3>Avant un retour &agrave; la porte Mousserolles, une pause s'impose.<br /><br />
Gr&acirc;ce &agrave; lui, on peut se nourrir, se fleurir.<br />
Public, &agrave; tous il est ouvert.<br />
Secret, il l'est pour ceux qui aiment se taire.</h3><br />
<form method="post" action="verif.php">
	<p><input type="password" name="reponse" size="9" /></p>
	<input type="submit" value="O.K" style="visibility:hidden;" /></form>
<?php include "../footer.php" ; ?>