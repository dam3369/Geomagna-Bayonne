<!--
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

A=("43.491722"-lati);
B=("-1.479141"-long);
H=((Math.sqrt((A*A)+(B*B)))*100000);
r = (Math.floor(H));

gpsText.innerHTML = "<h1>Ces 7 enfants auraient ador&eacute; vous suivre</h1>";
bulle_plate.innerHTML = r+" m&egrave;tres</span>";


if(r<"20"){
	document.location.href="../validate.php?validated=5"
}

};

gpsText.innerHTML = "<h1>5&egrave;me Epreuve !</h1>";
setTimeout("getGPS()",4000);
//-->