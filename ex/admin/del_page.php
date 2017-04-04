<?php include_once('connection.php')?>
<!--Sign up delete section start-->
<?php
	if(isset($_GET['del_page']))
	{
   $delete_page = $_GET['del_page'];
   $query="delete from signup where id='$delete_page'";
   if(mysql_query($query))
   {
    echo "<script>window.open('u_reg_record.php?deleted=A data has been deleted...!','_self')</script>";
   }
   }
?><!--End of sign up delete section-->
<!--News & Event delete section start-->
<?php
	if(isset($_GET['delete_data']))
	{
	$delete_data1=$_GET['delete_data'];
	$query="delete from news_event where id='$delete_data1'";
   if(mysql_query($query))
   {
    echo "<script>window.open('latest_news_event.php?deleted_data=A data has been deleted...!','_self')</script>";
   }
   }
?><!--End of session-->

<!--Image file session start-->
<?php
	if(isset($_GET['delete_file']))
	{
	$delete_file1=$_GET['delete_file'];
	$query="delete from tbl_uploads where id='$delete_file1'";
		if(mysql_query($query))
		{
		echo"<script>window.open('advertiesment.php?deleted_file=A file has been deleted...!','_self')</script>";
		}
	}
?><!--End of session-->

<!--Question paper deletion session start-->
<?php //banking start
	if(isset($_GET['banking']))
	{
		$delete=$_GET['banking'];
		$query="delete from banking where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?banking=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php	//ssc start
	if(isset($_GET['ssc']))
	{
		$delete=$_GET['ssc'];
		$query="delete from ssc where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?banking=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php	// upsc start
	if(isset($_GET['upsc']))
	{
		$delete=$_GET['upsc'];
		$query="delete from upsc where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?upsc=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php //bpsc start
	if(isset($_GET['bpsc']))
	{
		$delete=$_GET['bpsc'];
		$query="delete from bpsc where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?bpsc=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php //IBPS start
	if(isset($_GET['ibps']))
	{
		$delete=$_GET['ibps'];
		$query="delete from ibps where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?ibps=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php //Railway start
	if(isset($_GET['railway']))
	{
		$delete=$_GET['railway'];
		$query="delete from railway where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?railway=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php //Math start
	if(isset($_GET['math']))
	{
		$delete=$_GET['math'];
		$query="delete from math where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?math=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php //G.K start
	if(isset($_GET['gk']))
	{
		$delete=$_GET['gk'];
		$query="delete from gk where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?gk=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php //English start
	if(isset($_GET['english']))
	{
		$delete=$_GET['english'];
		$query="delete from english where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?english=A question has been deleted...!','_self')</script>";
		}
	}
?>
<?php //Reasoing start
	if(isset($_GET['reasoning']))
	{
		$delete=$_GET['reasoning'];
		$query="delete from resoning where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('view_question.php?reasoning=A question has been deleted...!','_self')</script>";
		}
	}
?>
<!--End of session-->
<!--Quiz delete section start-->
<?php
	if(isset($_GET['quiz']))
	{
		$delete=$_GET['quiz'];
		$query="delete from quiz where id='$delete'";
		if(mysql_query($query))
		{
		echo"<script>window.open('quiz.php?message=A question has been deleted...!','_self')</script>";
		}
	}
?><!--End of section-->