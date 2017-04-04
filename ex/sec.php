<!--?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
$db=mysql_select_db('myproject', $con)or die(mysql_error());
	//session_start();
	if(isset($_POST['submit']))
	{

		//$_SESSION['name']=$_POST['u_name'];
		//$_SESSION['email']=$_POST['u_email'];
		//$_SESSION['pass']=$_POST['u_pass'];
		// $_SESSION['con_pass']=$_POST['u_con_pass'];
		 //$name1=$_SESSION['name'];
		 //$email1=$_SESSION['email'];
		 //$pass1=$_SESSION['pass'];
		 $name1=$_POST['u_name'];
		 $email=$_POST['u_email'];
		 $pass1=$_POST['u_pass'];
		 $con_pass1=$_POST['u_con_pass'];
		if($pass1!=$con_pass1)
		{
				echo "<script>alert('Incorrect password')</script>";
				exit();
		}
		else
		{
			$que="insert into signup (username,useremail,password) values('$name1','$email1','$pass1')";
			if(mysql_query($que))
			{
				echo "<script>window.open('contact_us.php','_self')</script>";
			}
		}
	}
?-->
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
	// Define $username and $password
	$username=$_POST['u_name'];
	$password=$_POST['u_pass'];
	$email=$_POST['u_email'];
	$con_pass=$_POST['u_con_pass'];
	if ($username=="" || $password=="" || $email=="")
	{
		echo"<script>window.location.href='index.php?error=Username or Password is invalid';</script>";
		exit();
	}
	else
	{
		if($password!=$con_pass)
		{
			//$error ="Password unmatched !";
			echo"<script>window.location.href='index.php?error=Password unmatched!';</script>";
			exit();
		}
		else
		{
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysql_connect("localhost", "root", "");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$email=stripcslashes($email);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$email = mysql_real_escape_string($email);

			// Selecting Database
			$db = mysql_select_db("myproject", $connection);
			$query="select * from signup where useremail='$email'";
			$run=mysql_query($query);
			if(mysql_num_rows($run)==1)
			{
				echo"<script>window.location.href='index.php?error=Email already exist!';</script>";
				exit();
			}
			else
			{
			$que="insert into signup (username,useremail,password) values('$username','$email','$password')";
				if(mysql_query($que))
				{
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: index.php?"); // Redirecting To Other Page
					//echo"<script>window.location.href='index.php?sucess';</script>";
				}
				mysql_close($connection); // Closing Connection
			}
		}
	}
}
?>
