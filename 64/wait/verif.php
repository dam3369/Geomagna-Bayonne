<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=1;" />
<meta http-equiv="refresh" content="20;URL=index.html">
</head>
<body>
<?php
$nom = $_POST['nom']; 
mail('dam3369@hotmail.com', 'Salle dattente chasse au tresor', $nom.', vient de delirer a faire la chasse au tresor de patience', 'From: dam3369@hotmail.com');
print("<center><h1>F&eacute;licitation $nom , Il n'y a plus qu'a attendre le d&eacute;part officiel.</h1><br /><img src=http://www.mptpa.com/images/photoannonce/coupe1.jpg></center>"); 
?> 
</body>
</html>