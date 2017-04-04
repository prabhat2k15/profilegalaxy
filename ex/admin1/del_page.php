<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db('myproject',$con);
   $delete_page = $_GET['del_page'];
   $query="delete from signup where id='$delete_page'";
   if(mysql_query($query))
   {
    echo "<script>window.open('user_registration_record.php?deleted=A data has been deleted...!','_self')</script>";
   }
?>
<?php
	$delete_data=$_GET['delete_data'];
	$query="delete from news_event where id='$delete_data'";
   if(mysql_query($query))
   {
    echo "<script>window.open('latest_news_event.php?deleted_data=A data has been deleted...!','_self')</script>";
   }
?>