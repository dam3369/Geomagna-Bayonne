<?php
//ini_set('display_errors', 1);     // A DECOMMENTER POUR VOIR LES ERREURS
$deport_config = false; // 														deportation of the connection

// header after login:
$after_create="/../signin.php";
$after_login="/../../64/sponsor/";
$after_login_admin="/../../requete/goatlast.php";
$after_logout="/../signin.php";

$ep1 = "/../../EPREUVES/run/1/"; //											epreuve 1
$ep2 = "/../../EPREUVES/run/2/";//											epreuve 2
$ep3 = "/../../EPREUVES/run/3/";//											epreuve 3
$ep4 = "/../../EPREUVES/run/4/";//											epreuve 4
$ep5 = "/../../EPREUVES/run/5/";//											epreuve 5
$ep6 = "/../../EPREUVES/run/6/";//											epreuve 6
$ep7 = "/../../EPREUVES/run/7/";//											epreuve 7
$ep8 = "/../../EPREUVES/run/8/";//											epreuve 8
$ep9 = "/../../EPREUVES/run/9/";//											epreuve 9
$ep10 = "/../../EPREUVES/run/10/";//										epreuve 10
$ep11 = "/../../EPREUVES/run/11/";//										epreuve 11
$ep12 = "/../../EPREUVES/run/12/";//										epreuve 12
$ep13 = "/../../EPREUVES/run/13/";//										epreuve 13
$ep14 = "/../../EPREUVES/run/14/";//										epreuve 14
$ep15 = "/../../EPREUVES/run/15/";//										epreuve 15
$ep16 = "/../../EPREUVES/run/16/";//										epreuve 16
$ep17 = "/../../EPREUVES/run/17/";//										epreuve 17
$ep18 = "/../../EPREUVES/run/18/";//										epreuve 18
$ep19 = "/../../EPREUVES/run/19/";//										epreuve 19

$finish = "/../../EPREUVES/run/finish.php";//


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