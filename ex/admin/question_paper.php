<?php
include_once('session.php');
?>
<html>
<head>
	<title>Question paper</title>
<style type="text/css">
#question_header{
margin-top:30px;
	background:#006CBB;
	width:100%;
	height:50px;
	color:#fff;
	font-size:36px;
	font-family:Verdana, Geneva, sans-serif;
}
</style>
</head>
<body>
		<!--Message start here-->
		<center style="color:red;"><h1><?php echo  @$_GET['data'];?></h1></center>
		<!--End of message-->
<?php include_once('header.php')?>
<div id="question_header"><center>Select your question paper...!</center></div>
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
			<td><input type="submit" value="Done Now" name="btnselect"></td>
		</tr>
	</table>
</form>
</body>
</html>