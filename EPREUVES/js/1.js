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

A=("43.488450"-lati);
B=("-1.473339"-long);
H=((Math.sqrt((A*A)+(B*B)))*100000);
r = (Math.floor(H));

gpsText.innerHTML = "<h1>Partez &agrave; plus de 200 m&egrave;tres<br></h1><br>avant l'&egrave;tape suivante"
bulle_plate.innerHTML = "Bonne Chance !" 

if(r>"200"){
	document.location.href="../validate.php?validated=1"
}

};

gpsText.innerHTML = "<h1>C'est parti !<br>1&egrave;re Epreuve !<br /></h1><img src='../../img/loading.gif'>";
setTimeout("getGPS()",5000);