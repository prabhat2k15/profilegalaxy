$(document).ready(function(){ 

    var auto= $('#tweets'), refreshed_content;	
		refreshed_content = setInterval(function(){
		auto.load("wallmessage.php").fadeIn("slow");}, //fadeOut('slow').
		3000); 										
		console.log(refreshed_content);										 
		return false; 
});