function getGPS() {
if (navigator.geolocation) {
navigator.geolocation.watchPosition(showGPS, gpsError, {enableHighAccuracy:true});
} else {
gpsText.innerText = "Pas de fonctionnalité GPS.";
}
}

function gpsError(error) {
alert("GPS Error: "+error.code+", "+error.message);
}

function showGPS(position) {
	
gpsText.innerHTML = "<h2>RETOUR > 12 km/h</h2>";
bulle_plate.innerHTML = "Votre vitesse &rarr; "+((Math.round(position.coords.speed*36))/10)+" km/h..."; 

 if ((position.coords.speed * 3.6) > "12") {
	document.location.href="../validate.php?validated=15" 
 	 	};
}

gpsText.innerHTML = "<h1>15&egrave;me Epreuve !</h1>";

setTimeout("getGPS()",2000);

