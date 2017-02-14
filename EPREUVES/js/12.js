var A1;
var B1;
var A2;
var B2;
var H1;
var H2;
var lati;
var long;
var r1;
var r2;
var rand = Math.floor(Math.random()*2);
var lati1 = "43.491025";
var long1 = "-1.474297";
var lati2 = "43.489765";
var long2 = "-1.474533";

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

function reponse(pos, rand){
	if(rand == "2"){
		document.location.href="../validate.php?validated=12"
	}
	if(pos == rand){
		document.location.href="../validate.php?validated=12"
	} else {
		gpsText.innerHTML = "<h1>Dommage, c'est l'autre</h1>";
	}
}

function showGPS(position) {	
	lati=((Math.round(position.coords.latitude*1000000))/1000000);
	long=((Math.round(position.coords.longitude*1000000))/1000000);

	A1=(lati1-lati);
	B1=(long1-long);
	A2=(lati2-lati);
	B2=(long2-long);

	H1=((Math.sqrt((A1*A1)+(B1*B1)))*100000);
	r1 = (Math.floor(H1));

	H2=((Math.sqrt((A2*A2)+(B2*B2)))*100000);
	r2 = (Math.floor(H2));

	gpsText.innerHTML = "<h1>Allez sur le pont</h1>";

	if(r1<"17"){
		reponse("0", rand);
	}
	if(r2<"17"){
		reponse("1", rand);
	}
	if(r1>"17" && r2>"17"){
		gpsText.innerHTML = "<h1>Allez sur le pont</h1>";
	}
}

gpsText.innerHTML = "<h1>12&egrave;me Epreuve !</h1><img src='../../img/loading.gif'>";
setTimeout("getGPS()",3000);
