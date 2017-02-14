var lati;
var longi;
	
function getGPS() {

if (navigator.geolocation) {
navigator.geolocation.watchPosition(showGPS, gpsError, {enableHighAccuracy:true});
} else {
gpsText.innerText = "Pas de fonctionnalité GPS.";
}
}


function gpsError(error) { }

function showGPS(position) {
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
	setTimeout("clickOnSubmit()",5000);
}

setTimeout("getGPS()",1000);

setTimeout("timeOut()",15000);
