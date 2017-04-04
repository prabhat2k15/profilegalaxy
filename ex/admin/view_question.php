
		<!--Message show start-->
			<center style="color:red;"><h1><?php echo @$_GET['banking'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['upsc'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['bpsc'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['ibps'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['railway'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['math'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['gk'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['english'];?></h1></center>
			<center style="color:red;"><h1><?php echo @$_GET['reasoning'];?></h1></center>
		<!--End of message show-->
<center><a href="question_paper.php"><h3>Click here to insert new question...</h3</a></center>
<?php
include_once('session.php');
include_once('connection.php');
		$data=$_SESSION['selected_paper'];
		if($data=="Banking")
		{?>
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
					$query="select * from banking";
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
						<td><a href="del_page.php?banking=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="SSC")
		{
			?>
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
					$query="select * from ssc";
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
						<td><a href="del_page.php?ssc=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="UPSC")
		{
			?>
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
					$query="select * from upsc";
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
						<td><a href="del_page.php?upsc=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="BPSC")
		{
			?>
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
					$query="select * from bpsc";
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
						<td><a href="del_page.php?bpsc=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="IBPS")
		{
			?>
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
					$query="select * from ibps";
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
						<td><a href="del_page.php?bpsc=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="Railway")
		{
			?>
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
					$query="select * from railway";
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
						<td><a href="del_page.php?railway=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="Math")
		{
			?>
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
					$query="select * from math";
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
						<td><a href="del_page.php?math=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}	
		else if($data=="G_K")
		{
			?>
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
					$query="select * from gk";
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
						<td><a href="del_page.php?gk=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="English")
		{
			?>
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
					$query="select * from english";
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
						<td><a href="del_page.php?english=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else if($data=="Resoning")
		{
			?>
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
					$query="select * from resoning";
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
						<td><a href="del_page.php?reasoning=<?php echo $id?>">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		<?php   
		}
		else
		{
		echo"Sorry!couldn't connect to database";
		}
?>