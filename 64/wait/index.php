<?php
require $_SERVER['DOCUMENT_ROOT'].'/lmp/lock.php';
?>
<html>
	<head>
		<script type="text/javascript" src="../js/webappdetect_wait.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
			<?php 
			if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;\" />";
			if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=2.2; maximum-scale=2.2; user-scalable=0;\" />";
			?>
			<meta name="apple-mobile-web-app-capable" content="yes" />
			<meta name="apple-mobile-web-app-status-bar-style" content="black" />
			<meta name="format-detection" content="telephone=no" />
			<meta http-equiv="Pragma" content="no-cache" />
		 	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
			<meta http-equiv="Expires" content="0" />
			<style type="text/css">
			A:link {text-decoration: none;color:white;}
			A:visited {text-decoration: none}
			A:active {text-decoration: none}
			A:hover {text-decoration: underline; color: red;}
			</style>
	</head>
	<body id="refreshed" style="background-image:url(../img/mail_bg.jpg);min-height:400px;width:280px;background-color:black;margin-left:15px;margin-top:18px;max-width:320px;background-repeat:no-repeat;font-family: Zapfino, cursive;font-size:14px;">
		<b>
		<center>
			<?php
			date_default_timezone_set('Europe/Paris');
			$top_depart = mktime(15, 15, 0, 5, 8, 2011);	//8 Mai 2011, 14:30 
			 if ($top_depart < time()) header("location:http://inscription.devoralive.com/requete/goatlast.php");
			?>
			<a href="javascript:location.reload(true)"  style="margin-left:0px;"><img src=http://inscription.devoralive.com/img/8mai.png style="width:80px;"></a>
			<br />
			<h3>Geomagna - Bayonne</h3><br /><br /><br />
			<span id="span_text_chaho"><a href=http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=&aq=&sll=43.488362,-1.470451&sspn=0.008329,0.019226&ie=UTF8&ll=43.488301,-1.473246&spn=0.001041,0.002403&t=h&z=19>Mail Chaho Pelletier</a></span>
			<br />
			D&eacute;part automatique.
		</center>
		</em>						
			<div style="position:absolute;top:330px;left:120px;">
			</div>
			</b>
			<div id="gpsText"></div>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script> 
			 <script type="text/javascript" > 
			var auto_refresh = setInterval(
			function()
			{
			$('#reload').load('reload.php');
			}, 5000);
			</script>
	</body>
</html>
<script type="text/javascript" src="gps_agro.js"></script>
<script type="text/javascript">
	if( (window.orientation != 0) && (window.orientation != 180) ) 
	   alert('Veuillez retourner votre iPhone en mode portrait'); 
</script>
