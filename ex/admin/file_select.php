<?php
include_once('connection.php');
if(isset($_POST['submit']))
{
	$question=$_POST['q_area'];
	$A=$_POST['a'];
	$B=$_POST['b'];
	$C=$_POST['c'];
	$D=$_POST['d'];
	$correct=$_POST['correct'];
	if($question=="" && $correct=="")
	{
	 echo "<script>alert('please full-fill the requirement...')</script>";
	}
	else
	{
		session_start();
		$data=$_SESSION['selected_paper'];
		if($data=="Banking")
		{
			$que="insert into banking (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="SSC")
		{
			$que="insert into ssc (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="UPSC")
		{
			$que="insert into upsc (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="BPSC")
		{
			$que="insert into bpsc (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="IBPS")
		{
			$que="insert into ibps (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="Railway")
		{
			$que="insert into railway (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="Math")
		{
			$que="insert into math (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}	
		else if($data=="G_K")
		{
			$que="insert into gk (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="English")
		{
			$que="insert into english (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else if($data=="Resoning")
		{
			$que="insert into resoning (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
            if(mysql_query($que))
            {
                echo "<script>window.open('question_paper.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
		}
		else
		{
		echo"Sorry!couldn't connect to database";
		}
	}
}
?>