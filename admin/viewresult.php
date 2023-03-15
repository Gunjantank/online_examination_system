<?php include 'header.php';?>
<div class="container-fluid">

</div>
	<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>RESULT</h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                          <table id="row-select" class="display table table-borderd table-hover";>
										<tr>
			<th>Result ID</th>
			<th>Exam Title</th>
			<th>Subject Name</th>
			<th>Student Name</th>
			<th>Department Name</th>
			<th>Semester</th>
			<th>Roll No.</th>
			<th>Result</th>
			<th>Date</th>
	</tr>
	<?php
		$c=mysqli_connect("localhost","root","","exam_db");
		$query="select * from result_master_tbl";
		$r=mysqli_query($c,$query);
		
		while($row=mysqli_fetch_array($r))
		{
			$eid = $row['e_id'];
			$sid = $row['stu_id'];
			?><tr>
				<td><?php echo $row['r_id'];?></td>
			<?php
			$qq="select * from exam_tbl where e_id='$eid'";
			$cc=mysqli_query($c,$qq);
			
				while($rr=mysqli_fetch_array($cc))
				{
					?>
						<td><?php echo $rr['e_title'];?></td>
						<td><?php echo $rr['sub_name'];?></td>
				<?php
						$sid=$row['stu_id'];
						$qqq="select * from student_tbl where roll_no='$sid'";
						$ccc=mysqli_query($c,$qqq);
					
							while($rrr=mysqli_fetch_array($ccc))
							{
								?>
									<td><?php echo $rrr['stu_name'];?></td>
									<td><?php echo $rrr['dep_name'];?></td>
									<td><?php echo $rrr['semester'];?></td>
							<?php
							}
				}
				?>
						
						<td><?php echo $row['stu_id'];?></td>
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

<?php include 'footer.php';?>