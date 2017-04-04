 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
			  <?php 
			  $queryprofile=mysql_query("Select profilepic from registration where useremail='$email'");
			while($row121 = mysql_fetch_row($queryprofile))
			{	
			?><br><br>
              	  <p class="centered"><a href="profile.php"><img src="uploads/profilepic/<?php echo $row121[0]; } ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $login_session; ?><br><span class="label label-success">online</span></h5>
			<script type="text/javascript" src="js/active_friends.js"></script>	  
              	  <li class="mt">
                    <!--div style="float: left; width: 40%;" class="nav notify-row"-->                                <!-- search form -->
                  <form action="#" method="get" class="sidebar-form">
                    
                  </form>
                  <!-- /.search form --> 
                  </li>	
                  <li class="mt">
                      <a class="active" href="home.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home </span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="about.php" >
                          <i class="fa fa-desktop"></i>
                          <span>About</span>
                      </a>
                      <!--ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul-->
                  </li>

                  <li class="sub-menu">
                      <a href="profile.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Edit Profile</span>
                      </a>
                      <!--ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul-->
                  </li>
                  <li class="sub-menu">
                      <a href="friends.php" >
                          <i class="fa fa-book"></i>
                          <span>Friends</span>
                      </a>
                      <!--ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul-->
                  </li>
                  <li class="sub-menu">
                      <a href="lock_screen.html" >
                          <i class="fa fa-tasks"></i>
                          <span>Lock Screen</span>
                      </a>
                      <!--ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul-->
                  </li>
                  <li class="sub-menu">
                      <a href="panels.php" >
                          <i class="fa fa-th"></i>
                          <span>Category</span>
                      </a>
                  </li>
                   <li class="sub-menu" style="margin-top:-90px;">
                  <form class="form-login" action="index.html" style="background-color: #424A5D;">
                       <a data-toggle="modal" href="login.html#myModal" onclick="active_friends();">
                          <i class=" fa fa-bar-chart-o"></i><span>Chat</span></a>
                  </form>
                </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>