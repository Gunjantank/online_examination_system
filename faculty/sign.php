<?php
 session_start();
 
 if(isset($_SESSION['faculty']))
 {
	 ?>
	 <script>
		alert("Already Login");
		window.location="index1.php";
	 </script>
	 <?php
 }
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$pswd = $_POST['pswd'];
		
		$cn = mysqli_connect("localhost","root","","exam_db");
		$q = "select * from faculty_tbl where email='$email' AND password='$pswd'";
		$c = mysqli_query($cn,$q);
		$r = mysqli_num_rows($c);
		
		if($r==0)
		{
			?>
			<script>
				alert('INVALID USERNAME OR PASSWORD , PLEASE CHECHK IT AND TRY AGAIN');
			</script>
			<?php
		}
		else
		{
				$_SESSION['faculty']=$email;
				while($row=mysqli_fetch_array($c))
				{
					$_SESSION['unm']=$row['f_name'];
				}
			?>
			<script>
				window.location = "index1.php";
			</script>
			<?php
			
		}
		
	}
   
?>

																																

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Exam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="#" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						 Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pswd" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="login" value="LOGIN">
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>