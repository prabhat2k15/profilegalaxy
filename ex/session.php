
<?php
include_once('connection.php');
session_start();// Starting Session

if(!isset($_SESSION['login_user']))
{
echo $_SESSION['login_user'];
mysql_close($connection); // Closing Connection
header('Location:index.php?Login'); // Redirecting To Home Page
}
else{
	$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select id,fname,lname,useremail from registration where useremail='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$userid=$row['id'];
$login_session =$row['fname']." ".$row['lname'];
$email=$row['useremail'];
}
?>
