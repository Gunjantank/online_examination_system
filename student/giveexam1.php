<?php 
include "header.php";
$due=$_REQUEST['due'];
$total=$due*60;
$exp=$total*1000;
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
							$answer="e";
							if(isset($_POST[$iddd]))
							{
								$answer=$_POST[$iddd];
							}
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
									alert("Your Time's Up!! Click Ok to see your result.");
									window.location="result.php";
								</script>
						<?php
						}
	}
?>
					<body onload="demo()">
					<div class="services" id="service" >
					<center>Remaining time <strong id="minutes">-</strong> Minutes and <strong id="seconds">-</strong> Seconds.</center>
					 <center><h3 class="tittle two" style="margin-top:30px;">Exam Details</h3></center>
						<div class="serve-grids">
						<center>
						<fieldset style="border:1px, border-color:black">
						<form action="#" method="post">
						<table cellpadding="10px" style="padding:10" border=1 >
						
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
								<td><b style="font-size:20px; color:black;"><?php echo $count.") ".$r['question'];?></b></br></td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['q_id'];?>" value="A"/>
								<b style="font-size:15px; color:black;">A. <?php echo $r['option_a'];?></b>
								</td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['q_id'];?>" value="B"/>
								<b style="font-size:15px; color:black;">B. <?php echo $r['option_b'];?></b></td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['q_id'];?>" value="C"/>
								<b style="font-size:15px; color:black;">C. <?php echo $r['option_c'];?></b>
								</td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['q_id'];?>" value="D"/>
								<b style="font-size:15px; color:black;">D. <?php echo $r['option_d'];?></b></td>
								
							</tr>
							
							<?php 
							$count++;
						}
						?>
						
						</table>
						<br>
						<input type="submit" id="btnok" name="btnok" value="Finish Exam"/></br></br>
 						</form>
						</fieldset>
						
						
						<div class="clearfix"></div>
						
					</div>
				</div>
				</body>
			<!--//end-services-->
	<!--start-teachers-->
				<!--contact-->
<?php include "footer.php";?>

<script>
function demo()
{
	var time = <?php echo(json_encode($total))?>,
    start = Date.now(),
    mins = document.getElementById('minutes'),
    secs = document.getElementById('seconds'),
    timer;

function countdown() {
  var timeleft = Math.max(0, time - (Date.now() - start) / 1000),
      m = Math.floor(timeleft / 60),
      s = Math.floor(timeleft % 60);
  
  mins.firstChild.nodeValue = m;
  secs.firstChild.nodeValue = s;
  
  if( timeleft == 0) clearInterval(timer);
}

timer = setInterval(countdown, 200);
	setTimeout('updateClock()',<?php echo(json_encode($exp))?>);
}

function updateClock(){
	document.getElementById("btnok").click();

}

</script>