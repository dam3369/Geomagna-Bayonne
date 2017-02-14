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

A=("43.494820"-lati);
B=("-1.477562"-long);
H=((Math.sqrt((A*A)+(B*B)))*100000);
r = (Math.floor(H));

gpsText.innerHTML = "<h1>Trouvez Achile</h1>"
bulle_plate.innerHTML = r+" m&egrave;tres";

if(r<"15"){
	document.location.href="../validate.php?validated=6"
}

};

gpsText.innerHTML = "<h1>6&egrave;me Epreuve !</h1><img src='../../img/loading.gif'></center>";
setTimeout("getGPS()",5000);