<?php
session_start(); // Starting Session
include('connection.php');
//$error=''; // Variable To Store Error Message

//***************For the ADMIN ***************************************
if (isset($_POST['adminlogin'])) 
{
		$adminuser=$_POST['adminuser'];
		$adminpassword=$_POST['adminpassword'];
		$adminuser=stripslashes($adminuser);
		$adminpassword=stripslashes($adminpassword);
		// SQL query to fetch information of registerd users and finds user match.
		$query ="select * from admin where admin='$adminuser' AND password='$adminpassword'";
		$run = mysql_query($query);
		if (mysql_num_rows($run)==1) 
		{
		$_SESSION['adminsess']=$adminuser;
			echo "Hii";
		header("location:adminhome.php"); // Redirecting To Other Page
		}
}
//***************For the User ***************************************
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
			$username =$row['fname']." ".$row['lname'];
		$_SESSION['login_user']=$useremail; //Initializing session
		$query2="update registration set status=1 where useremail='$useremail'";
		mysql_query($query2) or die(mysql_error());
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
