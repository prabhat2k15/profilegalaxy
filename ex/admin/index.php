<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: main.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<div id="main">
	<div id="login">
		<h2>Admin Login Form</h2>
			<form action="" method="post">
				<label>AdminName :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password">
				<input name="submit" type="submit" value=" Login ">
				<span><?php echo $error; ?></span>
			</form>
		</div>
</div>
</center>
</body>
</html>