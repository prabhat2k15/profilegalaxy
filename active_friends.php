<html>
<head></head>
<style type="text/css">
	body, html {
  margin: 0;
  overflow: hidden;
  height:100%;
}

@media (min-width: 768px){
  #right {
    position: relative;
    top: 0;
    bottom: 0;
    right: 0;
    overflow-y: scroll;
    width: 100%;
  }

#right {
  height:450px;
  //background-color: #4FC1E9;
  text-align: center;
}
</style>
<body>
<?php
include('connection.php');
include('session.php');
		$friend="select * from friend_request";// where user_id='$userid' and status=1";
	$run=mysql_query($friend);
	?>
	<div id="right">
	<?php
	while($row=mysql_fetch_array($run))
	{
		//echo $row[3];?>
			
				<!-- WHITE PANEL - TOP USER -->
				<div style="height: 50px;border-bottom: 1px solid gray;">
					<p style="float: left;"><img src="assets/img/ui-zac.jpg" class="img-circle" width="40"></p>
						<div class="pull-left info" style="float: left;margin-left: 20px; width: 220px;">
              				<p style="float: left;"><?php echo $row[3];?></p>
              				<a href="#" style="float: right;"><i class="fa fa-circle text-success"></i> Online</a>
            			</div>			
				</div>
		
		<?php
	}
	?>
	</div>
	<?php
?>
</body>
</html>