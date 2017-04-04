<?php
include_once('session.php');
?>
<html>
<head>
	<title>User registration record</title>
</head>
<body>
<?php include_once('header.php')?>
<?php include_once('connection.php')?>
<center style="color:red"><h3><?php echo @$_GET['deleted'];?></h3></center>
<!-- user registration records start -->
 				<table width="1000" border="1" align="center" style="margin-top:30px;">
 						<tr>
 							<td colspan="5" bgcolor="#006CBB"style="color:white;"><h1 align="center">User Registration records!</h1></td>
 						</tr>
 						<tr>
 							<th>Id</th>
 							<th>User name</th>
 							<th>E-email</th>
 							<th>Password</th>
 							<th>Delete</th>
 						</tr>
 						<?php
 							$query = "select * from signup";
							$run=mysql_query($query);
							while($row=mysql_fetch_array($run))
							{
								$id=$row['id'];
								$u_name=$row[1];
								$u_email=$row[2];
								$u_pass=$row[3];
								?>
 						<tr align="center">
 							<td><?php echo $id?></td>
 							<td><?php echo $u_name?></td>
 							<td><?php echo $u_email?></td>
 							<td><?php echo $u_pass?></td>
 							<td><a href='del_page.php?del_page=<?php echo $id;?>'>Delete</a></td>
 						</tr>
 						<?php }?>
 					</table>
 			<!-- end of user registration-->
	
</body>
</html>