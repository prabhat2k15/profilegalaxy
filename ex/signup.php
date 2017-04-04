<?php
include('connection.php');
session_start();
//Registration section code start
	if(isset($_POST['registration']))
	{
	// Define $username and $password
	 $fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$uemail=$_POST['email'];
	$password=$_POST['pass'];
	$con_pass=$_POST['conformpass'];
	$date=$_POST['date'];
		if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['pass']) ||empty($_POST['date']))
	{
		echo"<script>window.location.href='registration.php?error=Please full-fill the requirment!';</script>";
		exit();
	}
	else
	{
		if($password!=$con_pass)
		{
			echo"<script>window.location.href='registration.php?error=Please enter your correct password';</script>";
			exit();
		}
		else
		{// Selecting Database
			$query="select * from registration where useremail='$uemail'";
			$run=mysql_query($query);
			if(mysql_num_rows($run)==1)
			{
				echo"<script>window.location.href='registration.php?error=Email already exist!';</script>";
				exit();
			}
			else
			{
			$que="insert into registration (fname,lname,useremail,password,date) values('$fname','$lname','$uemail','$password','$date')";
				if(mysql_query($que))
				{
					$_SESSION['login_user']=$fname; // Initializing Session
					header("location: home.php"); // Redirecting To Other Page
					//echo"<script>window.location.href='index.php?sucess';</script>";
				}
				mysql_close($connection); // Closing Connection
			}
		}
	}
	}//End of registration
?>