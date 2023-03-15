<?php 
session_start();
if(!isset($_SESSION['student']))
	{
		?>
		<script>
		alert('you have to login first');
		window.location="login.php";
		</script>
		<?php
	}
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>student</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Bettering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!--testimonial flexslider-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
	<!--//fonts-->

</head>

<body>
	<!--Header-->
	<div class="header">
	<div class="top">
					<div class="container">
					<div class="clearfix"></div>
					</div>
					</div>
		<!--top-bar-w3layouts-->
		<div class="top-bar-w3layouts">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php">Education Dose</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" class="active">Home</a></li>
							<li><a href="exam.php" class="active">Exam</a></li>
							<li><a href="result.php" class="active">Result</a></li>
							<li><a href="feedback.php" class="active">Feedback</a></li>
							<li><a onclick="return confirm('are you sure you want to logout ?');" href="logout.php" class="active">Logout</a></li>
						</ul>

					</div>
					<div class="clearfix"> </div>
				</nav>
			</div>

		</div>
		<!--//top-bar-w3layouts-->
		<!--Slider-->
		
		<div class="clearfix"> </div>
		<!-- //Modal1 -->
		<!--//Slider-->
	</div>
	<!--//Header-->
	<!-- services -->