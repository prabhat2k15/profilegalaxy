<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['adminsess']))
{
echo "<script> window.open('admin.php','_self'); </script>";
}
else {
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Profile Galaxy - Admin Home</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="left" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Profile Galaxy</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="adminlogout.php?lg=ljhjkhbLHL768979879UHIUHIshfg">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>
              	  	
                  <li class="mt">
                      <a href="adminhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="adminhome.php?au=KjIONU8798uyB9879v8HJGUY976vidfsd" >
                          <i class="fa fa-desktop"></i>
                          <span>Approved Users</span>
                      </a>
                      <!--ul class="sub">
                          <li><a  href="adminhome.php?st=JKJKHBkja&868vbvr78946vb98">Approved</a></li>
                          <li><a  href="buttons.html">Not Approved</a></li>
                          <li><a  href="panels.html">All</a></li>
                      </ul-->
                  </li>

                  <li class="sub-menu">
                      <a href="adminhome.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Blocked Users</span>
                      </a>
                      <!--ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul-->
                  </li>
                  <li class="sub-menu">
                      <a  href="adminhome.php?ou=hjhJHjklh7i98798UI3ui5yi3ybiub" >
                          <i class="fa fa-book"></i>
                          <span>Online Users</span>
                      </a>
                      <!--ul class="sub">
                          <li class="active"><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul-->
                  </li>
                  <!--li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
   <?php include('connection.php'); ?>   
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Admin Panel</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p></p>
	<?php if(isset($_REQUEST['au']) && $_REQUEST['au']="KjIONU8798uyB9879v8HJGUY976vidfsd")
	{
	?>	
				 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Approved Users</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email ID</th>
                                  <th><i class="fa fa-bookmark"></i>Category</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  
				<?php 
	$query="Select * from registration where approved=1 order by id desc";
				$run=mysql_query($query);
				while($row=mysql_fetch_array($run))
				{
				
				
				?>			  
					 <tr>
                                  <td><a href="basic_table.html#"><?php echo $row['fname']." ".$row['lname']; ?></a></td>
                                  <td class="hidden-phone"><?php echo $row['useremail']; ?></td>
                                  <td><?php echo $row['category']; ?></td>
                                  <td><span class="label label-info label-mini" style="background:green;"> Approved</span></td>
                                  <td>
                    <form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php echo $row['useremail'];?>"><button class="btn btn-success btn-xs" type="submit" name="checkuser"><i class="fa fa-check"></i></button></form>
                    <!--form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php //echo $row['useremail'];?>"><button class="btn btn-primary btn-xs" type="submit" name="edituser"><i class="fa fa-pencil"></i></button></form-->
                    <form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php echo $row['useremail'];?>"><button class="btn btn-danger btn-xs" type="submit" name="blockuser"><i class="fa fa-trash-o"></i></button></form>
				              </td>
                              </tr>
           <?php } ?>
		   
		   </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		   
		   <?php
				
				}//isset au
		if(isset($_REQUEST['ou']) && $_REQUEST['ou']="hjhJHjklh7i98798UI3ui5yi3ybiub")
	{
	?>	
				 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Online Users</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email ID</th>
                                  <th><i class="fa fa-bookmark"></i>Category</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  
				<?php 
	$query="Select * from registration where approved=1 and status=1 order by id desc";
				$run=mysql_query($query);
				while($row=mysql_fetch_array($run))
				{
				
				
				?>			  
					 <tr>
                                  <td><a href="basic_table.html#"><?php echo $row['fname']." ".$row['lname']; ?></a></td>
                                  <td class="hidden-phone"><?php echo $row['useremail']; ?></td>
                                  <td><?php echo $row['category']; ?></td>
                                  <td><span class="label label-info label-mini" style=""> Online </span></td>
                                  <td>
                     <form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php echo $row['useremail'];?>"><button class="btn btn-success btn-xs" type="submit" name="checkuser"><i class="fa fa-check"></i></button></form>
                    <!--form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php //echo $row['useremail'];?>"><button class="btn btn-primary btn-xs" type="submit" name="edituser"><i class="fa fa-pencil"></i></button></form-->
                    <form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php echo $row['useremail'];?>"><button class="btn btn-danger btn-xs" type="submit" name="blockuser"><i class="fa fa-trash-o"></i></button></form>
				          </td>
                              </tr>
           <?php } ?>
		   
		   </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		   
		   <?php
				
				}//isset ou
		
			if(!isset($_REQUEST['au']) && !isset($_REQUEST['ou']))
			{
			?>
		 <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Blocked Users</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email</th>
                                  <th><i class="fa fa-bookmark"></i> Category</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>

                             
	<?php 
				$query="Select * from registration where approved=0 order by id desc";
				$run=mysql_query($query);
				while($row=mysql_fetch_array($run))
				{
				
				
				?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo $row['fname']." ".$row['lname']; ?></a></td>
                                  <td class="hidden-phone"><?php echo $row['useremail']; ?></td>
                                  <td><?php echo $row['category']; ?></td>
                                  <td><span class="label label-info label-mini" style="background:red;">Blocked</span></td>
                                  <td>
                    <form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php echo $row['useremail'];?>"><button class="btn btn-success btn-xs" type="submit" name="checkuser"><i class="fa fa-check"></i></button></form>
                    <!--form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php //echo $row['useremail'];?>"><button class="btn btn-primary btn-xs" type="submit" name="edituser"><i class="fa fa-pencil"></i></button></form-->
                    <form action="setstatus.php" method="post"><input type="hidden" name="userstatus"value="<?php echo $row['useremail'];?>"><button class="btn btn-danger btn-xs" type="submit" name="blockuser"><i class="fa fa-trash-o"></i></button></form>
				               </td>
                              </tr>
                         
                            
            <?php }   ?>               
                         
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->	
			
			
		<?php	
			}
			?>                 		  
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
    <?php include('footer.php'); ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } //else ends here ?>