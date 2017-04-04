
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.watermarkinput.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
document.getElementById('display').style.display = 'none';
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	
	
	}




});
}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search");
   });
</script>
<style type="text/css">
body
{
font-family:"Lucida Sans";

}
*
{
margin:0px
}
#searchbox
{
width:250px;
border:solid 1px #000;
padding:3px;
}
#display
{
width:250px;
display:none;
 margin-right:30px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
}
.display_box
{
padding:17px;
 border-top:solid 1px #dedede; 
 font-size:12px; 
 height:60px;
}

.display_box:hover
{
background:#3b5998;
color:#FFFFFF;
}
#shade
{
background-color:#00CCFF;

}


</style>
<script type="text/javascript">
function showloc(location){
if(location=="loc")
{ document.getElementById('toggle11').style.display = 'block'; }
if(location=="shut")
{ document.getElementById('toggle11').style.display = 'none'; }
}
 
</script>

</head>


<div style=" " align="">
<?php
session_start();
//if(isset($_SESSION['location']))
//echo "Loc=".$_SESSION['location'];
?>

<div id="toggle11" style="display:none; float:right;">
<form action="session.php" method="POST" >
   <select name="location" id="location" onchange="this.form.submit()" class=""style="width:100px" >
<?php

include('dbConfig.php');
  $query = $db->query("SELECT * FROM  `cities1` WHERE  `state_id` >=732 AND  `state_id` <=757  AND status = 1 ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }

?>
</select><!--a href="javascript:showloc('shut');">x</a-->
</form>
<input class="btn btn-primary btn-xs" type="button" Value="x" name="" onclick="showloc('shut')"></input>
</div>
		<div style="float: right; "> 
		<input class="btn btn-primary btn-xs"type="button"  Value="<?php if(isset($_SESSION['location'])) echo $_SESSION['location']; else echo 'Change Location'; ?>" name="location" onclick="showloc('loc')"></input>
		</div>
<input type="text" class="search" id="searchbox" /><br />


</div>




