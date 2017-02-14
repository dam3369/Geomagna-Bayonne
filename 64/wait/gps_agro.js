function getGPS() {
	if (navigator.geolocation) {
		navigator.geolocation.watchPosition(showGPS, gpsError, {enableHighAccuracy:true});
	} else {
		gpsText.innerText = "Pas de fonctionnalité GPS.";
	}
}
function gpsError(error) {//alert("GPS Error: "+error.code+", "+error.message);
}
function showGPS(position) { gpsText.innerHTML = "" };
setTimeout("getGPS()",1000);