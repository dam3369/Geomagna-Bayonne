<?php
session_start();

if(!$_SESSION) {header("location: ./../lmp/signin.php");}
?>