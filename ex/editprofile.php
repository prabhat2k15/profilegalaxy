<?php
include('connection.php');
include('session.php');
/*/ Retrieve data from Query String
$postmsg=$_REQUEST['work'];

//line 1 fixes the line breaks - line 2 the slashes
$postmsg = nl2br($postmsg);
$postmsg = stripslashes($postmsg);
echo $postmsg;*/
if(isset($_REQUEST['workneducation']))
{
$work = $_REQUEST['work'];
$professional = $_REQUEST['professional_skil'];
$college = $_REQUEST['college'];
$high_school=$_REQUEST['high_school'];
$school=$_REQUEST['school'];
echo $work;
echo $professional;
echo $college;
echo $high_school;
echo $school;
	
// Escape User Input to help prevent SQL Injection
$work = mysql_real_escape_string($work);
$professional = mysql_real_escape_string($professional);
$college = mysql_real_escape_string($college);
$high_school= mysql_real_escape_string($high_school);
$school= mysql_real_escape_string($school);
		$queryprofile="select * from profile where useremail='$_SESSION[login_user]'";
		$run=mysql_query($queryprofile);
		$nrow=mysql_num_rows($run);
		if($nrow>=1)
		{
		echo "Already Entered";
		header( "refresh:5;url=profile.php" );
		}
		else
		{
$query = "INSERT INTO profile(useremail,work,pskill,college,highschool,school) VALUES ('$_SESSION[login_user]','$work', '$professional', '$college','$high_school','$school')";
mysql_query($query) or die(mysql_error());
header( "refresh:5;url=profile.php" );
		}//else
}//--------------------------work n education ends here

if(isset($_REQUEST['placesUlived']))
{
$currentcity = $_REQUEST['currentcity'];
$hometown = $_REQUEST['hometown'];
$other = $_REQUEST['other'];
	
// Escape User Input to help prevent SQL Injection
$currentcity = mysql_real_escape_string($currentcity);
$hometown = mysql_real_escape_string($hometown);
$other = mysql_real_escape_string($other);

	
//build query
$query = "INSERT INTO profile(currentcity,hometown,other) VALUES ('$_SESSION[login_user]','$work', '$professional', '$college','$high_school','$school')";
mysql_query($query) or die(mysql_error());
header( "refresh:10;url=profile.php" );
}
if(isset($_REQUEST['worlneducation']))
{
$work = $_REQUEST['work'];
$professional = $_REQUEST['professional_skil'];
$college = $_REQUEST['college'];
$high_school=$_REQUEST['high_school'];
$school=$_REQUEST['school'];
echo $work;
echo $professional;
echo $college;
echo $high_school;
echo $school;
	
// Escape User Input to help prevent SQL Injection
$work = mysql_real_escape_string($work);
$professional = mysql_real_escape_string($professional);
$college = mysql_real_escape_string($college);
$high_school= mysql_real_escape_string($high_school);
$school= mysql_real_escape_string($school);
	
//build query
$query = "INSERT INTO profile VALUES ('$_SESSION[login_user]','$work', '$professional', '$college','$high_school','$school')";
mysql_query($query) or die(mysql_error());
header( "refresh:0;url=profile.php" );
}




/*Execute query
$qry_result = mysql_query("Select * from message") or die(mysql_error());
if(true)
{
//Build Result String
$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>id</th>";
$display_string .= "<th>Message</th>";
$display_string .= "<th>Sender</th>";
//$display_string .= "<th>WPM</th>";
$display_string .= "</tr>";

// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
   $display_string .= "<tr>";
   $display_string .= "<td>$row[id]</td>";
   //$display_string .= "<td>$row[msg]</td>";
   $display_string .= "<td>$row[message]</td>";
   $display_string .= "<td>$row[sender]</td>";
   $display_string .= "</tr>";
}

echo "Query: " . $query . "<br />";
$display_string .= "</table>";

echo $display_string;
}
else
{
$query2="INSERT INTO message (id, message, sender)
VALUES ($id, '$msg', '$snd')";
mysql_query($query2)or die(mysql_error());
echo "Inserted";
}*/
?>