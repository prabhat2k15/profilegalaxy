<?php
include('connection.php');
$checkbox1=$_POST['tech'];   
$chk="";   
foreach($checkbox1 as $chk1)   
   {   
      $chk .= $chk1.",";   
   }  
 echo $chk;  
?>
