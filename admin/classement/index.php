<?php
include '../../lmp/method/connect.php';
$sql="SELECT * FROM user WHERE paid=1 ORDER BY finish_line ASC"; // requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
$nb_resultats = mysql_num_rows($req);
class DOobject{
	private $i = 0;
	/*
	* Convertion du validate en code html.
	* @param	$id identifiant 	$value le validate
	* @return 	$result une chaine de charactère
	*/
	public function getValidate($id, $value){
		$result = "<span id='validate_$id'>";
		switch ($value) {
			case "0":
				$result .= "0</span>/18 Plus de 200m";
				break;	
			case "1":
				$result .= "1</span>/18<br />PORTE D ESPAGNE";
				break;	
			case "2":
				$result .= "2</span>/18<br />PIED DU MUR";
				break;	
			case "3":
				$result .= "3</span>/18<br />NOMBRE D ENFANT";
				break;	
			case "4":
				$result .= "4</span>/18<br />PARC ENFANT";
				break;	
			case "5":
				$result .= "5</span>/18<br />ACHILE ZO";
				break;	
			case "6":
				$result .= "6</span>/18<br />ANIMATEUR ZO";
				break;	
			case "7":
				$result .= "7</span>/18<br />PLACE DE LA LIBERTE";
				break;	
			case "8":
				$result .= "8</span>/18<br />GASCOGNE SAINT ESPRIT";
				break;	
			case "9":
				$result .= "9</span>/18<br />LES HALLES";
				break;	
			case "10":
				$result .= "10</span>/18<br />PATIENTEZ";
				break;
			case "11":
				$result .= "11</span>/18<br />LES PONTS";
				break;
			case "12":
				$result .= "12</span>/18<br />PONT LEVI";
				break;
			case "13":
				$result .= "13</span>/18<br />REMPART ALLER";
				break;
			case "14":
				$result .= "14</span>/18<br />REMPART 12 KM/H";
				break;
			case "15":
				$result .= "15</span>/18<br />JARDIN";
				break;
			case "16":
				$result .= "16</span>/18<br />PONT LEVI 2";
				break;
			case "17":
				$result .= "17</span>/18<br />ALLER A LA LIGNE D'ARRIVEE";
				break;
			case "18":
				$result .= "18</span>/18<br />COMBIEN DE CARRE";
				break;
			case "19":
				$result .= "FINISHED";
				break;

		}
		return $result;
	}
	public function color1on2(){
		$i = $this->i++;
		if($i%2 == 0) return "class='odd'";
	}
}
$DOObject = new DOobject();
?>
<html>
   <head>
      <title>EN COURS</title>      
   		<!-- <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" /> -->
        <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8;"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="format-detection" content="telephone=no" />
		<link rel="apple-touch-icon" href="liste.jpg" />
		<link rel="apple-touch-startup-image" href="../../img/bg.jpg" />
		<meta http-equiv="Refresh" content="10;url=index.php">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" charset="utf-8"></script>
		<style type="text/css" media="screen">
			table {
				text-align:center;
			}
			table,
			td{
				padding: 10px 5px;
				border: 3px solid white;
				background-color: lightblue;
			}
			td.odd{
				border: 3px solid lightblue;
				background-color: white;
			}
			tr{
				border: 3px solid white;
				background-color: white;
			}
			tr.odd{
				background-color: lightblue;
				border: 3px solid lightblue;
			}
		</style>
		<!-- cellspacing= 0px; cellpadding= 10px; RULES="ROWS" FRAME="BOX -->
   </head>
   <body>
		<center>
		<h2><?php echo $nb_resultats?> PARTICIPANT (Pay&eacute;) </h2>
		<table>
			<thead>
			<tr>
				<td>Nom</td>
				<td> Prenom </td>
				<td> Email </td>
				<td> <strong>!!! EN COURS !!!</strong></td>
				<td> CLASSEMENT FINAL </td>
			</tr>
			</thead>
			<tbody>
			<?php while($data = mysql_fetch_assoc ($req)) { ?>
			<?php $color = $DOObject->color1on2() ?>
			<tr <?php echo $color ?>>
				<td <?php echo $color ?>><?php echo $data['nom'] ?></td>
				<td <?php echo $color ?>><?php echo $data['prenom'] ?></td>
				<td <?php echo $color ?>><?php echo $data['mail'] ?></td>
				<td <?php echo $color ?>><?php echo $DOObject->getValidate($data['id'], $data['validated']);?></td>
				<td <?php echo $color ?>><?php echo $data['finish_line'] ?></td>
			</tr>
			<?php } ?>
			</tbody>
			</table>
		</center>
		<script type="text/javascript" charset="utf-8">
			var i
			var item
			i=0
			function DOReload(){
				i++;
				console.log("plop "+i);
				$.ajax({
					url: "reload_finish.php",
					dataType: 'json',
					type: 'GET',
					complete: function(data){
						console.log("data : "+data[0]);
						console.log(dump(data));
						
						//$.each(data, function(){
						//	$('#validate_'+data.key).html(data.validate);
						//});
					}
				});
				//setTimeout('DOReload()', 5000);
			}	
			setTimeout('DOReload()', 5000);
		</script>
   </body>
</html>