
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
padding:4px; border-top:solid 1px #dedede; font-size:12px; height:30px;
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
</head>


<div style=" " align="">
<input type="text" class="search" id="searchbox" /><br />
<div id="display">
</div>

</div>




