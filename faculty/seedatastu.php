<?php include'header.php'; ?>

<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>View Student</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
<?php
	$cnm=$_REQUEST['cname'];
	$sem=$_REQUEST['sem'];
	$dep=$_REQUEST['dept'];
?>
								<div class="card">
                                <div class="card-title" style="margin-top:30px" >
								<div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover" border='2';>
                                                <tr>
                                                    <th>Roll No</th>
                                                    <th>Student Name</th>
                                                    <th>Department Name</th>
                                                    <th>Semester</th>
													<th>Class Name</th>
                                                </tr>
                                            <?php
											$c=mysqli_connect("localhost","root","","exam_db");
											$query="select * from student_tbl where c_name='$cnm' AND dep_name='$dep' AND semester=$sem ";
											$r=mysqli_query($c,$query);
											
											while($row=mysqli_fetch_array($r))
											{
												?>
												<tr>
													<td><?php echo $row['roll_no'];?></td>
													<td><?php echo $row['stu_name'];?></td>
													<td><?php echo $row['dep_name'];?></td>
													<td><?php echo $row['semester'];?></td>
													<td><?php echo $row['c_name'];?></td>
												</tr>
												<?php
											}
										?>
                                        </table>
                                    </div>
                                </div>
								 </div>
                                </div>
<?php include'footer.php'; ?>