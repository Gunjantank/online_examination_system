<?php include 'header.php'; ?>
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--about-part start-->
		<section class="about-part service-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Student</h2>
					<!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		
		<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
							<a href="addstudent.php"><button type="button" class="btn btn-primary m-b-10 m-l-5" style="margin-top:20px">Add Student</button></a>
                            <div class="card">
                                <div class="card-title" style="margin-top:30px" >    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover" border='2';>
										<tr>
			<th>Roll No.</th>
			<th>Student Name</th>
			<th>Contact No</th>
			<th>Email</th>
			<th>Department Name</th>
			<th>Semester</th>
			<th>Class Name</th>
			<th>Action</th>
	</tr>
	<?php
		$c=mysqli_connect("localhost","root","","exam_db");
		$query="select*from student_tbl";
		$r=mysqli_query($c,$query);
		
		while($row=mysqli_fetch_array($r))
		{
			?>
			<tr>
			<td><?php echo $row['roll_no'];?></td>
			<td><?php echo $row['stu_name'];?></td>
			<td><?php echo $row['contact_no'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['dep_name'];?></td>
			<td><?php echo $row['semester'];?></td>
			<td><?php echo $row['c_name'];?></td>
			<td> <a onclick="return confirm('are you sure you want to delete ?');"
				href="studelete.php?id=<?php echo $row['roll_no'];?>">Delete</a></td>
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

		
		<?php include 'footer.php'; ?>