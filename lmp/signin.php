<?php 
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=0.8; maximum-scale=2; user-scalable=1;\" />";
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;\" />";
?>
<noscript><meta http-equiv="refresh" content="1; URL=http://inscription.devoralive.com/no_js.php"></noscript>
<script type="text/javascript" src="../EPREUVES/js/webappdetect.js"></script>
<script type="text/javascript" src="../EPREUVES/js/triche.js"></script>
<?php if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') ) { echo  "<body style=\"background-color:black;background-image:url(../img/fondsigniniphone2.jpg);background-repeat: no-repeat;\"> "; } else { echo  "<body style=\"background-color:black;background-image:url(../img/fondsigninipad.jpg);background-repeat: no-repeat;\"> "; } ?>
		<span>
<?php require $_SERVER['DOCUMENT_ROOT'].'/lmp/method/connect.php'; ?>
					<form action="method/check.php" method="post" style="margin-top:-15px;">	
<?php 
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) echo "<div style=\"width:170px;margin-top:240px;margin-left:110px;\">";
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) echo "<div style=\"width:170px;margin-top:320px;margin-left:420px;\">";
?>
			<table border=0 cellpadding=10>
					<tr align=center><td>
			<span style="color:black;font-size:20px;">EMAIL</span><br />
			<input type="email" name="mail" size="20" style="background:white;"/><br />
			<span style="color:black;font-size:20px;">PASSWORD</span><br />
			<input type="password" name="password" size="20" style="background:white;"/>
			</td></tr>
			</table>
			</div>
<?php 
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')) echo "<div style=\"position:absolute;height:80px;top:365px;width:380px;opacity:0;\">";
if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) echo "<div style=\"position:absolute;top:585px;width:800px;left:105px;\">";
?>
			<INPUT border=0 type=image Value=submit align="middle" style="opacity:0;height:80px;width:100%">
			</div> 
				</form>
				<br />
	</h1>
</body>