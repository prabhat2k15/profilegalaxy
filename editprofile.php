<?php
include('connection.php');
include('session.php');

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
	$query = "UPDATE profile SET work='$work',pskill='$professional',college='$college',highschool='$high_school',school='$school' WHERE useremail='$_SESSION[login_user]'";
	mysql_query($query) or die(mysql_error());
		header( "refresh:0;url=profile.php" );
		}
		
}//--------------------------work n education ends here

//#######################################################################

if(isset($_REQUEST['placesUlived']))
{
$currentcity = $_REQUEST['currentcity'];
$hometown = $_REQUEST['hometown'];
$other = $_REQUEST['other'];
echo $currentcity;	
// Escape User Input to help prevent SQL Injection
$currentcity = mysql_real_escape_string($currentcity);
$hometown = mysql_real_escape_string($hometown);
$other = mysql_real_escape_string($other);

		$queryprofile="select * from profile where useremail='$_SESSION[login_user]'";
		$run=mysql_query($queryprofile);
		$nrow=mysql_num_rows($run);
		if($nrow>=1)
		{
	$query = "UPDATE profile SET currentcity='$currentcity',hometown='$hometown',other='$other' WHERE useremail='$_SESSION[login_user]'";
	mysql_query($query) or die(mysql_error());
		header( "refresh:0;url=profile.php" );
		}
		
}//--------------------------placesUlived ends here

if(isset($_REQUEST['uploaded_filesubmit']))
{
// Access the $_FILES global variable for this specific file being uploaded
// and create local PHP variables from the $_FILES array of information
$fileName = $_FILES["uploaded_file"]["name"]; // The file name
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["uploaded_file"]["type"]; // The type of file it is
$fileSize = $_FILES["uploaded_file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["uploaded_file"]["error"]; // 0 for false... and 1 for true
$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); 
$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
 $fileName = $email.rand().".".$fileExt;
// START PHP Image Upload Error Handling --------------------------------------------------
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
	header( "refresh:5;url=profile.php" );
    exit();
} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
	header( "refresh:5;url=profile.php" );
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo "ERROR: Your image was not .gif, .jpg, or .png.";
	 header( "refresh:5;url=profile.php" );
     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
	 header( "refresh:5;url=profile.php" );
     exit();
} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    echo "ERROR: An error occured while processing the file. Try again.";
	header( "refresh:5;url=profile.php" );
    exit();
}
// END PHP Image Upload Error Handling ----------------------------------------------------
// Place it into your "uploads" folder mow using the move_uploaded_file() function
$moveResult = move_uploaded_file($fileTmpLoc, "uploads/profilepic/$fileName");
// Check to make sure the move result is true before continuing
if ($moveResult != true) {
    echo "ERROR: File not uploaded. Try again.";
	header( "refresh:5;url=profile.php" );
    exit();
}
else
{
$queryprofile=mysql_query("Select profilepic from registration where useremail='$email'");
			while($row121 = mysql_fetch_row($queryprofile))
			{	
			    unlink("uploads/profilepic/".$row121[0]);
			}
$picquery="update registration set profilepic='$fileName' where useremail='$email'";
	mysql_query($picquery)or die(mysql_error());
	
	$picquery2="Insert into postmsg values('$username','Pictures','$fileName',now(),1)";
	mysql_query($picquery2)or die(mysql_error());
// Display things to the page so you can see what is happening for testing purposes
echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
echo "The file extension is <strong>$fileExt</strong><br /><br />";
echo "The Error Message output for this upload is: $fileErrorMsg";
header( "refresh:0;url=profile.php" );
}
}//if isset file upload

/*if(!isset($_REQUEST['placesUlived']) && !isset($_REQUEST['workneducation'])) 
{
header('location:home.php');
 }*/






















/*
//####################
		else
		{
		//UPDATE profile SET useremail=[value-1],work=[value-2],pskill=[value-3],college=[value-4],highschool=[value-5],school=[value-6],currentcity=[value-7],hometown=[value-8],other=[value-9] WHERE 1
		
$query = "INSERT INTO profile(useremail,work,pskill,college,highschool,school) VALUES ('$_SESSION[login_user]','$work', '$professional', '$college','$high_school','$school')";
mysql_query($query) or die(mysql_error());
header( "refresh:0;url=profile.php" );
		}//else
		//##############
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