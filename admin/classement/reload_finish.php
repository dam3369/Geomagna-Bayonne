<?php
include '../../lmp/method/connect.php';
$sql="SELECT id, validated FROM user WHERE paid=1 ORDER BY validated DESC"; // requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
$json = array();
$i=0;
?>
{
<?php
while($data = mysql_fetch_assoc ($req)){
	$json[$i] = array('id' => $data['id'], 'validated' => $data['validated']);
?>
	<?php echo $i ?>: {'id': <?php echo $data['id'] ?>, 'validated': <?php echo $data['validated'] ?>},
<?php
	$i++;
}
mysql_close($connection);
?>
}