<?php
include_once('session.php');
?>
<html>
<head>
	<title></title>
	<style type="text/css">
	#page_info{
		height: 40px;
		width:1200px;
		border: 1px solid red;
	}
	#page_info ul li{
			float: left;
			list-style: none;
			margin-left: 20px;
		}
		#page_info ul li a{
			text-decoration: none;
			cursor: pointer;
			font-size: 20px;
			font-family: Cambria;
		}
		#page_info ul li a:hover{
			text-decoration: underline;
			color: maroon;
		}
		
</style>
</head>
<body>
	<center>
	<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <div id='page_info'>
    <ul>
	 <li><a href='logout.php'style="color:green;">Logout</a></li>
     <li><a href='u_reg_record.php ?user_r_record=User_r_record'>User registration record</a></li>
     <li><a href='latest_news_event.php?latest_news=Latest_news'>Latest news & events</a></li>
     <li><a href='advertiesment.php?advertiesment=Advertiesment'>Advertiesment</a></li>
     <li><a href='question_paper.php?question_paper=Question_paper'>Question paper</a></li>
	 <li><a href='quiz.php?'>Quiz</a></li>
	 <li><a href='comment.php'>Comment</a></li>
    </ul>
    </div>
	</center>
</body>
</html>