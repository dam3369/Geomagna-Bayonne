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

A=("44.829787"-lati);
B=("-0.567750"-long);
H=((Math.sqrt((A*A)+(B*B)))*110000);
r = (Math.floor(H));


gpsText.innerHTML = "BDX<div style=\"background:#a3aaea;border:2px dashed black;width:200px;border-radius: 30px;\"><span style=\"color:#9b0404\">"+r+" m&egrave;tres<br />de la cible</span></div>"

if(r<"10"){
		document.location.href="../../voila.php";
}

};

gpsText.innerHTML = "Localisation en cours<br><br><br><img src=http://www.guillaumeavoine.com/imgs/loading.gif>";
setTimeout("getGPS()",5000);