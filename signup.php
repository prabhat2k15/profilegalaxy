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
	$category1=$_POST['country'];
		$catselect="select country_name from countries where country_id=$category1";
		if($catselect2=mysql_query($catselect))// or die(mysql_error());
						while($rowscatselect=mysql_fetch_row($catselect2))
						{
							$category= $rowscatselect[0];
						}
	$address=$_POST['address'];
	$city=$_POST['city1'];
			$selectcity="Select city_name from cities1 where city_id=$city";
						if($selectcityq=mysql_query($selectcity))// or die(mysql_error());
						while($rowcityq=mysql_fetch_row($selectcityq))
						{
							$city= $rowcityq[0];
						}
		
	$state1=$_POST['state1'];
			$selectstate="Select state_name from states1 where state_id=$state1";
						if($selectstateq=mysql_query($selectstate))// or die(mysql_error());
						while($rowstateq=mysql_fetch_row($selectstateq))
						{
							$state1= $rowstateq[0];
						}
	//$subcategory=$_POST['subcategory'];
	$mobile=$_POST['mobile'];
	$subcategory="";   	
foreach($_REQUEST['mult'] as $chk1)   
   { //  $xc=mysql_query("Select state_name from states where country_id='$chk1'");
      $subcategory .= $chk1.",";   
   }  

   $scat=explode(",",$subcategory);
					
						foreach($scat as $sc)
					{
						//echo $sc;
						$selectscat="Select state_name from states where state_id=$sc";
						if($selectscatq=mysql_query($selectscat))// or die(mysql_error());
						while($rowscatq=mysql_fetch_row($selectscatq))
						{
							$subcat.= $rowscatq[0].',';
						}
					}
   
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
			$que="insert into registration (fname,lname,useremail,password,date,category,subcategory,mobile,address,city,state) values('$fname','$lname','$uemail','$password','$date','$category','$subcat','$mobile','$address','$city','$state1')";
				
				if(mysql_query($que))
				{ 
					//$_SESSION['login_user']=$fname; // Initializing Session
					header("location: signin.php?ls=dfjkl3423l4kJL768IGIUTY769776yjgiyg"); // Redirecting To Other Page
					//echo"<script>window.location.href='index.php?sucess';</script>";
				}
				mysql_close($connection); // Closing Connection
			}
		}
	}
	}//End of registration
?>