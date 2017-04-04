<?php
include_once('session.php');
include_once('connection.php');
if(isset($_POST['quizsubmit']))
{
	$question=$_POST['q_area'];
	$A=$_POST['a'];
	$B=$_POST['b'];
	$C=$_POST['c'];
	$D=$_POST['d'];
	$correct=$_POST['correct'];
	if($question=="" && $correct=="")
	{
	 echo "<script>
				alert('please full-fill the requirement...')
				window.location.href='quiz.php';
			</script>";
	}
	else
	{
		$que="insert into quiz (question,a,b,c,d,correct) values('$question','$A','$B','$C','$D','$correct')";
        if(mysql_query($que))
        {
            echo "<script>window.open('quiz.php?data=Data has been recived sucessfully...!','_self')</script>";
        }
	}
}
?>
<?php
include_once('connection.php');
	if(isset($_GET['view_quiz']))
	{?>
	<center><a href="quiz.php"><h3>Click here to insert new Quiz...</h3></a></center>
				<table width="100%" border="1">
					<tr>
						<th width="50">Id</th>
						<th width="400">Question</th>
						<th>Option A</th>
						<th>Option B</th>
						<th>Option C</th>
						<th>Option D</th>
						<th>Correct</th>
						<th width="60">Delete</th>
					</tr>
		<?php
		$query="select * from quiz";
		$run=mysql_query($query);
		while($row=mysql_fetch_array($run))
					{
						$id=$row['id'];
						$question=$row[1];
						$option_A=$row[2];
						$option_B=$row[3];
						$option_C=$row[4];
						$option_D=$row[5];
						$correct=$row[6];
                ?>
				
					<tr>
						<td><?php echo $id;?></td>
						<td><?php echo $question;?></td>
						<td><?php echo $option_A;?></td>
						<td><?php echo $option_B;?></td>
						<td><?php echo $option_C;?></td>
						<td><?php echo $option_D;?></td>
						<td><?php echo $correct;?></td>
						<td><a href="del_page.php?quiz=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}?>
			</table>
	<?php
	}
?>