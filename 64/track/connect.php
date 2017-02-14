<?php require './../lmp/config.php'; ?>
<?php $connection = mysql_connect (DB_HOST,DB_LOGIN,DB_PASS); ?>
<?php if (!$connection) die ("connection impossible"); ?>
<?php mysql_select_db (DB_BDD) or die ("pas de connection"); ?>