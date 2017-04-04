<script type="text/javascript" src="js/deletepost.js"></script>
<?php
include('session.php');
include('connection.php');
	$qry_result = mysql_query("Select * from postmsg where username='$login_session' order by timestamp desc") or die(mysql_error());
if(true)
{
while($row = mysql_fetch_array($qry_result))
{
if($row['status']==1)
{
?>
<section class="task-panel tasks-widget">
<div class="showback">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Sortable Style</h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                    
                                     
                                      <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-checkbox">
										  <p class="right"><a href="profile.html"><h3><img src="uploads/Image1.jpg" class="img-circle" width="60"></a>  
										  <?php echo $row['username']; ?>
										   <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs fa fa-check"></button>
                                                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                                  <button class="btn btn-danger btn-xs fa fa-trash-o" type="submit" id="del" value="<?php echo $row['timestamp']; ?>" onclick="delpost()"></button>
                                              </div>
										  <h3>
										  </p>
                                          </div>
                                          <div class="task-title">
		 <!--Photo display  -->
		<?php  if($row['pictures'])
				{ ?>
		<a class="fancybox" href="uploads/<?php echo $row['pictures']; ?>">
		<img class="img-responsive" src="uploads/<?php echo $row['pictures']; ?>" alt="Image"></a>
		          <?php
				//echo "rowwwwwwwwww";
					}   ?>              
		<!--Photo display  -->
										
                  <span class="task-title-sp"><?php echo $row['message']; ?></span>
			      <p align="right"><span class="badge bg-important"><?php echo $row['timestamp']; ?></span></p>
                 </li>
				   </ul>
                </div>
              <div class=" add-task-row">
              <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>
             <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
              </div>
               </div>
						  
</div>			
		  
</section>
                 
<?php
}//if status is 1
}//while
}//if
?>
