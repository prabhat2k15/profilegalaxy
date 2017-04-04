<?php
$dbhost="mysql4.000webhost.com";
$dbuser="a4396218_suser";
$dbpass="social123";
$dbname="a4396218_sdb";
$connection=mysql_connect($dbhost,$dbuser,$dbpass) or die('Can not connect to the server');
mysql_select_db($dbname) or die('Can not connect the database...!');
?>