<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include_once('page_info.php');?>
<?php
 	if(isset($_GET['question_paper']))
 	{
 	?>
<form method="post" action="selected_question.php">
	<table width="350" align="center">
		<tr>
			<td><strong>Select Question Paper:</strong></td>
			<td>
			<select name="question">
				<option value="Banking" selected>Banking</option>
				<option value="SSC">SSC</option>
				<option value="UPSC" >UPSC</option>
				<option value="BPSC">BPSC</option>	
				<option value="IBPS" >IBPS</option>
				<option value="Railway">Railway</option>
				<option value="Math">Math</option>
				<option value="G_K">G.K</option>
				<option value="English">English</option>
				<option value="Resoning">Resoning</option>
			</select>
			</td>
			<td><input type="submit" value="Done Now" name="btnsubmit"></td>
		</tr>
	</table>
</form>
	<?php } ?>
	
</body>
</html>