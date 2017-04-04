<?php
include_once('session.php');
?>
<html>
<head>
	<title>Quiz of the day</title>
	<style type="text/css">
	#q_area{
		height: 100px;
		width: 800px;
		border-radius: 5px;
		font-size: 16px;
		color: red;
	}
	#option_area{
		height: 30px;
		width: 400px;
		border-radius: 5px;
		font-size: 16px;
	}
	</style>
</head>
<body>
<center style="color:red;"><h1><?php echo @$_GET['data'];?></h1></center>
<center style="color:red;"><h1><?php echo @$_GET['message'];?></h1></center>
<?php include_once('header.php');?>
	<form method="post" action="view_quiz.php">
		<table width="1000" align="center" style="margin-top:30px;">
			<tr align="center">
				<td colspan="2" align="center" bgcolor="#006CBB"><h1 style='color:white;'>Select your Quiz"</h1></td>
			</tr>
			<tr align="center">
				<td colspan="2"><textarea placeholder="Enter your question ..." name="q_area" id="q_area"></textarea></td>
			</tr>
			<tr align="center">
				<td><input type="text" placeholder="Option A" name="a" id="option_area"></td>
				<td><input type="text" placeholder="Option B" name="b" id="option_area"></td>
			</tr>
			<tr align="center">
				<td><input type="text" placeholder="Option C" name="c" id="option_area"></td>
				<td><input type="text" placeholder="Option D" name="d" id="option_area"></td>
			</tr>
			<tr align="center">
				<td><input type="text" Placeholder="Correct Option" name="correct" id="option_area"></td>
				<td><input type="submit" name="quizsubmit"></td>
			</tr>
		</table>
		</form>
		<center><a href="view_quiz.php?view_quiz"><h3>Click here to view Quiz...</h3></a></center>
</body>
</html>