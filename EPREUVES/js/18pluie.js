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
gpsText.innerText = "Pas de fonctionnalit&eacute; GPS.";
}
}

function gpsError(error) {
//alert("GPS Error: "+error.code+", "+error.message);
}

function showGPS(position) {
	
lati=((Math.round(position.coords.latitude*1000000))/1000000);
long=((Math.round(position.coords.longitude*1000000))/1000000);

document.getElementById("lati").value = lati;
document.getElementById("longi").value = long;

A=("43.483943"-lati);
B=("-1.471849"-long);
H=((Math.sqrt((A*A)+(B*B)))*100000);
r = (Math.floor(H));

gpsText.innerHTML = "<h1>Rendez-vous maintenant dans la zone d'arriv&eacute;e</h1><br />En Raison des conditions météo a cet instantané, nous changeons quelque peu l'organisation.<br />";
bulle_plate.innerHTML = r+" m&egrave;tres</span>";

if(r<"30"){
	document.location.href="../validate.php?validated=18"
}
};

gpsText.innerHTML = "<h1>18&egrave;me Epreuve !</h1><img src='../../img/loading.gif'>";

setTimeout("getGPS()",4000);

