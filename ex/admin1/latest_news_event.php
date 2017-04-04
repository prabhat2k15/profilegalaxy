<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#insert{
		border:5px solid green;
		width: 1000px;
		margin: auto;

		}
	</style>
</head>
<body>
<?php include_once('page_info.php');?>
<center style="color:red;"><h1><?php echo @$_GET['error'];?></h1></center>
<center style="color:red;"><h1><?php echo  @$_GET['data'];?></h1></center>
<center style="color:red;"><h1><?php echo @$_GET['delete_data']?></h1></center>

 			<!-- Latest news & Events start -->
 			<?php
 				if(isset($_GET['latest_news']))
 				{
 					?>
 					<table width="1000" align="center">
 						<tr>
 							<td align="center" bgcolor="yellow" colspan="2"><h1>Latest news & Events </h1></td>
 						</tr>
 						<form method="post" action="latest_news_event.php">
 						<tr>
 							<td><strong>News date:</strong></td>
 							<td><input type="date" name="date"></td>
 						</tr>
 						<tr>
 							<td><strong>News headlines:</strong></td>
 							<td><input type="text" id="input" style="width:500px" name="headlines"></td>
 						</tr>
 						<tr>
 							<td><strong>Link:</strong></td>
 							<td><input type="text" id="input" style="width:500px" name="link"></td>
 						</tr>
 						<tr>
 							<td><strong>News:</strong></td>
 							<td><textarea id="input" style="height:150px; width:700px;" name="news"></textarea></td>
 						</tr>
 						<tr align="center">
 							<td colspan="2"><input type="submit" value="Submit" id="btnsubmit" name="btnsubmit"></td>
 						</tr>
 						</form>
 					</table>
 			<?php		
 				}
 			?>
 			<!-- End of news-->
 	<!-- Insert data into news & event start -->
 	<?php
	$con=mysql_connect("localhost","root","")or die(mysql_error());
	$db=mysql_select_db('myproject', $con)or die(mysql_error());
    if(isset($_POST['btnsubmit']))
    {
         $date1=$_POST['date'];
         $headlines1=$_POST['headlines'];
         $link1=$_POST['link'];
         $news1=$_POST['news'];
        if($date1=="" && $headlines1=="")
        {
                echo "<script>window.open('latest_news_event.php?error=Plese enter your data...!','_self')</script>";
                exit();
        }
        else
        {
            $que="insert into news_event (date,headlines,link,news) values('$date1','$headlines1','$link1','$news1')";
            if(mysql_query($que))
            {
                echo "<script>window.open('latest_news_event.php?data=Data has been recived sucessfully...!','_self')</script>";
            }
        }
    }
?><!-- End of insert data into news & event-->

	<!-- View data from news & event database start --> 
    <table width="1200" border="1" align="center">
        <tr><th colspan="6" bgcolor="yellow"><h1>News & Events</h1></th></tr>
        <tr>
            <th width="75">Id</th>
            <th width="100">Date</th>
            <th width="300">Headlines</th>
            <th width="200">Link</th>
            <th>News</th>
            <th width="75">Delete</th>
        </tr>
        <?php
            $query="select * from news_event";
            $run=mysql_query($query);
            while($row=mysql_fetch_array($run))
            {
                $id=$row['id'];
                $news_date=$row[1];
                $news_headlines=$row[2];
                $news_link=$row[3];
                $news=$row[4];
                ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $news_date?></td>
                    <td><?php echo $news_headlines?></td>
                    <td><?php echo $news_link?></td>
                    <td><?php echo $news?></td>
                    <td><a href='del_page.php?delete_data=<?php echo $id;?>'>Delete</a></td>
                </tr>
            <?php } ?>
    </table><!-- End of statement-->
</body>
</html>