<?php
ini_set('display_errors', 1);     // A DECOMMENTER POUR VOIR LES ERREURS
$deport_config = false; // 														deportation of the connection

// header after login:
$after_create="/../signin.php";
$after_login="/../../requete/goatlast.php/";
$after_login_admin="/../../requete/goatlast.php";//$after_login_admin="/../../track/sourex2.php";
$after_logout="/../signin.php";

$ep0 = "google";//																		home page
$ep1 = "/../../EPREUVES/run/infinite/"; //												epreuve 1
$ep2 = "/../../EPREUVES/run/neige/";//													epreuve 2
$ep3 = "/../../EPREUVES/run/boogie/";//													epreuve 3
$ep4 = "/../../EPREUVES/run/iphone/";//													epreuve 4
$ep5 = "/../../EPREUVES/run/zimzim/";//													epreuve 5
$ep6 = "/../../EPREUVES/run/2011/";//													epreuve 6
$ep7 = "/../../EPREUVES/run/poissy/";//													epreuve 7
$ep8 = "/../../EPREUVES/run/carambar/";//												epreuve 8
$ep9 = "/../../EPREUVES/run/noel/";//													epreuve 9
$ep10 = "/../../EPREUVES/run/hd/";//													epreuve 10
$ep11 = "/../../EPREUVES/run/youp/";//													epreuve 11
$ep12 = "/../../EPREUVES/run/keb/";//													epreuve 12

// use login or email for signin
//$signin="login";
$signin="login";

if ($deport_config){
	require './../yourconfig.php'; // the header to use your configuration
}	else {
	// if you use this config data put informations of your connection here
	define("DB_HOST","localhost");
	define("DB_LOGIN","devoradminCtg64");
	define("DB_PASS","passCtg64");
	define("DB_BDD","devoradmin_64");
}

?>