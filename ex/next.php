<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Next Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b><a href="next.php"><h1>This is my next page</h1></a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>