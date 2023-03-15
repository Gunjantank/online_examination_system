<?php include 'header.php';?>
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
			
		<!--header end-->
		
		
		
		<!--about-part start-->
		<section class="about-part team-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Exam</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->
<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
							<a href="addexam.php"><button type="button" class="btn btn-primary m-b-10 m-l-5" style="margin-top:20px">Add Exam</button></a>
                            <div class="card">
                                <div class="card-title" style="margin-top:30px" >
                                    
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover" border='2';>
<tr>
											<th>Exam Id</th>
											<th>Department Name</th>
											<th>Semester</th>
											<th>Subject Name</th>
											<th>Date</th>
											<th>Time</th>
											<th>Total Marks</th>
											<th>Total Questions</th>
											<th>Duration</th>
											<th>Question List</th>
											<th>Action</th>
									    </tr>
										<?php
											$c=mysqli_connect("localhost","root","","exam_db");
											$query="select*from exam_tbl";
											$r=mysqli_query($c,$query);
											
											while($row=mysqli_fetch_array($r))
											{
												?>
												<tr>
													<td><?php echo $row['e_id'];?></td>
													<td><?php echo $row['d_name'];?></td>
													<td><?php echo $row['sem'];?></td>
													<td><?php echo $row['sub_name'];?></td>
													<td><?php echo $row['date'];?></td>
													<td><?php echo $row['time'];?></td>
													<td><?php echo $row['total_mark'];?></td>
													<td><?php echo $row['total_qu'];?></td>
													<td><?php echo $row['duration']." Minute";?></td>
													<td><a
													href="viewque.php?eid=<?php echo $row['e_id'];?>">View Questions</a></td>
													<td style="text-align:left"><a onclick="return confirm('are you sure you want to delete ?');"  
													href="examdelete.php?id=<?php echo $row['e_id'];?>">Delete</a>/
													<a href="examedit.php?id=<?php echo $row['e_id'];?>">Edit</a></td>
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