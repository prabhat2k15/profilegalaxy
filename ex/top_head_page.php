<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/styles.css">
   	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   	<script src="style/script.js"></script>
	<title></title>
<style type="text/css">
	*{
	margin: 0px;
	padding: 0px;
}
	header{
	margin: 0 auto;
	height: auto;
	width: 1345px;
	border-bottom: 3px solid #003E3E;
	box-shadow: 0px 4px 4px grey;
}
.nav1{
	height: 40px;
	width: 1345px;
	background-image: url(images/login.png);
		background-color: #013648;
	border-bottom: 3px solid #FFFF80;
	box-shadow: 0px 4px 4px grey;
}
.nav3{
	height: 350px;
	width: 1345px;
	background-image: url(images/f1.jpg);
}
/* --------------------- --------- login sector -----------------------*/
#left{
	float: left;
	height: 40px;
	width: 835px;
}
#center{
	float: left;
	height: 40px;
	width: 200px;
}
#right{
	float: left;
	height: 40px;
	width: 310px;
}
#center ul li{
	float: left;
	display: block;
	margin-left: 20px;
	height: 40px;
	line-height: 40px;
}
#center ul li a{
	text-transform: none;
	text-decoration: none;
	color: #FFFF80;
	font-size: 18px;
}
#right ul{
	margin-left: 80px;
}
#right ul li{
	float: left;
	display: block;
	height: 30px;
	width: 40px;
	margin-top: 10px;
	list-style-type: none;
}
#right ul li a{
	display: block;
}
/*---------------------------------- end of login sector---------------------*/
#top_nav3{
		height: 50px;
		width: 1345px;
	}
	#midle_nav3{
		height: 50px;
		width: 1345px;
	}
	#bottom_nav3{
		height: 250px;
		width: 1345px;
	}
	#bottom_left{
	float: left;
	height: 50px;
	width: 100px;
	}
	#cssmenu{
	float: left;
	height: 50px;
	width: 945px;
	}
	#bottm_right{
	float: left;
	height: 50px;
	width: 300px;
	}
</style>
<script>
function LoginForm(){
	var feature="top=200,left=500,width=350,height=300,locatonbar=yes,menubar=yes";
	var open=window.open("login.php","window",feature);
}
function SignupForm(){
	var feature="top=100,left=500,width=350,height=550,locatonbar=yes,menubar=yes";
	var open=window.open("registration.php","window",feature);
}
</script>
</head>
<body>
<header>
	<div class="nav1">
		<div id="left"></div>
		<div id="center">
			<ul>
				<li><a href="#" onclick="SignupForm()">Sign up</a></li>
				<li><a href="#" onclick="LoginForm()">Log In</a></li>
			</ul>
		</div>
		<div id="right">
		<ul>
			<li><a href="#"><img src="images/icon1.jpg"></a></li>
			<li><a href="#"><img src="images/icon2.jpg"></a></li>
			<li><a href="#"><img src="images/icon3.jpg"></a></li>
		</ul>
		</div>
	</div>
	<div class="nav3">
		<div id="nav3_top">
			<div id="top_nav3"></div>
			<div id="midle_nav3">
				<div id="bottom_left"></div>
				<div id='cssmenu'><!-- start of menu -->
					<ul>
   						<li><a href='#'>Home</a></li>
   						<li><a href='about_us.php'>About</a></li>
   						<li class='active'><a href='#'>Join Test</a>
      						<ul>
         						<li><a href='#'>GENERAL EXAM</a>
            						<ul>
               							<li><a href='#'>BANKING</a></li>
              							<li><a href='#'>SSC</a></li>
              							<li><a href="#">UPSC</a></li>
              							<li><a href="#">BPSC</a></li>
              							<li><a href="#">IBPS</a></li>
              							<li><a href="#">RAILWAY</a></li>
            						</ul>
         						</li>
         						<li><a href='#'>OTHERS</a>
            						<ul>
               							<li><a href='#'>MATH</a></li>
               							<li><a href='#'>G.K</a></li>
               							<li><a href="#">ENGLISH</a></li>
               							<li><a href="#">RESONING</a></li>
            						</ul>
         						</li>
      						</ul>
   						</li>
   						<li><a href="#">PREVOIUS QUESTION</a>
   							<ul>
               					<li><a href='#'>SSC-LDC</a></li>
              					<li><a href='#'>SSC-UDC</a></li>
              					<li><a href="#">UPSC</a></li>
              					<li><a href="#">BPSC</a></li>
              					<li><a href="#">RAILWAY</a></li>
            				</ul>
   						</li>
   						<li><a href="#">LATEST NEWS</a></li>
   						<li><a href="#">QUIES</a></li>
   						<li><a href="contact_us.php">Contact Us</a></li>
					</ul>
				</div><!-- end of menu-->
			<div id="bottom_right"></div>
			</div>
			<div id="bottom_nav3"></div>
		</div>
</header>
</body>
</html>