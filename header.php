
 <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="home.php" class="logo"><b>PROFILE GALAXY</b></a>
            <!--logo end-->
            <div class="logo">
			 <center> <?php include('auto.php'); ?> </center>
          <!--  notification start -->
                <ul class="nav navbar-right top-nav" style="float: left;">
      
                    <!--friends request notification start-->
                    <li class="dropdown" style="float: left;">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" onclick="ajaxRequest();">
                            <i class="fa fa-heart"></i>
                            <span class="badge bg-theme">#</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <!--div class="notify-arrow notify-arrow-green"></div-->
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                                 <div class="desc"><div id='request'>Your result will display here</div></div>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!--End of friend requist notification-->
                    <li class="dropdown" style="float: right;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $login_session;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>
                <!--  notification end -->
            <!--/div-->
            </div>
     </header>
        <!-- friend Request function start-->
<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxRequest(){
   var ajaxRequest;  // The variable that makes Ajax possible!
   try{
   
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
   }catch (e){
      
      // Internet Explorer Browsers
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
         
            // Something went wrong
            alert("Your browser broke!");
            return false;
         }
      }
   }
   
   // Create a function that will receive data
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function(){
   
      if(ajaxRequest.readyState == 4){
         var ajaxDisplay = document.getElementById('request');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
      }
   }
   ajaxRequest.open("GET", "request.php" , true);
   ajaxRequest.send(null); 
}
//-->
</script>
<!--End of request-->