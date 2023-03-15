<?php include 'header.php';
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","exam_db");
?>
<section class="about-part team-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Add Questions</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
<?php
if(isset($_POST['insert']))
{
	
	
	$eid=$_POST['sidtxt'];
	$que=$_POST['quetxt'];
	$a=$_POST['opta'];
	$b=$_POST['optb'];
	$c=$_POST['optc'];
	$d=$_POST['optd'];
	$ans=$_POST['rbtn'];
	
	$query="insert into question_master_tbl values('','$eid','$que','$a','$b','$c','$d','$ans')";
	$rs=mysqli_query($con,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="viewque.php?eid=<?php echo $id;?>";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("something went wrong!");
			window.location="addque.php";
		</script>
		<?php
	}
}
?>
<!doctype html>
<head>
	<title> addquestion </title>
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
                                                <label class="col-lg-4 col-form-label" for="val-sid">Exam<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                
												<select class="form-control" id="val-sid" name="sidtxt" placeholder="Enter Subject ID"required>
													<option>Select Exam</option>
													<?php 
													$qq="Select * from exam_tbl";
													$cc=mysqli_query($con,$qq);
													while($rr=mysqli_fetch_array($cc))
													{
														?>
														<option value="<?php echo $rr['e_id'];?>"><?php echo $rr['e_title'];?></option>
														<?php 
													}
													
													?>
												</select>
												</div>
												</div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-question">Question<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="textarea" class="form-control" id="val-question" name="quetxt" placeholder="Enter a Question"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-a" >Option A <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-a" name="opta" placeholder="Enter Option A"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-b" >Option B <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-b" name="optb" placeholder="Enter Option B"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-c" >Option C <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-c" name="optc" placeholder="Enter Option C"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-d" >Option D<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-d" name="optd" placeholder="Enter Option D"required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-ans" >Answer<span class="text-danger">*</span></label>
												<div class="col-lg-4 col-form-label" style="margin-left:5px" >
													<input type="radio" id="val-ans" name="rbtn" value="A">A &nbsp;&nbsp;
													<input type="radio" id="val-ans" name="rbtn" value="B">B &nbsp;&nbsp;
                                                    <input type="radio" id="val-ans" name="rbtn" value="C">C &nbsp;&nbsp;
                                                    <input type="radio" id="val-ans" name="rbtn" value="D">D
												</div>
												</div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary" name="insert">Insert</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
                    </div>
					</div>
</body>
</html>
<?php include 'footer.php';?>
