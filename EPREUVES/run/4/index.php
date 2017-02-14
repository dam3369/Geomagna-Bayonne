<?php include('../header.php'); ?>
<style>
	#bulle_plate {
	visibility:hidden;
	}
</style>
<center>
<h1>4&egrave;me Epreuve !</h1>
<h3>
Un petit garcon affirme :<br />"j'ai autant de fr&egrave;res que de soeurs"<br /><br />
Sa soeur r&eacute;pond :<br />"j'ai deux fois plus de fr&egrave;res que de soeurs"<br /><br />
Combien y a-t-il d'enfants dans cette famille ?<br> </h3>
<form method="post" action="verif.php">
	<p><input type="password" name="reponse" /></p>
	<input type="submit" value="O.K" /></form>
<?php include "../footer.php" ; ?>