<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Profile Galaxy">
    <meta name="keyword" content="Profile Galaxy, Registration , User , Register">

    <title>Profile Galaxy - Registration</title>

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
	<style>
    .multiselect {
        width: 200px;
    }
    .selectBox {
        position: relative;
    }
    .selectBox select {
        width: 100%;
        font-weight: bold;
    }
    .overSelect {
        position: absolute;
        left: 0; right: 0; top: 0; bottom: 0;
    }
    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes label {
        display: block;
    }
    #checkboxes label:hover {
        background-color: yellow;
    }
</style>
<script>
    var expanded = false;
    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>
<!--###################################################-->
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
<!--###################################################-->
<script type="text/javascript">
//document.getElementById('country1').value="India";
$(document).ready(function(){
    $('#country1').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData1.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state1').html(html);
                    $('#city1').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state1').html('<option value="">Select country first</option>');
            $('#city1').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state1').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData1.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city1').html(html);
                }
            }); 
        }else{
            $('#city1').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<!--###################################################-->

  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="signup.php" method="post">
		        <h2 class="form-login-heading">Sign up now</h2>
		        <div class="login-wrap">
				        <center style="color:red;"><?php echo @$_GET['error'];?></center>
		            <input type="text" class="form-control" required="required" placeholder="First name" autofocus name="firstname">
		            <br>
		            <input type="text" class="form-control" required="required" placeholder="Last name" name="lastname" id="lname"><br>
		            <input type="email" class="form-control" required="required" placeholder="E-mail" name="email"><br>
		            <input type="password" class="form-control" required="required" placeholder="New Password" name="pass"><br>
		            <input type="password" class="form-control" required="required" placeholder="Confirm Password" name="conformpass"><br>
					<input type="text" class="form-control" required="required" maxlength="10" placeholder="Mobile Number" name="mobile" id="mobile"><br>
					 <input type="text" class="form-control" required="required" placeholder="Address,locality... " name="address" id="address"><br>

	<!------------------for State & Country------------------------------------------------------->
	<div class="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM countries1 WHERE status = 1 ORDER BY country_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select name="country1" id="country1" class="btn btn-default dropdown-toggle"style="width: 290px;" required>
        <option value="">Select Country</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){
                echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
    
    <select name="state1" id="state1" class="btn btn-default dropdown-toggle"style="width: 290px;">
        <option value="">Select country first</option>
    </select>
    
    <select name="city1" id="city1" class="btn btn-default dropdown-toggle"style="width: 290px;">
        <option value="">Select state first</option>
    </select>
    </div>
	
	
	<!------------------------------------------------------------------------->
	
	 <label class="checkbox">
		                <span class="pull-left">
		                    <a>Birth Day</a></span>
		            </label>
		            <input type="date" class="form-control" name="date"><br>
		          GENDER :  Male   <input type="radio" required  name="rdate">
		                    Female <input type="radio" required  name="rdate"><br>
					
      			
	<!----------------For Category and Subcategory----------------------------------------------------->
	 <div class="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select required class="btn btn-default dropdown-toggle"style="width: 290px;"name="country" id="country">
        <option value="">Select Category</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
			//$cn=$row['country_name'];
                echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
            }
        }else{
            echo '<option value="">Category Not Available</option>';
        }
        ?>
    </select>
    
    <select multiple class="btn btn-default dropdown-toggle"style="width: 290px;" name="mult[]" id="state">
        <option value="">Select Category First</option>
    </select>
 
        
    <!--select class="btn btn-default dropdown-toggle"style="width: 290px;" name="city" id="city">
        <option value="">Select state first</option>
	</select>
	</div>

    </div>
	<!--------------------------------------------------------------------->
	
	
		            <button class="btn btn-theme btn-block"  type="submit" name="registration"><i class="fa fa-lock"></i> SIGN UP</button>
		 		
		            <hr>
		 <div class="registration"> 
		               Already have an account ?
		                <a class="" href="index.php">
		                    Sign In
		                </a>
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
