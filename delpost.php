<?php
include('connection.php');
include('session.php');
	
$tp=$_REQUEST['tp'];
$queryprofile=mysql_query("select pictures from postmsg where timestamp='$tp' and username='$email'") or die(mysql_error());
			while($row121 = mysql_fetch_row($queryprofile))
			{	
			unlink("uploads/".$row121[0]);
			}
$qry_result = "delete from postmsg where timestamp='$tp' and username='$email'" ;
mysql_query($qry_result)or die(mysql_error());
			

?>