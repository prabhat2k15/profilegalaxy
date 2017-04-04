<!DOCTYPE html>
<html>
<head>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("myproject",$con);
	if (isset($POST['cmtbtn'])) {
		echo $comment=$_POST['comment'];
	}
?>
	<title></title>
	<style type="text/css">
#section{
	margin: 0 auto;
	padding: 0px;
	height: 700px;
	width: 1345px;
	border-bottom: 3px solid #003E3E;
	box-shadow: 0px 4px 4px grey;
}
#content{
	float: left;
	height: 650px;
	width: 800px;
	margin-left: 100px;
	margin-top: 6px;
	background-color: white;
	border:1px solid grey;
	border-radius: 5px;
	box-shadow: 4px 4px 4px grey;
}
#comment{
	float: left;
	margin-left: 10px;
	margin-top: 6px;
	height: 650px;
	width: 335px;
	background-color: white;
	border: 1px solid grey;
	border-radius: 5px;
	box-shadow: 4px 4px 4px grey;
}
#form_table{
	width: 700px;
	margin: 0 auto;
	margin-top: 40px;
}
#table_left{
	width: 100px;
	font-size: 20px;
	font-family: Cambria;
}
#input_text{
	height: 30px;
	width: 300px;
	border-radius: 5px;
	font-size: 16px;
	font-family: Cambria;
	color: #013648;
}
#message{
	height: 100px;
	width: 600px;
	font-size: 16px;
	font-family: Cambria;
	color: #013648;
}
#button{
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
#button:hover{
	background-color: #FFB10E;
}
#comment_box{
	height: 500px;
	width:  300px;
	margin-left: 17px;
	margin-top: 6px;
	border-style: none;
	font-size: 16px;
	font-family: Cambria;
	color: #013648;
}
</style>
</head>
<body>
<?php include_once("top_head_page.php");?>
<section id="section">
	<div id="content">
		<form>
			<table id="form_table" cellspacing="10px">
			<tr>
				<td id="table_left">Name:</td>
				<td id="table_right"><input type="text" id="input_text" placeholder="User name"></td>
			</tr>
			<tr>
				<td id="table_left">E-mail:</td>
				<td><input type="email" id="input_text" placeholder="Your e-mail"></td>
			</tr>
			<tr>
				<td id="table_left">Message:</td>
				<td><textarea id="message" placeholder="Type to text"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
				<input type="reset" value="Clear" id="button">
				<input type="submit" value="Send" id="button">
				</td>
			</tr>
			</table>
		</form>
		<h3 style="margin-top:100px; text-decoration:underline; margin-left:50px;">Address</h3>
		<table style="margin-left:50px;">
			<tr><td><strong>Country:</strong></td><td>India</td></tr>
			<tr><td><strong>City:</strong></td><td>Patna</td></tr>
			<tr><td><strong>Address:</strong></td><td>Patna 800004</td></tr>
			<tr><td><strong>E-mail:</strong></td><td>kumarnitesh251@gmail.com</td></tr>
		</table>
		<h1 style="color:#006CBB; margin-left:50px;">Call Us Now : 8651259187,8507590035</h1>
	</div>
	<div id="comment">
		<h2 style="text-align:center;color:#00394A;">Your comments</h2>
		<iframe id="comment_box">
			
		</iframe>
		<form method="post" action="contact_us.php">
		<label><textarea style="height:60px; width:300px; margin-left:17px; border-radius:5px;" name="comment"></textarea></label>
		<label style="margin-left:115px;"><input type="submit" value="Comment" id="button" name="cmtbtn"></label>
		</form>
	</div>
</section>
<footer><?php include_once("footer_page.php");?></footer>
</body>
</html>