<?php include 'header.php';?>
		<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>class</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
		
		<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
							<a href="addclass.php"><button type="button" class="btn btn-primary m-b-10 m-l-5" style="margin-top:20px">Add Class</button></a>
                            <div class="card">
                                <div class="card-title" style="margin-top:30px" >
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover" border='2';>
                                                <tr>
                                                    <th>Class Code</th>
                                                    <th>Class Name</th>
                                                    <th>Department Name</th>
                                                    <th>Semester</th>
													<th>Action</th>
                                                </tr>
                                            <?php
											$c=mysqli_connect("localhost","root","","exam_db");
											$query="select*from class_tbl";
											$r=mysqli_query($c,$query);
											
											while($row=mysqli_fetch_array($r))
											{
												?>
												<tr>
													<td><?php echo $row['c_code'];?></td>
													<td><?php echo $row['c_name'];?></td>
													<td><?php echo $row['dept_name'];?></td>
													<td><?php echo $row['semester'];?></td>
													<td style="text-align:left"><a href="seedatastu.php?cname=<?php echo $row['c_name']."&dept=". $row['dept_name'] . "&sem=". $row['semester'] ;?> ">view student</td></a>
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
<?php include 'footer.php';?>
		