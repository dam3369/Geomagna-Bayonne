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

document.getElementById("lati").value = lati;
document.getElementById("longi").value = long;

A=("43.488088"-lati);
B=("-1.478418"-long);
H=((Math.sqrt((A*A)+(B*B)))*100000);
r = (Math.floor(H));

gpsText.innerHTML = "<h1>D'ici, il y a encore quelques m&egrave;tres<br />&agrave; parcourir</h1>avant la troisieme &eacute;preuve"
bulle_plate.innerHTML = r+"... m&egrave;tres.";

if(r<"20"){
	document.location.href="../validate.php?validated=2"
}

};

gpsText.innerHTML = "<h1>2&egrave;me Epreuve !</h1><br /><img src='../../img/loading.gif'>";
setTimeout("getGPS()",5000);