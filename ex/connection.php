<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="project2016";
$connection=mysql_connect($dbhost,$dbuser,$dbpass) or die('Can not connect to the server');
mysql_select_db($dbname) or die('Can not connect the database...!');
?>