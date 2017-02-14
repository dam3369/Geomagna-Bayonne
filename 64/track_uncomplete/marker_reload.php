<?php require './connect.php';
echo 'po';
//$user_id = $_GET['user_id']
$sql="SELECT * from location WHERE last = 1"; //AND user_id = $user_id";
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
//$lat = 43.493117; $lng =  -1.474825; $latlng = $lat.",".$lng;
echo 'po';
$markers=array();
//$markers=array();
while($data = mysql_fetch_assoc($req)){
	$markers .= array( $data['user_id'] => array('lat' => $data['lat'], 'lng' => $data['lng']));
	//$marker[$data['user_id']]=$data['lng'];
	//$markers.=$marker
	
	//1:{lat: 23, lng:2},2:{lat: 23, lng:2}
}
echo 'po';
print_r($markers);
foreach($markers as $marker){
	foreach($marker as $latlng){
		echo $latlng;
	}
	print_r($marker);
}

json_encode($makers);

mysql_close($connection);
?>