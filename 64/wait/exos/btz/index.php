<html>
<head>
	<script type="text/javascript" src="../js/secondes.js"></script>
	<script type="text/javascript" src="../js/webappdetect_wait.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<?php 
					if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
									echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;\" />";
						}
						if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) {
									echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=2.2; maximum-scale=2.2; user-scalable=0;\" />";
						}
						
						?>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="Pragma" content="no-cache" />
	 	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
		<meta http-equiv="Expires" content="0" />
</head>
	<body style="background-image:url(../../../img/parchemin_vierge.jpg);min-height:440px;width:280px;background-color:black;margin-left:15px;margin-top:18px;max-width:320px;background-repeat:no-repeat;">
	<em>
		<center><br /><br />(Biarritz)
		<h3><br /><br /><br /><br /><br />
<div id="gpsText"></div>
</center>
		</h3>	



		</em>	
		<a href="javascript:history.back()" style="position:absolute;top:375px;left:25px;"><img src=http://www.zdesigns.fr/images/icone_retour.png></a> 
	</body>
</html>
<script type="text/javascript" src="dist.js"></script>
