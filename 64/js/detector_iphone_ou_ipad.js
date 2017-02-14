//Si on est un iPad
if( navigator.userAgent.match(/iPad/i) != null )
{
     document.location.href="./iPad/";
}


//Si on est un iPod
if( navigator.userAgent.match(/iPod/i) != null ) {
	alert('Sur votre iPod, vous ne disposez de connexion internet. Inutile d\'aller plus loin');
	document.location.href="http://www.facebook.com/event.php?eid=158480900869174";
	}

//Si on est un Ordinateur
if( (navigator.userAgent.match(/iPad/i) == null) &&  (navigator.userAgent.match(/iPhone/i) == null) && (navigator.userAgent.match(/iPod/i) == null))
{
	alert('Ce site est reserve aux iDevices. Inutile d\'aller plus loin');
     document.location.href="http://www.facebook.com/event.php?eid=158480900869174";
}