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

A=("43.493389"-lati);
B=("-1.521643"-long);
H=((Math.sqrt((A*A)+(B*B)))*110000);
r = (Math.floor(H));


gpsText.innerHTML = "<u>Exercice &agrave; Anglet</u>, <br /><br />Plus la distance ci-dessous<br /> diminue, plus vous &ecirc;tes <br />pr&egrave;s du but.<br /><br />L'objectif est d'&ecirc;tre &agrave; moins de<br /> 10 m&egrave;tres de la cible.<br /><br />Indice:<br />Newton aurait aim&eacute; cette &eacute;nigme.<br /><br /><br /><div style=\"background:#a3aaea;border:2px dashed black;width:200px;border-radius: 30px;\"><span style=\"color:#9b0404\">"+r+" m&egrave;tres<br />de la cible</span></div>"

if(r<"10"){
	document.location.href="../../voila.php"
}

};

gpsText.innerHTML = "Localisation en cours<br><img src=http://www.guillaumeavoine.com/imgs/loading.gif>";
setTimeout("getGPS()",5000);