<?php require './connect.php' ?>
<?php $sql="SELECT * from location"; ?>
<?php $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); ?>
<?php $lat = 48.825081; $lng =  2.192368; $latlng = $lat.",".$lng; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=0.5, user-scalable=no" />
<!-- <meta http-equiv="refresh" content="15;url=./gmap.php"> -->
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map_canvas { height: 100% }
</style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" language="Javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
</head>
<body>
<div id="map_canvas" style="width:100%; height:100%"></div>
<script type="text/javascript">
var position;
function generateMap(){
	var latlng = new google.maps.LatLng(<?php echo $latlng ?>);
	var myOptions = {
		zoom: 11,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		navigationControl: false,
		streetViewControl: false,
		scaleControl: false,
		noClear: true
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	return map;
};
var map = generateMap();
function generateMarker(map, position){
	var marker = new google.maps.Marker({
		position: position,
		map: map,
		flat : true
	});
	return marker;
}
<?php while($data = mysql_fetch_assoc($req)){ ?>
	position = new google.maps.LatLng(<?php echo $data['lat'] ?>, <?php echo $data['lng'] ?>);
	var marker<?php echo $data['user_id'] ?> = generateMarker(map, position);

<?php } ?>

</script>
</body>
</html>
<?php mysql_close($connection); ?>