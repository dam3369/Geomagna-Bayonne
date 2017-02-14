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
	


// result.innerHTML = "<p>Distance : "+H+"</p>"+r;
	
lati=((Math.round(position.coords.latitude*1000000))/1000000);
long=((Math.round(position.coords.longitude*1000000))/1000000);

document.getElementById("lati").value = lati;
document.getElementById("longi").value = long;

A=("43.490599"-lati);
B=("-1.479958"-long);
H=((Math.sqrt((A*A)+(B*B)))*100000);
r = (Math.floor(H));

gpsText.innerHTML = "<h1>Evitez le mur</h1>"
bulle_plate.innerHTML = r+" m&egrave;tres</span>";


if(r<"15"){
	document.location.href="../validate.php?validated=3"
}

};

gpsText.innerHTML = "<h1>3&egrave;me Epreuve !</h1>";
setTimeout("getGPS()",5000);
//-->