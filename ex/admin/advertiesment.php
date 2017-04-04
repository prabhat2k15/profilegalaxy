<html>
<head>
	<title>Advertiesment</title>
	<style type="text/css">
body
{
	background:#fff;
	font-family:Georgia, "Times New Roman", Times, serif;
	text-align:center;
}
#header
{
	margin-top:30px;
	background:#006CBB;
	width:100%;
	height:50px;
	color:#fff;
	font-size:36px;
	font-family:Verdana, Geneva, sans-serif;
}
#body
{
	margin-top:50px;
}

	</style>
</head>
<body>
<?php include_once('header.php')?>
		<!--Message show start-->
			<center style="color:red;"><h1><?php echo @$_GET['deleted_file'];?></h1></center>
		<!--End of message show-->
<div id="header">
<label>File Uploading...!</label>
</div>
<div id="body">
	<form action="file_upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
	<a href="view.php">click here to view file.</a>
	<?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
</body>
</html>