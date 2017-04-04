
<?php
include_once('connection.php');
session_start();// Starting Session
if(isset($_POST['location']))
{
$loc=$_POST['location'];
			$qrcat="Select city_name from cities1 where city_id=$loc";
			$qrcat1=mysql_query($qrcat);
			while($rowcat=mysql_fetch_row($qrcat1))
			{
			$loc=$rowcat[0];
			}
$_SESSION['location']=$loc;
echo $_SESSION['location'];
header('Location:index.php?location='.$loc);
}
else{  
if(!isset($_SESSION['login_user']))
{
//echo $_SESSION['login_user'];
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
	//  $chat=mysql_query("update friend_request set active_user=1 where user_id='$userid'");
	  $_SESSION['id']=$userid;
	  $_SESSION['email']=$email;
}
}
?>
