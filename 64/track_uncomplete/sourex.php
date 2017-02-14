<?php require './lock.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width; maximum-scale=1; user-scalable=0;" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="apple-touch-icon" href="img/iconsouris.png" />
	<link rel="apple-touch-startup-image" href="img/loadingmouse.png" />
	<script type="text/javascript" language="Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
<style type="text/css">
#detector {
	-webkit-border-radius: 1000px;
}
</style>
	
	
<title>Souris</title>
</head>
<body>
<div id="fond">
<center>
<div id="coord">
<form method="post" action="creer.php">
	<input type="text" name="lat" id="lati" /><br />
	<input type="text" name="lng" id="longi" /><br />
</form>
</div>
</center>
</div>
</body>
</html>
<script type="text/javascript">
	var lati;
	var longi;
	
function getGPS() {

if (navigator.geolocation) {
navigator.geolocation.watchPosition(showGPS, gpsError, {enableHighAccuracy:true});
} else {
gpsText.innerText = "Pas de fonctionnalité GPS.";
}
}

function gpsError(error) {
//alert("GPS Error: "+error.code+", "+error.message);
}

function showGPS(position) {
// result.innerHTML = "<p>Distance : "+H+"</p>"+r;
	
	lati=((Math.round(position.coords.latitude*1000000))/1000000);
	longi=((Math.round(position.coords.longitude*1000000))/1000000);
	document.getElementById("lati").value = lati;
	document.getElementById("longi").value = longi;
};

function clickOnSubmit(){
	$('form').submit();
	timeOut();
}

function timeOut(){
	setTimeout("clickOnSubmit()",15000);
}

setTimeout("getGPS()",1000);

setTimeout("timeOut()",15000);

$('form').submit(function(e){
	e.preventDefault();
	$.post('./add_point.php', $('form').serializeArray());
})
</script>

