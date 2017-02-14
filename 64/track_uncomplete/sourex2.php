<?php require './lock.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width; initial-scale=3.0; maximum-scale=8.0; user-scalable=1;" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="apple-touch-icon" href="iconzomb.png" />
	<script type="text/javascript" language="Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>	
	<script type="text/javascript" language="Javascript" src="js.js"></script>	
</head>
<body>
<center>

<form method="post" action="creer.php"><input type="hidden" name="lat" id="lati" /><input type="hidden" name="lng" id="longi" />
</form>

<img src=http://www.maxi-gif.com/gif-anime/jeux-videos/jeux-videos-metal-slug-00008.gif><br />
</center>
</body>
</html>
<script type="text/javascript" language="Javascript">
$('form').submit(function(e){
	e.preventDefault();
	$.post('./add_point.php', $('form').serializeArray());
})
</script>