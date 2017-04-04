<?php
include('session.php');
include('connection.php');
$username=$login_session;
if(isset($_REQUEST['postmsg']) && $_REQUEST['postmsg']!="")
{

$postmsg=$_REQUEST['postmsg'];

//line 1 fixes the line breaks - line 2 the slashes
$postmsg = nl2br($postmsg);
$postmsg = stripslashes($postmsg);
	$query2="INSERT INTO postmsg (username, message, timestamp)
VALUES ('$username', '$postmsg', now())";
mysql_query($query2) or die(mysql_error());

echo "Inserted";

}

if(isset($_REQUEST['log']))
{
	if($_REQUEST['log']=="KJHSKAd34jh234jkj2h34jh3")
	{
	unset($_SESSION['username']);
	header('Location:index.php');
	}
	
}
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
 $fileName = $username.rand().".".$fileExt;
// START PHP Image Upload Error Handling --------------------------------------------------
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
	header( "refresh:5;url=home.php" );
    exit();
} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
	header( "refresh:5;url=home.php" );
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo "ERROR: Your image was not .gif, .jpg, or .png.";
	 header( "refresh:5;url=home.php" );
     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
	 header( "refresh:5;url=home.php" );
     exit();
} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    echo "ERROR: An error occured while processing the file. Try again.";
	header( "refresh:5;url=home.php" );
    exit();
}
// END PHP Image Upload Error Handling ----------------------------------------------------
// Place it into your "uploads" folder mow using the move_uploaded_file() function
$moveResult = move_uploaded_file($fileTmpLoc, "uploads/$fileName");
// Check to make sure the move result is true before continuing
if ($moveResult != true) {
    echo "ERROR: File not uploaded. Try again.";
	header( "refresh:5;url=home.php" );
    exit();
}
else
{
$picquery="Insert into pictures values('$username','$fileName',now())";
	mysql_query($picquery)or die(mysql_error());
	
	$picquery2="Insert into postmsg values('$username','Pictures','$fileName',now(),1)";
	mysql_query($picquery2)or die(mysql_error());
// Display things to the page so you can see what is happening for testing purposes
echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
echo "The file extension is <strong>$fileExt</strong><br /><br />";
echo "The Error Message output for this upload is: $fileErrorMsg";
header( "refresh:5;url=home.php" );
}
}//if isset file upload
}//if isset all
else
{
header('location: home.php');
/*
if(isset($_SESSION['username']))
{
header('location: index.php');
}
else
{
header('location: login.php');
}*/
}//
?>
