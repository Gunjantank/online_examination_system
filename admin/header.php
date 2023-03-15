<?php 
session_start();
if(!isset($_SESSION['admin']))
	{
		?>
		<script>
		alert('you have to login first');
		window.location="adminlogin.php";
		</script>
		<?php
	}
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.glow {
  font-size: 80px;
  color: #FFB7B2;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #E389B9, 0 0 20px #E389B9, 0 0 30px #E389B9, 0 0 40px #E389B9, 0 0 50px #E389B9, 0 0 60px #E389B9, 0 0 70px #E389B9;
  }
  
  to {
    text-shadow: 0 0 20px #9C5ECB, 0 0 30px #9C5ECB, 0 0 40px #9C5ECB, 0 0 50px #9C5ECB, 0 0 60px #9C5ECB, 0 0 70px #9C5ECB, 0 0 80px #9C5ECB;
  }
}
</style>
</head>
<body style="background-color:#a7bed3;">

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>EDUCATION DOSE</span></a></div>
							
					<li><a href="indexp.php"><i class="ti-home"></i> Home </a></li>
                 	<li><a href="viewfaculty.php"><i class="ti-user"></i> Faculty </a></li> 
					<li><a href="viewstudent.php"><i class="ti-user"></i> Student </a></li> 
					<li><a href="viewexam.php"><i class="ti-book"></i> Exam </a></li> 
					<li><a href="viewresult.php"><i class="ti-file"></i> Result </a></li> 
					<li><a href="feedback.php"><i class="ti-comment-alt"></i> Feedback </a></li> 
					<li><a href="logout.php" onclick= "return confirm('ARE YOU SURE YOU WANTS TO LOG OUT ?!');"><i class="ti-power-off"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- /# sidebar -->
<div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
	 <div class="float-right">
	       <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
	                 <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar"><?php echo "Hello,  " . $_SESSION['unm'];?>
                                    
                                </span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </ul>

</ul>
</div>
</div>
</div>
</div>
 </div>
 </div>
</div>
</div>
 </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">   
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            
                        </div>
                    </div>
                    <!-- /# column -->
                </div>