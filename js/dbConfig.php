<?php
//db details
$dbHost = 'mysql4.000webhost.com';
$dbUsername = 'a4396218_suser';
$dbPassword = 'social123';
$dbName = 'a4396218_sdb';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>