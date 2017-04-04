<script language="javascript" type="text/javascript" src="js/request.js"></script>
<?php
include('connection.php');
include('session.php');
$check_friend="select * from friend_request where friend_id='$userid' and status=0";
				$check=mysql_query($check_friend);
					?>
					<center>
					<table  width="210">
					<?php
					while($row2=mysql_fetch_array($check))
					{
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
                                <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o" type="submit" id="del" value="<?php echo $row2[2] ; ?>" onclick="delfrnd()"></button>
                                              </div>

                      	   			<!--form action="">
                      	   			<!--input type="hidden" value="<?php //echo $row2[2]?>" name="delete_id"-->
                      	   			<!--button class="btn btn-danger btn-xs fa fa-trash-o" name="delete_id"value="<?php //echo $row2[2]?>" onclick="delfrnd();">Delete</button>
                      	   			</form>
                      	   		</td>
                      	   		<td>
                      	   			<form action="">
                      	   			<!--input type="hidden" value="<?php //echo $row2[2]?>" name="conform_id"-->
                      	   			<!--button class="btn btn-success btn-xs fa fa-check" style="float: right;" name="conform" >Conform</button>
                      	   			</form-->
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


 