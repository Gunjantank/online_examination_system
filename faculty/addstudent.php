<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$snm=$_POST['nmtxt'];
	$cont=$_POST['cont'];
	$email=$_POST['email'];
	$pswd=$_POST['password'];
	$dnm=$_POST['deptxt'];
	$sem=$_POST['semno'];
	$clnm=$_POST['cltxt'];
	
	$query="insert into student_tbl values('','$snm','$cont','$email','$pswd','$dnm','$sem','$clnm')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="student.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("invalid information...");
			window.location="addstudent.php";
		</script>
		<?php
	}
}
?>

<?php
 include 'header.php';
?>

<section class="about-part service-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Student</h2>
					<!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
<!doctype html>
<head>
	<title> addstudent </title>
</head>
<body>
	<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
							<div class="card-title" style="margin-top:30px" >
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-classname">Student Name<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-classname" name="nmtxt" placeholder="Enter a Student Name"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-contact-no" >Contact No. <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-contact-no" name="cont" placeholder="Enter Contact No."required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email" >Email<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-email" name="email" placeholder="Enter Email"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-password" >Password<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="val-password" name="password" placeholder="Enter Password"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-department-name" >Department Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-department-name" name="deptxt" placeholder="Enter Department Name"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-semester" >Semester <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="val-semester" name="semno" placeholder="Enter Semester.."required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-class-name" >Class Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-class-name" name="cltxt" placeholder="Enter Class Name"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                                </div>
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
<?php include 'footer.php';?>