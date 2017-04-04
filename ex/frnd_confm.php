<!--?php
include('connection.php');
if (isset($_POST['delete'])) {
	$delete_id= $_POST['delete_id'];
	$result=mysql_query("update friend_request set status=2 where friend_id='$delete_id'");
	header('location:home.php');
}
if (isset($_POST['conform'])) {
	$conform_id=$_POST['conform_id'];
	$result=mysql_query("update friend_request set status=1 where friend_id='$conform_id'");
	header('location:profile.php');
}
?-->

<?php
include('session.php');
include('connection.php');
$tp=$_REQUEST['tp'];
echo $tp;
$qry_result = "update friend_request set status=2 where friend_id='$tp'" ;
mysql_query($qry_result)or die(mysql_error());
?>