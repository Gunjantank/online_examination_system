<?php
	session_start();
    if(isset($_POST['login']))
	{
		$email=$_POST['unametxt'];
		$pswd=$_POST['psdtxt'];
         
		$con=mysqli_connect("localhost","root","","exam_db");
		$q="select * from faculty_login_tbl where email='$email' AND password='$pswd'"; 
		$c=mysqli_query($con,$q);
		$r=mysqli_num_rows($c);		
		if($r==0)
		{
				?>
				<script>
				alert("username or password is invalid, try again");
				</script>
				<?php
		}
		else  
		{
			$_SESSION['faculty']=$email;
			?>
				<script>
				window.location="index1.php";
				</script>
				<?php			
		}   
     }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>FACULTY LOGIN</title>
    <link href="logincss1.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
           	<form action='#' method="POST">
              <div class="form-login"></br>
                <h4>Secure Login</h4>
                </br>
                <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="unametxt"/>
                </br></br>
                <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password"  name="psdtxt"/>
                </br></br>
                <div class="wrapper">
                        <span class="group-btn">
                            <input type="submit" class="btn btn-danger btn-md"  name="login" value="LOGIN"/> <i class="fa fa-sign-in"></i>
                        </span>
                </div>
            </div>
        </div>
</form>
    </div>
    </br></br></br>
    
</div>
</body>
</html>
