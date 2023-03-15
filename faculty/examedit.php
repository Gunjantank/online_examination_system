<?php
	$id=$_REQUEST['id'];
	$c=mysqli_connect("localhost","root","","exam_db");
	
	if(isset($_POST['submit']))
	{
		$subnm=$_POST['snmtxt'];
		$dt=$_POST['date'];
		$tm=$_POST['time'];	
		$mark=$_POST['tmark'];
		$que=$_POST['tque'];
		
		$query="update exam_tbl set sub_name='$subnm', date='$dt',time='$tm',total_mark='$mark',
		total_qu='$que' where e_id='$id'";
		
		$rs=mysqli_query($c,$query);
		if($rs)
		{
			?>
			<script>
			alert("updated successfully..");
			window.location="Exam.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert("error..");
			window.location="Exam.php";
			</script>
			<?php
		}
		
	}
	$q="select * from exam_tbl where e_id='$id'";
	$r=mysqli_query($c,$q);
	while($row=mysqli_fetch_array($r))
	{
		$snm=$row['sub_name'];
		$date=$row['date'];
		$time=$row['time'];
		$tmark=$row['total_mark'];
		$tque=$row['total_qu'];
	}
	
?>
<?php include 'header.php';?>
<section class="about-part team-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Exam</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
<!doctype html>
<head>
	<title> Edit Exam </title>
</head>
<body>
	 <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-subname">Subject name<span class="text-danger"required>*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-subname" name="snmtxt" value="<?php echo $snm;?>" placeholder="Enter a classname"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-date">Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="date" class="form-control" id="val-date" name="date" value="<?php echo $date;?>" placeholder="Your valid email.."/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-time">time <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="time" class="form-control" id="val-time" name="time" value="<?php echo $time;?>" placeholder="Choose a safe one.."/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-total-mark">Total marks<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-total-mark" name="tmark" value="<?php echo $tmark;?>" placeholder="..and confirm it!"/>
                                                </div>
											</div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-total-question">Total questions<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-total-question" name="tque" value="<?php echo $tque;?>" placeholder="..and confirm it!"/>
                                                </div>
                                            
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
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