<?php
require "../lmp/lock.php";
require "../lmp/method/connect.php";

$user_id = $_SESSION['id'];
$sql="SELECT * FROM user WHERE id=$user_id";
$req = mysql_query ($sql) or die ('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
$data=mysql_fetch_assoc ($req);
if ($data["paid"]=="1"){
	switch($data["validated"]){
		case 0:
			header("location:".$ep1);
			break;
		case 1:
			header("location:".$ep2);
			break;
		case 2:
			header("location:".$ep3);
			break;
		case 3:
			header("location:".$ep4);
			break;
		case 4:
			header("location:".$ep5);
			break;
		case 5:
			header("location:".$ep6);
			break;
		case 6:
			header("location:".$ep7);
			break;
		case 7:
		    header("location:".$ep8);
		    break;
		case 8:
		    header("location:".$ep9);
		    break;
		case 9:
		    header("location:".$ep10);
		    break;
		case 10:
		    header("location:".$ep11);
		    break;
		case 11:
		    header("location:".$ep12);
		    break;
		case 12:
		    header("location:".$ep13);
		    break;
		case 13:
		    header("location:".$ep14);
		    break;
		case 14:
		    header("location:".$ep15);
		    break;
		case 15:
		    header("location:".$ep16);
		    break;
		case 16:
		    header("location:".$ep17);
		    break;
		case 17:
		    header("location:".$ep18);
		    break; 
		case 18:
		    header("location:".$ep19);
		    break; 
		case 19:
		    header("location:".$finish);
		    break; 
		}
} else {
	header("location:http://inscription.devoralive.com/faut_payer.php");
}

mysql_close($connection); ?>