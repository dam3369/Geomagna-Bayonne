<?php 
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
	echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;\" />";
}
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) {
	echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=2.4; maximum-scale=2.4; user-scalable=0;\" />";
}
?>
<link rel="stylesheet" type="text/css" media="screen" href="run/css/style.css">
<?php
ini_set('display_errors', 1);
require $_SERVER['DOCUMENT_ROOT'].'/lmp/lock.php';
require $_SERVER['DOCUMENT_ROOT'].'/lmp/method/connect.php';

$id=$_SESSION['id'];
date_default_timezone_set('Europe/Paris');
$sql = "SELECT * FROM user WHERE id =$id";
$req = mysql_query($sql) or die ('DEAD');
$data = mysql_fetch_row($req);

class finish{
	public function classement($finish_line){
		if($finish_line == 1) return '1&egrave;re PLACE !!!';
		else return $finish_line.'&egrave;me place.';
	}
	public function courseTime($finish_time){
		$top_depart = mktime(15, 15, 0, 5, 8, 2011);
		$time = $finish_time - $top_depart;
		$time_heure=intval($time/60/60,0);
		$time_minute=intval($time/60,0);
		$time_minute -= ($time_heure * 60);
		
		$heure = "heures";
		$minute = "minutes";
		
		if($time_minute == 0 || $time_minute == 1){
			$minute = "minute";
		}
		if($time_heure == 0){
			return $time_minute." ".$minute;
		} elseif($time_heure == 1){
			$heure = "heure";
		}
		return $time_heure." ".$heure." et ".$time_minute." ".$minute;
	}
}
$finish = new finish;
?>
<center>
<h1>
<p>Vous terminez &agrave; la <?php echo $finish->classement($data[14]) ?></p>
<p>En <?php echo $finish->courseTime($data[13]) ?></p>
</h1>
</center>