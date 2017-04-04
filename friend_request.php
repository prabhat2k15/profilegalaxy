<?php
include('connection.php');
include('session.php');
$u_id =$_GET['userid'];
$u_name=$_GET['username'];
$f_id =$_GET['friend_id'];
$f_name=$_GET['fname'];
	$query="insert into friend_request (user_id,sender,friend_id,request) values('$u_id','$u_name','$f_id','$f_name')";
	$run=mysql_query($query);
	if($run>0)
	{
		header('location:home.php');
	}
?>