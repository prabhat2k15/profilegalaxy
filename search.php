<?php
include('config.php');
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from registration where fname like '%$q%' or lname like '%$q%' or category like '%$q%' or  subcategory like '%$q%' or state like '%$q%' or city like '%$q%' or address like '%$q%' order by id LIMIT 5");
//$sql_res=mysql_query("select * from registration where fname like '%$q%' or lname like '%$q%' or state like '%$q%' or city like '%$q%' or useremail like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['fname'];
$lname=$row['lname'];
$img=$row['profilepic'];
$country=$row['category'];//0
$subcat=$row['subcategory'];//1
$address=$row['address'];
$city=$row['city'];

$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';

$final_fname = str_ireplace($q, $re_fname, $fname);

$final_lname = str_ireplace($q, $re_lname, $lname);


?>
<div class="display_box" align="left">

<img src="uploads/profilepic/<?php echo $img; ?>" style="width:25px; float:left; margin-right:6px" /><?php echo $final_fname; ?>&nbsp;<?php echo $final_lname; ?><br/>
<span style="font-size:9px; color:#999999"><?php echo $country." in ".$address.",".$city; ?></span></div>



<?php
}//while ends here	

}//if ends here
else
{

}


?>
