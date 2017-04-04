<!-- 
//Browser Support Code
function workAndEducation(){
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
         var ajaxDisplay = document.getElementById('WandE');
		 document.getElementById("work").value = "";		 
		 document.getElementById("professional_skil").value="";
		 document.getElementById("college").value="";
		 document.getElementById("high_school").value="";
		 document.getElementById("school").value="";
        ajaxDisplay.innerHTML = ajaxRequest.responseText;
		
      }
   }
   
   // Now get the value from user it to
   // server script.
   var postmsg = document.getElementById('work').value;
   var professional=document.getElementById('professional_skil').value;
   var college=document.getElementById('college').value;
   var high_school=document.getElementById('high_school').value;
   var school=document.getElementById('school').value;
   var queryString = "?work=" + work;
   //queryString +=  "&msg=" + msg + "&snd=" + snd;
   //ajaxRequest.open("GET", "ajax-example.php" + queryString, true);
   //ajaxRequest.send(null); 
   //queryString +=  "&work=" + work + "&professional_skil=" + professional_skil+ "&college"+college+ "&high_school" +school+;
   //ajaxRequest.open("GET", "editprofile.php?queryString=" + queryString, true);
   ajaxRequest.open("GET", "editprofile.php?postmsg=" + postmsg, true);
   ajaxRequest.send(null); 
}
//--> 