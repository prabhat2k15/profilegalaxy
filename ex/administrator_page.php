<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#table{
		height: 600px;
		width: 100%;
	}
	#left{
		height: 600px;
		width: 300px;
	}
	</style>
</head>
<body>
<table id="table" border="1">
<tr>
	<td id="left">
		<form>
			<fieldset>
				<legend>Select Test Name</legend>
				<p><label><input type="radio" name=SSC>SSC</label></p>
				<p><label><input type="radio" name=UPSC>UPSC</label></p>
				<p><label><input type="radio" name=BPSC>BPSC</label></p>
				<p><label><input type="radio" name=UDC>UDC</label></p>
				<p><label><input type="radio" name=LDC>LDC</label></p>				
			</fieldset>
			<fieldset>
				<legend>Other Test Name</legend>
				<p><label><input type="radio" name=math>Math</label></p>
				<p><label><input type="radio" name=english>English</label></p>
				<p><label><input type="radio" name= GK>Genegal knowledge</label></p>
			</fieldset>
		</form>
	</td>
	<td id="right">
		<form>
			<fieldset>
				<p><label>Question No.<input type="number"></label></p>
				<p><label>Question:<input></label></p>
				<p><label>Option A:<input></label></p>
				<p><label>Option B:<input></label></p>
				<p><label>Option C:<input></label></p>
				<p><label>Option D:<input></label></p>
			</fieldset>
		</form>
	</td>
</tr>
</table>
</body>
</html>