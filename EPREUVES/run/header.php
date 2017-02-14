<html>
	<head>
	<!--<script type="text/javascript" src="../../../js/triche.js"></script> fonctionne-->
	<?php 
	if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
		echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;\" />";
	}
	if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) {
		echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=2.4; maximum-scale=2.4; user-scalable=0;\" />";
	}
	?>		
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
		<meta http-equiv="Expires" content="0" />
		<noscript>
			<meta http-equiv="refresh" content="1; URL=http://inscription.devoralive.com/no_js.php" />
		</noscript>
		<script type="text/javascript" language="Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />	
	</head>
	<body>
		<form id="form" method="post" action="creer.php">
		<input type="hidden" name="lat" id="lati" />
		<input type="hidden" name="lng" id="longi" />
		</form>
