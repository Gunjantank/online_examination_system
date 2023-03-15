<?php
 session_start();
 
 if(isset($_SESSION['admin']))
 {
	 ?>
	 <script>
		alert("Already Login");
		window.location="indexp.php";
	 </script>
	 <?php
 }
	if(isset($_POST['login']))
	{
		$email = $_POST['emailtxt'];
		$pswd = $_POST['psdtxt'];
		
		$cn = mysqli_connect("localhost","root","","exam_db");
		$q = "select * from admin_login_tbl where email='$email' AND password='$pswd'";
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
				$_SESSION['admin']=$email;
				while($row=mysqli_fetch_array($c))
				{
					$_SESSION['unm']=$row['username'];
				}
			?>
			<script>
				window.location = "indexp.php";
			</script>
			<?php
			
		}
		
	}
   
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
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        
                        <div class="login-form">
                            <h4>Login</h4>
                            <form method="POST">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" name="emailtxt">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="psdtxt">
                                </div>
                                <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="login" value="LOGIN">
								</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>