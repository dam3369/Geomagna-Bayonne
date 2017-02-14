<HTML>
   <HEAD>
      <TITLE>D E L E T E ! ! ! </TITLE>      
   <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
         <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8;"/>
         		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="format-detection" content="telephone=no" />
		<link rel="apple-touch-icon" href="liste.jpg" />
		<link rel="apple-touch-startup-image" href="../img/bg.jpg" />
   </HEAD>
   <BODY style="color:white;">
		<center><?php
				include '../lmp/config.php';
				$connection = mysql_connect (DB_HOST,DB_LOGIN,DB_PASS);
				if (!$connection) die ("connection impossible");
				mysql_select_db (DB_BDD) or die ("pas de connection");
				$sql="SELECT * FROM user ORDER BY id DESC"; // requête
				$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
				$nb_resultats = mysql_num_rows($req);
				echo "<font size=16><strong>ATTENTION PAGE DE DELETE - ";
			echo $nb_resultats." inscrits</strong></font>";
				?>			
			<table border="1" cellspacing="0" cellpadding="10" bgcolor="#CCCCCC" RULES="ROWS" FRAME="BOX" style="text-align:center;">
			
				<?php
					echo "<tr>";
					echo "<td>";
					echo "Nom";
					echo "</td>";
					echo "<td>";
					echo "Prenom";
					echo "</td>";
					echo "<td>";
					echo "Email";
					echo "</td>";
					echo "<td>";
					echo "Promesse";
					echo "</td>";
					echo "<td>";
					echo "Paye";
					echo "</td>";
					echo "<td>";
					echo "(sur place)<br />ne pas clicker avant le 08 mai";
					echo "</td>";
					echo "</tr>";
				while($data=mysql_fetch_assoc ($req)) {
				switch ($data['paid']) {
				case "0":
					$data['paid'] = "Non";
					$color = "red";
					break;	
				case "1":
					$data['paid'] = "Oui";
					$color = "gold";
					break;	
					}
						
					echo "<tr border='1' cellspacing='0' cellpadding='10' bgcolor='".$color."'>";
					echo "<td>";
					echo $data['nom'];
					echo "</td>";
					echo "<td>";
					echo $data['prenom'];
					echo "</td>";
					echo "<td>";
					echo $data['mail'];
					echo "</td>";
					echo "<td>";
					if ($data["euro"] =="Admin") echo "Admin"; else echo " ".$data['euro']." &#8364;";
					echo "</td>";
					echo "<td>";
					if ($data["paid"] =="Oui") echo "Pay&eacute;"; elseif ($data["euro"] =="Admin") echo "Admin"; else echo "<form method=\"post\" action=\"../requete/del_this.php\"><input type=\"hidden\" name=\"mail\" value=".$data['mail']." /><input type=\"text\" name=\"payera\" size=\"8\" />&#8364;";
					echo "</td>";
					echo "<td>";
					if ($data["euro"] =="Admin") echo "Admin"; else echo "<INPUT border=0 src=\"http://www.mericar.com/images/cross_tick.jpg\" type=image Value=submit align=\"middle\" ></form>";
					echo "</td>";
					echo "</tr>";
					}
				?>									
			</table>
		</center>	
   </BODY>
</HTML>