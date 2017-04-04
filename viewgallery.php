<?php
include('connection.php');
include('session.php');
?>
	  <!--main content start-->
   
          	<h3><i class="fa fa-angle-right"></i> Gallery</h3>
          	<hr>
				
			
			<div class="row mt">	
<?php $pic="select * from pictures where username='$login_session' or username='$email' order by timestamp desc";//or friend_id='$email'
	$run=mysql_query($pic);
	while($rowpic=mysql_fetch_array($run))
	{
	?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="uploads/<?php echo $rowpic[1]; ?>"><img class="img-responsive" src="uploads/<?php echo $rowpic[1]; ?>" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
		<?php } ?>	
				</div><!-- /row -->
	
		<!--/wrapper -->
    <!-- /MAIN CONTENT -->

      <!--main content end-->
	 