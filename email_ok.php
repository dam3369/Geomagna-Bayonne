<HTML>
   <HEAD>
		<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
      <TITLE>inscription enregistr&eacute;e</TITLE>
   </HEAD>
   <BODY style="">
		<center>
				<em>
						<h3>
			<br />Votre email &agrave; bien &eacute;t&eacute; valid&eacute;.
						</h3>
				</em>
<br />
				<?php
$browseriphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$browseripad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");


						if ( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') ) {
									echo "<div style=\"background:#a3aaea;border:2px dashed black;height:200px;width:200px;border-radius: 30px;\"><br /><a href=\"http://inscription.devoralive.com/64/ \"><img src=img/pkg_icon2.png></a><br /><br /><span style=\"font-size:23px;color:#555555;\">";
									if ($browseriphone == true)  { echo "iPhone"; }
															if ($browseripad == true)  { echo "iPad"; }
									echo "_Installer</span></div><br />";
						} else {
							echo "<a href=\"http://www.facebook.com/event.php?eid=158480900869174\"><img src=\"img/fb.png\"></a>";
						}
						
				?>


		</center>
   </BODY>
</HTML>