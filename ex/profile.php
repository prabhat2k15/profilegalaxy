<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS  action="editprofile.php" method="GET"-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    <script type="text/javascript" src="js/add_friends.js"></script>
    <script type="text/javascript" sec="js/editprofile.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="add_friends();">
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
            <?php include('header.php'); ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
     <!--sidebar start-->
       <?php include('sidebar.php'); ?>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                  <div class="row">
                  <div class="col-lg-9 main-chart">
                       <div class="wrapper" style="background-color:#E0E0E0;">
                        <div class="row">
                          <div class="col-md-3 mb">
                            <center><img src="assets/img/ui-zac.jpg" class="img-circle" width="140"><br>
                                                        <?php echo"$login_session";?><br>
                            <button type="button" class="btn btn-round btn-default">Edit profile</button></center>
                          </div>
                          <div class="col-lg-9 main-chart">
                            <h1>Stop waiting for one Day.Today is the Day Bang-Bang...</h1>
                          </div>
                        </div>
                      </div>
                      <!--Work and Education field-->
                      <div class="wrapper" style="background-color:#E0E0E0 ">
                        <h4>Work and Education</h4>
                        <form class="form-horizontal" action="editprofile.php" method="POST">
                            <div class="form-group">
                              <label for="work" class="col-sm-2 control-label">WORK</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="work"placeholder="Add your workplace" name="work">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="professional_skil" class="col-sm-2 control-label">PROFESSIONAL SKIL</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="professional_skil" placeholder="Add your professional skil as software developer" name="professional_skil">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="college" class="col-sm-2 control-label">COLLEGE</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="college" placeholder="Add your college name" name="college">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="high_school" class="col-sm-2 control-label">HIGH SCHOOL</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="high_school" placeholder="Add your high school" name="high_school">
                              </div>
                            </div>
                             <div class="form-group">
                              <label for="school" class="col-sm-2 control-label">SCHOOL</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="school" placeholder="Add your school" name="school">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="workneducation" class="btn btn-default"onclick="workAndEducation()">Update</button>
                              </div>
                            </div>
                          </form>
                          <div id="WandE">your result will be display here...</div>
                      </div><!-- end of work and Educatuon-->
                      <div class="wrapper" style="background-color:#E0E0E0 ">
                        <h4>Place You've Lived</h4>
                        <form class="form-horizontal" action="editprofile.php" method="GET">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Current city</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="currentcity" id="inputEmail3" placeholder="Add your current city">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Hometown</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="hometown" id="inputPassword3" placeholder="Add your hometown">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Other</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="other" id="inputPassword3" placeholder="Add your other place">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="placeUlived" class="btn btn-default">Update</button>
                              </div>
                            </div>
                          </form>
                      </div>
                                            <div class="wrapper" style="background-color:#E0E0E0 ">
                        <h4>Contact and Basic Info</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Mobile Phone</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Add your contact">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Birth Date</label>
                              <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputPassword3">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Language</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Add your language">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Religious</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Add your Religious">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Interested in</label>
                              <div class="col-sm-10">
                                <div class="radio">
                                    <label><input type="radio" name="optradio">Women</label>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label><input type="radio" name="optradio">Men</label>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Done</button>
                              </div>
                            </div>
                          </form>
                      </div>
                      <div class="wrapper" style="background-color:#E0E0E0 ">
                        <h4>Details About You</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">FAVORITE QUOTES</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" rows="3"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Done</button>
                              </div>
                            </div>
                          </form>
                      </div>
                  <div class="row mt">
                  </div><!-- /row --> 
          </div>

                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                       <!-- USERS ONLINE SECTION -->
                        <h3>+ADD FRIENDS</h3>
                        <div class="desc">
                           <div id='ajaxDiv'>Your result will display here</div>
                           <center><a href="#" onclick="add_friends();">See more</a></center>
                        </div>
                      
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
              </div>
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  
  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</body>
</html>