<?php
include('config.php');
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from test_user_data where fname like '%$q%' or lname like '%$q%' order by uid LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['fname'];
$lname=$row['lname'];
$img=$row['img'];
$country=$row['country'];

$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';

$final_fname = str_ireplace($q, $re_fname, $fname);

$final_lname = str_ireplace($q, $re_lname, $lname);


?>
<div class="display_box" align="left">

<img src="user_img/<?php echo $img; ?>" style="width:25px; float:left; margin-right:6px" /><?php echo $final_fname; ?>&nbsp;<?php echo $final_lname; ?><br/>
<span style="font-size:9px; color:#999999"><?php echo $country; ?></span></div>



<?php
}

}
else
{

}


?>
