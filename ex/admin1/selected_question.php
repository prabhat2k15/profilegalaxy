<?php
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['question'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<form method="post" action="selected_question.php">
		<table width="1000" align="center">
			<tr align="center">
				<td colspan="2" align="center" bgcolor="yellow"><?php echo "<h1>You Select $name</h1>";?></td>
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
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
		</form>
</body>
</html>