<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$unm=$_POST['unmtxt'];
	$sub=$_POST['subtxt'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	$dt = date('d-m-Y');

	
	$query="insert into feedback_tbl values('','$unm','$sub','$email','$msg','$dt')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("Your feedback is sent.");
			window.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Something sent wrong!!");
			window.location="feedback.php";
		</script>
		<?php
	}
}
?>
<?php include'header.php'; ?>
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img1">
							<div class="container">
								<div class="slider_banner_info_w3ls">
									<h4>FEEDBACK</h4>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
				<section class="contact">
	<div class="container">
	&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="contact-grids" style="margin-left:320px">
			<div class=" col-md-7 contact-form">
			<h4 class="heading">Get In Touch</h4>
				<form action="#" method="post">
						<input type="text" name="unmtxt" placeholder="User Name" required />
						<input type="text" name="subtxt" placeholder="Subject" required />
						<input type="email" name="email" placeholder="email" required />
						<textarea placeholder="Message" name="msg" required ></textarea>
						<div class="submit1">
							<input type="submit" name="submit" value="send">
						</div>
				</form>
			</div>
		</div>
	</div>
</section>
		
			
<?php include'footer.php'; ?>