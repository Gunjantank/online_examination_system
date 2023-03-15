<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$fnm=$_POST['facnametxt'];
	$dnm=$_POST['depttxt'];
	$sem=$_POST['sem'];
	$cont=$_POST['contact'];
	$class=$_POST['classnm'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="insert into faculty_tbl(f_id,f_name,dep_name,sem,contact,class_name,email,password)values('','$fnm','$dnm',$sem,$cont,'$class','$email','$password')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="viewfaculty.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("invalid information...");
			window.location="addfacclass.php";
		</script>
		<?php
	}
}
?>

<?php
 include 'header.php';
?>

<!doctype html>
<head>
	<title> addfaculty </title>
</head>
<body>
	<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" method="post" >
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-classname">Faculty name<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-facname" name="facnametxt" placeholder="Enter a Faculty Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-department-name">Department Name <span class="text-danger" >*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-department-name" name="depttxt" placeholder="Enter Department Name" required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-sem">Semester <span class="text-danger" >*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-sem" name="sem" placeholder="Enter semester" required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-contact">Contact <span class="text-danger" >*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="tel" class="form-control" id="val-contact" name="contact" placeholder="Enter Contact No..." required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="classname">Class Name <span class="text-danger" >*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="class" name="classnm" placeholder="Enter Class Name" required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email id <span class="text-danger" >*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="email" class="form-control" id="val-email" name="email" placeholder="Enter Email Id.." required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-password">Password<span class="text-danger" >*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="val-password" name="password" placeholder="Enter Password.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <input type="submit"  name ="submit" class="btn btn-primary" value="Add faculty in Class"/>
                                                </div>
												<div class="col-lg-8 ml-auto">
                                                   <a href="viewfaculty.php"> <button type="button"  name ="backbtn" class="btn btn-primary">Back to faculty</button></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</body>
</html>
<?php include 'footer.php';?>