<!DOCTYPE html>
<html>
<head>
	<title>User registration record</title>
</head>
<body>
<?php include_once('page_info.php'); ?>
<center style="color:red"><h1><?php echo @$_GET['deleted'];?></h1></center>
	<!-- user registration records start -->
         	<?php
         		$con = mysql_connect("localhost","root","");
				$db = mysql_select_db('myproject',$con);
 				if(isset($_GET['user_r_record']))
 				{ ?>
 					<table width="1000" border="1" align="center">
 						<tr>
 							<td colspan="5" bgcolor="yellow"><h1 align="center">User Registration records!</h1></td>
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
 			<?php	} ?><!-- end of user registration-->
</body>
</html>