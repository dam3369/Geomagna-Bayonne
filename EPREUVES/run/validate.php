				<?php
			require $_SERVER['DOCUMENT_ROOT'].'/lmp/lock.php';
			require $_SERVER['DOCUMENT_ROOT'].'/lmp/method/connect.php';
				$validated=$_GET['validated'];
				$id = $_SESSION['id'];
				$sql="UPDATE user SET validated=$validated WHERE id=$id"; // requête
				$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
				switch ($validated){
					case '0':
						header("Location: http://".$host.$uri.$ep1);
						break;
					case '1':
						header("Location: http://".$host.$uri.$ep2);
						break;
					case '2':
						header("Location: http://".$host.$uri.$ep3);
						break;
					case '3':
						header("Location: http://".$host.$uri.$ep4);
						break;
					case '4':
						header("Location: http://".$host.$uri.$ep5);
						break;
					case '5':
						header("Location: http://".$host.$uri.$ep6);
						break;
					case '6':
						header("Location: http://".$host.$uri.$ep7);
						break;
					case '7':
						header("Location: http://".$host.$uri.$ep8);
						break;
					case '8':
						header("Location: http://".$host.$uri.$ep9);
						break;
					case '9':
						header("Location: http://".$host.$uri.$ep10);
						break;
					case '10':
						header("Location: http://".$host.$uri.$ep11);
						break;
					case '11':
						header("Location: http://".$host.$uri.$ep12);
						break;
					case '12':
						header("Location: http://".$host.$uri.$ep13);
						break;
					case '13':
						header("Location: http://".$host.$uri.$ep14);
						break;
					case '14':
						header("Location: http://".$host.$uri.$ep15);
						break;
					case '15':
						header("Location: http://".$host.$uri.$ep16);
						break;
					case '16':
						header("Location: http://".$host.$uri.$ep17);
						break;
					case '17':
						header("Location: http://".$host.$uri.$ep18);
						break;
					case '18':
						header("Location: http://".$host.$uri.$ep19);
						break;
					case '19':
						header("Location: http://".$host.$uri.$finish);
						break;
					}
				?>