<?php
include('connection.php');
include('session.php');
		$friend="select * from friend_request where user_id='$email' and status=1";//or friend_id='$email'
	$run=mysql_query($friend);
	echo "<h3>Friends</h3>";
	while($row1=mysql_fetch_array($run))
	{
		?>
			<div class="col-md-4 mb">
				<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5 style="color:green;"><?php echo $row1[3];?></h5>
								</div>
				<?php $queryprofile=mysql_query("Select profilepic from registration where useremail='$row1[2]'");
			while($row121 = mysql_fetch_row($queryprofile))
			{	 ?>
								<p><img src="uploads/profilepic/<?php echo $row121[0]; } ?>" alt="No Image" class="img-circle" width="140"></p>
								<div class="row">
									<div class="col-md-6">
										<button class="btn btn-danger btn-xs fa fa-trash-o" name="delete_id"value="<?php //echo $row2[2]?>">&nbsp;&nbsp;Block</button>
									</div>
									<div class="col-md-6">
										<button class="btn btn-success btn-xs fa fa-check" name="conform" >&nbsp;&nbsp;Message</button>
									</div>
								</div>
							</div>
			</div><!-- /col-md-4 -->
			
		<?php
	}//while ends here
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	$friend="select * from friend_request where user_id='$email' and status=0";
	$run=mysql_query($friend);
	echo "<h3>Friend Request Sent</h3>";
	while($row12=mysql_fetch_array($run))
	{
		//echo $row[3];?>
			<div class="col-md-4 mb">
				<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5 style="color:green;"><?php echo $row12[3];?></h5>
								</div>
		<?php $queryprofile=mysql_query("Select profilepic from registration where useremail='$row12[2]'");
			while($row121 = mysql_fetch_row($queryprofile))
			{	 ?>
								<p><img src="uploads/profilepic/<?php echo $row121[0]; } ?>" alt="No Image" class="img-circle" width="140"></p>
								<div class="row">
									<div class="col-md-6">
										<button class="btn btn-danger btn-xs fa fa-trash-o" name="delete_id"value="<?php //echo $row2[2]?>">&nbsp;&nbsp;Block</button>
									</div>
									<div class="col-md-6">
										<button class="btn btn-success btn-xs fa fa-check" name="conform" >&nbsp;&nbsp;Message</button>
									</div>
								</div>
							</div>
			</div><!-- /col-md-4 -->
		<?php
	}
?>