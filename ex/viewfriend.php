<?php
include('connection.php');
include('session.php');
	$friend="select * from friend_request where user_id='$userid' and status=1";
	$run=mysql_query($friend);
	echo "<h3>Friends</h3>";
	while($row=mysql_fetch_array($run))
	{
		//echo $row[3];?>
			<div class="col-md-4 mb">
				<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5 style="color:green;"><?php echo $row[3];?></h5>
								</div>
								<p><img src="assets/img/ui-zac.jpg" class="img-circle" width="140"></p>
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