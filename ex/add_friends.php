<?php
include('connection.php');
include('session.php');
		// To get last id from database
		$query1="select * from registration";
		$run=mysql_query($query1);
		while($row=mysql_fetch_array($run))
		{
			$last_id=$row[0];
		}// End 

				//To check available friend
				$check_friend="select * from friend_request where user_id='$userid'";
				$check=mysql_query($check_friend);
				$available_friend=array();
				$counter=0;
					while($row2=mysql_fetch_array($check))
					{
						$available_friend[$counter]=$row2['friend_id'];
						$counter++;
					}
				//End 

					//To get random data form database
					$rand=rand(1,$last_id);
					$arr=array(array());
					for($i=0;$i<10;$i++)
					{
					$query2="select * from registration where id='$rand'";
					$run2=mysql_query($query2);
					echo"<br>";
					while($row1=mysql_fetch_array($run2))
					{
								$arr[$i][0]=$row1[0];
								$arr[$i][1]=$row1[1];
								$arr[$i][2]=$row1[2];
							
					}
					$rand++;
					}//End
?>
	<center>
	<table style="margin-top: -200px; width:255px;">
		<?php
				$count=count($available_friend)."<br>";
						$temp=array();
						$result=array(array());
					foreach ($arr as $key => $value) {
						$temp[$key]=$value[0];
					}

				$arintersect=array_diff($temp,$available_friend);
				echo "<br>";
				$tempresult=(array_unique($arintersect));
				//print_r($tempresult);
				foreach ($tempresult as $key => $value) {
					$query3="select * from registration where id='$value'";//selecting data from registration
					$run=mysql_query($query3);
					while ($row=mysql_fetch_array($run)) {
						//echo $row[1].$row[2]."<br>";
						if($userid==$row[0])
						{
							continue;
						}
						else
						{
							$fname=$row[1]." ".$row[2];
							// Redirect to friend_request.php
						?>
						<tr id="row"><td><div style="float: left; margin-left: 10px;">
                      		<img class="img-circle" src="assets/img/ui-zac.jpg" width="35px" height="35px" align="">
                      		</div>
                      		<div style="margin-left: 60px; line-height: 30px;"><?php echo $fname;?></div>
                      		</td>
                      	</tr>
                      	<tr id="row"><td><a class="btn btn-success btn-xs fa fa-check" href="friend_request.php?userid=<?php echo $userid?>&username=<?php echo $login_session?>&friend_id=<?php echo $row[0]?>&fname=<?php echo $fname?>" style="float: right; margin-right: 30px; color: white;">Add Friend</a></td></tr>
                      	<tr id="blank"><td></td></tr>
						<?php
					}
					}
				}
				foreach ($arr as $values ) {
				
			}
		?>
	</table>
	</center>
	<style type="text/css">
	#blank{
		border-bottom: 1px solid gray;
		margin-top: 4px;
	}
	</style>
							<!--tr id="row"><td colspan="2"><div class="thumb" style="margin-top: 6px;">
                      			<img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                      				<?php //echo $row[1]." ".$row[2]?>
                      			</div></td>
                      	   </tr>

							<tr><td colspan="2"><a href="friend_request.php?userid=<?php //echo $userid?>&username=<?php //echo $login_session?>&friend_id=<?php //echo $row[0]?>&fname=<?php //echo $fname?>">Add Friend</a></td></tr-->

