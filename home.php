<?php include('session.php');
include('connection.php');
?>
<?php //include('search/auto.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Profile Galaxy">
    <meta name="keyword" content="Profile Galaxy,My Profile, Movies, Home Construction ">

    <title>Profile Galaxy - Home</title>

    <!-- Bootstrap core CSS -->
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
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" src="js/autorefresh.js"></script>

<script language="javascript" type="text/javascript" src="js/post.js"></script>
<script type="text/javascript" src="js/add_friends.js"></script>

<script type="text/javascript">
function showDiv(toggle){
document.getElementById(toggle).style.display = 'block';
}
 
</script>

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
                    <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content" style="width: 400px;">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Chat Box </h4>
                          </div>
                          <div class="modal-body">
                              <div id='active_friends'></div>    
                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <!--button class="btn btn-theme" type="button">Submit</button-->
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
<center>	<div id="display"> </div></center>
              <div class="row">
                  <div class="col-lg-9 main-chart">
				
						<form name="form1" action="" onload="wallpost()">
							<textarea id="postmsg" name="postmsg" class="wrapper" rows="5" cols="60"></textarea>          
							<input class="btn btn-primary"type="button" onclick="ajaxFunction()" value="Post"/>
						<div style="float: right; "> 
					<input class="btn btn-success"type="button" Value="Add Pictures" name="answer" onclick="showDiv('toggle')"></input>
						</div>
						</form>	
						<div class="wrapper"id="toggle" style="display:none">	
				
							<form action="check.php" method="POST" enctype="multipart/form-data">
						<input style="float:left;width: 225px" class="btn btn-primary" type="file" name="uploaded_file" id="uploaded_file">
							<input style="float:right;width: 225px" class="btn btn-primary" type="submit" name="uploaded_filesubmit" value="Upload Image" >
						</form>
						</div>
					
				<br><br><br>
				<hr>
 <!-- Showing Notification --> 
		<div id="tweets"> </div> 
  <!-- Showing Notification ends here -->          
		 
		 
                    
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						
                                        
                      <!-- First Action -->
                      

                       <!-- USERS ONLINE SECTION -->
                        <h3>+ADD FRIENDS</h3>
                        <div class="desc">
                           <div id='ajaxDiv'>Your result will display here</div>
                           <center><a href="#" onclick="add_friends();">See more</a></center>
                        </div>
                      
                        <!-- CALENDAR-->
                      <!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <?php include('footer.php'); ?>
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
	
	<!--script type="text/javascript">
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
	</script-->
	
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