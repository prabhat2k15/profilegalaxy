<!-- 
//Browser Support Code
function workAndEducation(){
   var ajaxRequest1;  // The variable that makes Ajax possible!
   try{
   
      // Opera 8.0+, Firefox, Safari
      ajaxRequest1 = new XMLHttpRequest();
   }catch (e){
      
      // Internet Explorer Browsers
      try{
         ajaxRequest1 = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         
         try{
            ajaxRequest1 = new ActiveXObject("Microsoft.XMLHTTP");
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
   ajaxRequest1.onreadystatechange = function(){
   
      if(ajaxRequest1.readyState == 4){
         var ajaxDisplay = document.getElementById('WandE');
		 document.getElementById("work").value = "";		 
		 document.getElementById("professional_skil").value="";
		 document.getElementById("college").value="";
		 document.getElementById("high_school").value="";
		 document.getElementById("school").value="";
        ajaxDisplay.innerHTML = ajaxRequest1.responseText;
		
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
   postmsg +="&professional_skil=" + professional+ "&college"+college+ "&high_school" +high_school+"&school="+school;
   //ajaxRequest.open("GET", "editprofile.php?queryString=" + queryString, true);
   ajaxRequest1.open("GET", "editprofile.php?work=" + postmsg, true);
   ajaxRequest1.send(null); 
}
//--> 