<html>
<?php
include('connection.php');
include('session.php');
if (isset($_POST['delete'])) {
  $delete_id= $_POST['delete_id'];
  $result=mysql_query("update friend_request set status=2 where user_id='$delete_id' and friend_id='$email'");
  echo "<script>alert('Request deleted!')</script>";
  header('location:home.php');
}
if (isset($_POST['conform'])) {
  $conform_id=$_POST['conform_id'];
  echo $conform_id;
  $result=mysql_query("update friend_request set status=1 where user_id='$conform_id' and friend_id='$email'");
  echo "<script>alert('Request accepted')</script>";
  header('location:home.php');
}
?>
<body>
<script language="javascript" type="text/javascript" src="js/request.js"></script>
<?php
//include('connection.php');
//include('session.php');
$check_friend="select * from friend_request where friend_id='$email' and status=0";
				$check=mysql_query($check_friend);
					?>
					<center>
					<table  width="210">
					<?php
					//$countfriend=0;
					while($row2=mysql_fetch_array($check))
					{	//$countfriend++;
						//echo $countfriend;
						//echo $row2[3]."<br>";
						?>
                      	   <tr id="row"><td colspan="2"><div class="thumb" style="margin-top: 6px;">
                      			<img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                      				<?php echo $row2[1];?>
                      			</div></td>
                      	   </tr>
                      	   <tr id="row">
                      	   		<td>
                              <div id="deldiv"></div>
                       	   			<form action="request.php" method="post">
                      	   			<input type="hidden" value="<?php echo $row2['user_id']?>" name="delete_id">
                      	   			<input type="submit" class="btn btn-danger btn-xs fa fa-trash-o" name="delete" value="Delete">
                      	   		  </form>
                      	   		</td>
                      	   		<td>
                                <form action="request.php" method="post">
                      	   			<input type="hidden" value="<?php echo $row2['user_id']?>" name="conform_id">
                      	   			<input type="submit"class="btn btn-success btn-xs fa fa-check" style="float: right;" name="conform" value="Confirm">
                      	   			</form>
                      	   		</td>
                      	   	</tr>
                      	   <tr id="blank"><td style="margin-top: 4px;" colspan="2"></td></tr>
						<?php
					}
					?>
					</table>
					</center>
					<?php
?>
<style type="text/css">
	#blank{
		border-bottom: 1px solid gray;
	}
</style>
</body>
</html>