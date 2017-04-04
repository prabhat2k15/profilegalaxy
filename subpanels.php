<!DOCTYPE html>
<?php
include('connection.php');
//session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Profile Galaxy - Panels</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

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
     <?php if(isset($_SESSION['login_user']))
{	
	include('header.php');
}
else {
?>
	 <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>PROFILE GALAXY</b></a>
            <!--logo end-->
		<center> <?php include('auto.php'); ?>
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
               
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="signin.php">Login</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
 <?php }//else ends here ?>         
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
 <?php  if(isset($_SESSION['email']))
{
	include('sidebar.php');
}
else {
?>
   <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
                      <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"></h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a  href="signin.php" >
                          <i class="fa fa-desktop"></i>
                          <span>Sign In</span>
                      </a>
                      <!--ul class="sub">
                          <li><a  href="general.html"></a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li class="active"><a  href="panels.html">Panels</a></li>
                      </ul-->
                  </li>

                 <li class="sub-menu">
                      <a class="active"href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Category</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Restaurant</a></li>
                          <li><a  href="">Movies</a></li>
                          <li><a  href="">Medical</a></li>
                          <li><a  href="">Travels</a></li>
                          <li><a  href="">Taxi</a></li>
                          <li><a  href="">Daily Needs</a></li>
                          <li><a  href=""></a>Category</li>
                          <li><a  href=""></a>Jobs</li>
                          <li><a  href=""></a>Repair</li>
                          <li><a  href=""></a>Courier</li>
                          <li><a  href=""></a>Pet Care</li>
                          <li><a  href=""></a>Auto Care</li>
                          <li><a  href=""></a>Caterers</li>
                          <li><a  href=""></a>Transporters</li>
                          <li><a  href=""></a>Training Institutes</li>
                          <li><a  href=""></a>Real Estates</li>
                          <li><a  href=""></a>Schools</li>
                          <li><a  href=""></a>Category</li>
                      </ul>
                  </li>
                  <!--li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li-->
                  <!--li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li-->
                  <!--li class="sub-menu">
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
   <?php }//else ends here ?>       
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
		  <center><div id="display"></div>
          	<h3><i class="fa fa-angle-right"></i> Discover Our Panels</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          
			<! -- 2ND ROW OF PANELS -->
					<div class="row">
			<?php 
			$cat=$_REQUEST['category'];
			/*$selectcat="Select country_id from countries where country_name='$cat'";
			$catid=mysql_query($selectcat);
			while($catidselect=mysql_fetch_row($catid))
			{
			$cat=$catidselect[0];
			}
			*/
			$panelquery="select * from registration where category='$cat' and approved=1";
			$pq=mysql_query($panelquery);
			while($rowpq=mysql_fetch_row($pq))
			{ // hr@zeelearn.com --mountlitera.com
			?>			
						<! -- TODO PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
	<a href="catprofile.php?em=<?php echo $rowpq['3']; ?>">
							<div class="content-panel pn">
								<div id="profile-01" style="background:url(uploads/profilepic/<?php echo $rowpq[8] ?>) no-repeat center top;">
									<h6 style="background:white;color:black;"><?php echo $rowpq[1].' '.$rowpq[2];?></h6>
									<h6 style="background:white;color:black;"><?php echo $rowpq[5]; ?> </h6>
								</div>
								<div class="profile-01 centered">
									<p><?php
									//echo $rowpq[7];
					$scat=explode(",",$rowpq[7]);
					
						foreach($scat as $sc)
					{
						//echo $sc;
						$selectscat="Select state_name from states where state_id=$sc";
						if($selectscatq=mysql_query($selectscat))// or die(mysql_error());
						while($rowscatq=mysql_fetch_row($selectscatq))
						{
							echo $rowscatq[0].',';
						}
					}
									?></p>
								</div>
								<div class="centered">
									<h6><i class="fa fa-envelope"></i><br/><?php echo $rowpq[3].' +91-'.$rowpq[9]; ?></h6>
								</div>
							</div><! --/content-panel -->
						</div><! --/col-md-4 -->
		</a>
					<?php
					
					}
					?>					
					</div><! --/END 2ND ROW OF PANELS -->
			</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <?php include('footer.php'); ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
