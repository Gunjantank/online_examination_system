<?php 
include "header.php";
if(!isset($_SESSION['student']))
{
	?>
	<script>
	alert("You have to Login First");
	window.location="login.php";
	</script>
		
	<?php
}
	if(isset($_POST['btnok']))
	{
		$id=$_REQUEST['id'];

		include "connection.php";
						
		$q="select * from question_master_tbl where e_id='$id'";
						$c=mysqli_query($con,$q);
						$result=0;
						while($r=mysqli_fetch_array($c))
						{
							$iddd=$r['q_id'];
							$answer=$_POST[$iddd];
							if($r['ans']==$answer)
							{
								$result=$result+1;
							}
						}
						
						$un=$_SESSION['sid'];
						$dt=date("d-m-Y");
						$qq="Insert into result_master_tbl values('','$id','$un','$result','$dt')";
						$c=mysqli_query($con,$qq);
						if($c)
						{
							?>
								<script>
									alert("Exam Completed.. You Got result As..<?php echo $result;?>  Marks");
									window.location="index.php";
								</script>
						<?php
						}
	}
?>

					<div class="services" id="service">
					 <center><h3 class="tittle two" style="margin-top:30px;">Exam Details</h3></center>
						<div class="serve-grids">
						<center>
						<fieldset style="border:1px, border-color:black">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<form action="#" method="post">
						<table cellpadding="10px" border=1 >
						
					<?php
						$id=$_REQUEST['id'];
						include "connection.php";
						$q="select * from question_master_tbl where e_id='$id'";
						$c=mysqli_query($con,$q);
						$count=1;
						while($r=mysqli_fetch_array($c))
						{
							?>
							<tr>
								<td><b style="font-size:20px; color:black;"><?php echo $count.") ".$r['question'];?></b></td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['q_id'];?>" value="A"/>
								<b style="font-size:15px; color:black;">A. <?php echo $r['option_a'];?></b>
								<input type="radio" name="<?php echo $r['q_id'];?>" value="B"/>
								<b style="font-size:15px; color:black;">B. <?php echo $r['option_b'];?></b></td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['q_id'];?>" value="C"/>
								<b style="font-size:15px; color:black;">C. <?php echo $r['option_c'];?></b>
								
								<input type="radio" name="<?php echo $r['q_id'];?>" value="D"/>
								<b style="font-size:15px; color:black;">D. <?php echo $r['option_d'];?></b></td>
								
							</tr>
							
							<?php 
							$count++;
						}
						?>
						
						</table>
						<br>
						<input type="submit" name="btnok" value="Finish Exam"/></br></br>
 						</form>
						</div>
						</fieldset>
						
						
						<div class="clearfix"></div>
						
					</div>
				</div>
			<!--//end-services-->
	<!--start-teachers-->
				<!--contact-->
<?php include "footer.php";?>