<?php
session_start(); // Starting Session
include('connection.php');
//$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) 
{
	if (empty($_POST['useremail']) || empty($_POST['password'])) {
	//$error = "Username or Password is invalid";
	echo"<script>window.location.href='index.php?empty=Username or Password is empty!';</script>";
	exit();
	}
	else
	{
		// Define $username and $password
		$useremail=$_POST['useremail'];
		$password=$_POST['password'];
		// To protect MySQL injection for Security purpose
		$useremail = stripslashes($useremail);
		$password = stripslashes($password);
		$useremail = mysql_real_escape_string($useremail);
		$password = mysql_real_escape_string($password);
		// SQL query to fetch information of registerd users and finds user match.
		$query ="select * from registration where useremail='$useremail' AND password='$password'";
		$run = mysql_query($query);
		if (mysql_num_rows($run)==1) 
		{
			// SQL Query To Fetch Complete Information Of User
            $ses_sql=mysql_query("select fname from registration where useremail='$useremail'", $connection);
			$row = mysql_fetch_assoc($ses_sql);
			$username =$row['fname'];
		$_SESSION['login_user']=$useremail; //Initializing session
		header("location:home.php"); // Redirecting To Other Page
		}
		else 
		{
			//$error = "Username or Password is invalid";
			echo"<script>window.location.href='index.php?empty=Username or Password is invalid!';</script>";
			exit();
		}
			mysql_close($connection); // Closing Connection
	}
}
?>
