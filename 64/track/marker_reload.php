<?php require './connect.php' ?>
<?php $user_id = $_GET['user_id'] ?>
<?php $sql="SELECT * from location WHERE last = 1 AND user_id = $user_id"; ?>
<?php $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); ?>
<?php $lat = 43.493117; $lng =  -1.474825; $latlng = $lat.",".$lng; ?>

	<?php while($data = mysql_fetch_assoc($req)){ ?>
			<?php echo $data['lat'] ?>_<?php echo $data['lng'] ?>
	<?php } ?>


<?php mysql_close($connection); ?>