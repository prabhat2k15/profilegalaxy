<?php
include('connection.php');
	if(isset($_REQUEST['checkuser']))
	{
	$emailuser=$_REQUEST['userstatus'];
		$query="update registration set approved=1 where useremail='$emailuser'";
		mysql_query($query);
	echo "<script> window.open('adminhome.php','_self'); </script>";
	}
	if(isset($_REQUEST['blockuser']))
	{
	$emailuser=$_REQUEST['userstatus'];
		$query="update registration set approved=0 where useremail='$emailuser'";
		mysql_query($query);
	echo "<script> window.open('adminhome.php','_self'); </script>";
	}
	
?>