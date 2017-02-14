<?php
ini_set('display_errors', 1); 
require('./connect.php');

if(file_exists("http://".$host.$uri.$ep0."/index.php"))echo "home page ok <br />";
if(file_exists("http://".$host.$uri.$ep1."/index.php"))echo "epreuve 1 ok <br />";
if(file_exists("http://".$host.$uri.$ep2."/index.php"))echo "epreuve 2 ok <br />";
if(file_exists("http://".$host.$uri.$ep3."/index.php"))echo "epreuve 3 ok <br />";
if(file_exists("http://".$host.$uri.$ep4."/index.php"))echo "epreuve 4 ok <br />";
if(file_exists("http://".$host.$uri.$ep5."/index.php"))echo "epreuve 5 ok <br />";
if(file_exists("http://".$host.$uri.$ep6."/index.php"))echo "epreuve 6 ok <br />";
if(file_exists("http://".$host.$uri.$after_login))echo "after login ok <br />";
if(file_exists("http://".$host.$uri.$after_login_admin))echo "after login admin ok <br />";
if(file_exists("http://".$host.$uri.$after_create))echo "after create ok <br />";
if(file_exists("http://".$host.$uri.$after_logout))echo "after logout ok <br />";
if($deport_config)echo "Deport config true<br />";
else echo "Deport config false<br />";

?>