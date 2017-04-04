<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#input{
			height: 30px;
			width: 200px;
			border-radius: 5px;
		}
		strong{
			font-size: 20px;
		}
		#btnsubmit{
			height: 30px;
			width: 100px;
			background-color: #006CBB;
			border-radius: 5px;
			border-style: none;
			color: white;
			cursor: pointer;
			font-size: 16px;
			font-family: Cambria;
		}
		#btnsubmit:hover{
			background-color: #FFB10E;
		}
		</style>
</head>
<body>
<table width="100%" border="1">
	<tr>
		<td height="50" colspan="2">
			<center>
			<form style="margin-top:10px" method="post" action="index.php">
				<label><strong>Administrator name:</strong><input type="text" name="admin_name" placeholder="Administrator name" id="input"></label>
				<label><strong>Password:</strong><input type="password" name="admin_pass" placeholder="Password" id="input"></label>
				<label><input type="submit" value="Log In" id="btnsubmit" name="btnsubmit"></label>
			</form>
			</center>
		</td>
	</tr>
</table>
		<!-- Admin php code start -->
		<?php 
			session_start();
			if(isset($_POST['btnsubmit']))
    		{
         		$_SESSION['name']=$_POST['admin_name'];
         		$_SESSION['pass']=$_POST['admin_pass'];
         		if($_SESSION['name']==""||$_SESSION['pass']=="")
         		{
         			echo "<script>alert('Please enter your name & password!')</script>";
         			exit();
         		}
         		if($_SESSION['name']=="admin" && $_SESSION['pass']=="password")
         		{
         		
         		include_once('page_info.php');
         		}
         		else{
         			echo "<script>alert('Access denied!')</script>";
         		}
         } ?>
         <!-- end of admin code-->
</body>
</html>