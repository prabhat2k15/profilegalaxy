<?php
include_once ('connection.php');
include_once('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
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
	margin-top:100px;
}

#body table
{
	margin:0 auto;
	position:relative;
	bottom:50px;
}
table td,th
{
	padding:20px;
	border: solid #9fa8b0 1px;
	border-collapse:collapse;
}
</style>
</head>
<body>
<?php include_once('header.php')?>
<div id="header">
<label>File Uploading...!</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="6">your uploads...<label><a href="advertiesment.php">upload new files...</a></label></th>
    </tr>
    <tr>
	<th>Id</th>
    <th>File Name</th>
    <th>File Type</th>
    <th>File Size(KB)</th>
    <th>View</th>
	<th>Delete</th>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		$id=$row['id'];
		?>
        <tr>
		<td><?php echo $row[0]?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
		<td><a href="del_page.php?delete_file=<?php echo $id?>">Delete</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>