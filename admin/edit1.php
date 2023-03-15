<?php
	$eid=$_REQUEST['id'];
	
	$c=mysqli_connect("localhost","root","","exam_db");
	
	if(isset($_POST['btnok']))
	{
		$subnm=$_POST['snmtxt'];
		$dt=$_POST['date'];
		$tm=$_POST['time'];
		$mark=$_POST['marktxt'];
		$que=$_POST['qutxt'];
		
		$qq="update exam_tbl set sub_name='$subnm',date='$dt',time='$tm',total_mark='$mark'
		,total_qu='$que' where e_id='$id'";
		
		$c=mysqli_fetch_array($con,$qq);
		if($r)
	{
		?>
		<script>
		alert("succesufully updated.");
		window.location="viewexam.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("error...");
		</script>
		<?php
	}
	
	
	$query="select * from exam_tbl where e_id='$eid'";
	$r=mysqli_query($c,$query);
	while($row=mysqli_fetch_array($r))
	{
		$snm=$row['sub_name'];
		$date=$row['date'];
		$time=$row['time'];
		$tmark=$row['total_mark'];
		$tqu=$row['total_qu'];
	}
?>

<?php include 'header.php';?>
<!doctype html>
<body>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="form-validation">
						<form class="form-valide" action="#" method="post">
							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-subname" >Subject Name<span class="text-danger"required>*</span></label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="val-subname" name="snmtxt" value="<?php echo $snm;?>" placeholder="Enter a classname"/>
                                    </div>
                            </div>
                            <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-date" >Date <span class="text-danger">*</span></label>
									<div class="col-lg-8">
										<input type="date" class="form-control" id="val-date" name="date" value="<?php echo $date;?>" placeholder="Choose a date"/>
                                    </div>
                            </div>
                            <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-time" >Time <span class="text-danger">*</span></label>
									<div class="col-lg-8">
										<input type="time" class="form-control" id="val-time" name="time" value="<?php echo $time;?>" placeholder="Choose a time"/>
                                    </div>
                            </div>
                            <div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-total-mark">Total Marks <span class="text-danger">*</span></label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="val-total-mark" name="marktxt" value="<?php echo $tmark;?>" placeholder="Enter exam Total marks"/>
                                    </div>
                            </div>
							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="val-total-question">Total Questions <span class="text-danger">*</span></label>
									<div class="col-lg-8">
										<input type="text" class="form-control" id="val-total-question" name="qutxt" value="<?php echo $tqu;?>" placeholder="Enter exam Total questions"/>
                                    </div>
                            </div>
                            <div class="form-group row">
								<div class="col-lg-8 ml-auto">
									<button type="submit" class="btn btn-primary" name="btnok">Update</button>
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