<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$fnm=$_POST['fnmtxt'];
	$dnm=$_POST['deptxt'];
	$email=$_POST['eml'];
	$pwd=$_POST['pswd'];
	
	$query="insert into faculty_tbl values('','$fnm','$dnm','$email','$pwd')";
	
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
			window.location="addfaculty.php";
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
                                        <form class="form-valide" action="#" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-classname">Faculty name<span class="text-danger"required>*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-facname" name="val-facname" placeholder="Enter a Faculty Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-department-name">Department Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-department-name" name="val-department-name" placeholder="Enter Department Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email">Email id <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="email" class="form-control" id="val-email" name="val-semester" placeholder="Enter Email Id..">
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-contact">Contact <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="email" class="form-control" id="val-contact" name="val-contact" placeholder="Enter Contact No...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Add faculty in Class</button>
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