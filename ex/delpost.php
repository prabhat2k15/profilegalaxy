<?php
include('connection.php');
$tp=$_REQUEST['tp'];
$qry_result = "update postmsg set status=0 where timestamp='$tp'" ;
mysql_query($qry_result)or die(mysql_error());
?>