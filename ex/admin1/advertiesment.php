
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include_once('page_info.php');?>
	<?php
	if(isset($_GET['advertiesment']))
	{
		?>
		<form action="" method="post" enctype="multipart/form-data">
		<p><input type="file" name="myfile" /></p>
		<p><input type="submit" value="Upload" name="submit"/></p>	
		</form>
		<?php 
	}
	?>
	<?php
if(isset($_POST['submit']))
{
	$f_name = $_FILES['myfile']['name'];
	$f_tmp = $_FILES['myfile']['tmp_name'];
	$store = "uploads/".$f_name; 
	$f_size = $_FILES['myfile']['size'];
	$f_extension = explode('.',$f_name);
	$f_extension = strtolower(end($f_extension));
	if($f_extension=='jpg' || $f_extension=='png'|| $f_extension=='gif')
	{
		if($f_size>=1000000)
		{
			echo "Max file should be 1 MB";
		}
		else
		{
			if(move_uploaded_file($f_tmp, $store))
			{
				echo "Uploaded<br>";
				echo $f_name."<br>";
				echo $f_tmp."<br>";
				echo $f_size."<br>";
				//echo "<img src='uploads/$f_name'";
			}
		}
	}
	else
	{
		echo "you can upload jpg, png,or gif image only";
	}
}
?>
</body>
</html>