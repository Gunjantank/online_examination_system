<?php include'header.php'; ?>
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img1">
							<div class="container">
								<div class="slider_banner_info_w3ls">
									<h4>RESULT</h4>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
			
	<!--//about-->
<!-- Testimonials -->
	
	<!-- //Testimonials -->
	<!-- Events -->
	
	
	
<?php
	$student_id=$_SESSION['sid'];
?>
<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
							<div class="card">
                                <div class="card-title" style="margin-top:30px" >    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover" border='2';>
										<tr>
			<th>Result ID</th>
			<th>Roll No.</th>
			<th>Exam Title</th>
			<th>Subject Name</th>
			<th>Total Mark</th>
			<th>Result</th>
			<th>Date</th>
			
	</tr>
	<?php
		$c=mysqli_connect("localhost","root","","exam_db");
		$query="select * from result_master_tbl where stu_id='$student_id'";
		$r=mysqli_query($c,$query);
		
		while($row=mysqli_fetch_array($r))
		{
			$eid = $row['e_id'];
			?><tr>
				<td><?php echo $row['r_id'];?></td>
				<td><?php echo $row['stu_id'];?></td>
			<?php
			$qq="select * from exam_tbl where e_id='$eid'";
			$cc=mysqli_query($c,$qq);
			
				while($rr=mysqli_fetch_array($cc))
				{

					?>
						<td><?php echo $rr['e_title'];?></td>
						<td><?php echo $rr['sub_name'];?></td>
						<td><?php echo $rr['total_mark'];?></td>
				<?php
				}
				?>
						<td><?php echo $row['result'];?></td>
						<td><?php echo $row['r_date'];?></td>
						</tr>
				<?php
		}
	?>
</table> 
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    
                </section>
	
	
	
	
	
	
	
	
	
<?php include'footer.php'; ?>