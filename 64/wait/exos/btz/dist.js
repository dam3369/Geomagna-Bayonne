var A;
var B;
var H;
var lati;
var long;
var r;

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
	
lati=((Math.round(position.coords.latitude*1000000))/1000000);
long=((Math.round(position.coords.longitude*1000000))/1000000);

A=("43.484047"-lati);
B=("-1.563129"-long);
H=((Math.sqrt((A*A)+(B*B)))*110000);
r = (Math.floor(H));


gpsText.innerHTML = "Exercice 1: <br><span style=\"color:#9b0404\">"+r+" m&egrave;tres</span><br />"

if(r<"50"){
	document.location.href="../../voila.php"
}

};

gpsText.innerHTML = "Localisation en cours<br><img src=http://www.guillaumeavoine.com/imgs/loading.gif>";
setTimeout("getGPS()",5000);