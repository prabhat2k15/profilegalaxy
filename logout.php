<?php
include('session.php');
include('connection.php');
	$query2="update registration set status=0 where useremail='$email'";
mysql_query($query2) or die(mysql_error());
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>