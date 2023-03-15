<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$etitle=$_POST['examtxt'];
	$dept=$_POST['deptxt'];
	$sem=$_POST['sem'];
	$subnm=$_POST['subtxt'];
	$dt=$_POST['dtxt'];
	$time=$_POST['time'];
	$mark=$_POST['tmarktxt'];
	$tqu=$_POST['tqutxt'];
	$due=$_POST['due'];
	
	$query="insert into exam_tbl values('','$etitle','$dept','$sem','$subnm','$dt','$time','$mark','$tqu','$due')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="Exam.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("invalid information...");
			window.location="addexam.php";
		</script>
		<?php
	}
}
?>

<?php
 include 'header.php';
?>
<section class="about-part team-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Add Exam</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
<!doctype html>
<head>
	<title> addexam </title>
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
                                                <label class="col-lg-4 col-form-label" for="val-etitle">Exam Title<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-etitle" name="examtxt" placeholder="Enter a Exam Title"required>
                                                </div>
                                            </div>
										 <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-deptnm">Department Name<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-deptnm" name="deptxt" placeholder="Enter a department Name"required>
                                                </div>
                                            </div>
											 <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-sem">Semester<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="val-sem" name="sem" placeholder="Enter a semester"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-subname">Subject name<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-subname" name="subtxt" placeholder="Enter a subject Name"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-date">Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="date" class="form-control" id="val-date" name="dtxt" placeholder="Enter Date"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-time">Time <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="time" class="form-control" id="val-time" name="time" placeholder="Enter Time"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-mark">Total Marks <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number_format" class="form-control" id="val-mark" name="tmarktxt" placeholder="Enter Marks"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-que">Total Questions <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number_format" class="form-control" id="val-que" name="tqutxt" placeholder="Enter Questions"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-duration">Duration<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number_format" class="form-control" id="val-duration" name="due" placeholder="Enter Exam Duration"required>
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