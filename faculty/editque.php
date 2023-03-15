<?php
	$id=$_REQUEST['id'];
	$con=mysqli_connect("localhost","root","","exam_db");
	
	if(isset($_POST['update']))
	{
		$eid=$_POST['eidtxt'];
		$que=$_POST['quetxt'];
		$a=$_POST['opta'];
		$b=$_POST['optb'];
		$c=$_POST['optc'];
		$d=$_POST['optd'];
		$ans=$_POST['rbtn'];
		
		$query="update question_master_tbl set e_id=$eid,question='$que',option_a='$a',option_b='$b',option_c='$c',option_d='$d',ans='$ans' where q_id='$id'";
		echo $query;
		
		$rs=mysqli_query($con,$query);
		if($rs)
		{
			?>
			<script>
			alert("updated successfully..");
			window.location="viewque.php?eid=<?php echo $id;?>";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert("error..");
			</script>
			<?php
		}
		
	}
	$q="select * from question_master_tbl where q_id='$id'";
	$r=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($r))
	{
		$exid=$row['e_id'];
		$qu=$row['question'];
		$opa=$row['option_a'];
		$opb=$row['option_b'];
		$opc=$row['option_c'];
		$opd=$row['option_d'];
		$result=$row['ans'];
	}
	
?>
<?php include 'header.php';?>
<!doctype html>
<head>
	<title> Edit Question</title>
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
                                                <label class="col-lg-4 col-form-label" for="val-eid">Exam ID<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="val-eid" name="eidtxt" value="<?php echo $exid;?>" placeholder="Enter Exam ID"required>
                                                </div>
												</div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-question">Question<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="textarea" class="form-control" id="val-question" name="quetxt" value="<?php echo $qu;?>" placeholder="Enter a Question" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-a" >Option A <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-a" name="opta" value="<?php echo $opa;?>"  placeholder="Enter Option A"required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-b" >Option B <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-b" name="optb" value="<?php echo $opb;?>" placeholder="Enter Option B" required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-c" >Option C <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-c" name="optc" value="<?php echo $opc;?>" placeholder="Enter Option C" required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-opt-d" >Option D<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-opt-d" name="optd" value="<?php echo $opd;?>" placeholder="Enter Option D" required>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-ans" >Answer<span class="text-danger">*</span></label>
												<div class="col-lg-4 col-form-label" style="margin-left:5px">
												<?php
													if($result=="A")
													{
													?>
													<input type="radio"  name="rbtn" value="A" checked />A &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="B"/>B &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="C"/>C &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="D"/>D
													<?php
													}
													elseif($result=="B")
													{
													?>
													<input type="radio"  name="rbtn" value="A"/>A &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="B" checked />B &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="C"/>C &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="D"/>D
													<?php
													}
													elseif($result=="C")
													{
													?>
													<input type="radio"  name="rbtn" value="A"/>A &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="B"/>B &nbsp;&nbsp;
                                                    <input type="radio"  name="rbtn" value="C" checked />C &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="D"/>D
													<?php
													}
													else
													{
													?>
													<input type="radio"  name="rbtn" value="A"/>A &nbsp;&nbsp;
													<input type="radio"  name="rbtn" value="B"/>B &nbsp;&nbsp;
                                                    <input type="radio"  name="rbtn" value="C"/>C &nbsp;&nbsp;
                                                    <input type="radio" name="rbtn" value="D" checked />D
													<?php
													}
													?>
												</div>
												</div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary" name="update">update</button>
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