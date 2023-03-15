<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$snm=$_POST['nmtxt'];
	$dnm=$_POST['deptxt'];
	$sem=$_POST['semno'];
	
	$query="insert into class_tbl values('','$snm','$dnm','$sem')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="viewclass.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("invalid information...");
			window.location="addclass.php";
		</script>
		<?php
	}
}
?>
<?php include 'header.php';?>

<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2> Add class</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
<!doctype html>
<head>
	<title> addclass </title>
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
                                                <label class="col-lg-4 col-form-label" for="val-classname">Class name<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-classname" name="nmtxt" placeholder="Enter a classname"required>
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