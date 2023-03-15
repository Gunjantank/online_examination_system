<?php include 'header.php';?>
<div class="container-fluid">
</div>
	<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>STUDENT    LISTING </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                    <table id="row-select" class="display table table-borderd table-hover">
	<tr>
			<th>Roll No.</th>
			<th>Student Name</th>
			<th>Department Name</th>
			<th>Semester</th>
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
			<td><?php echo $row['dep_name'];?></td>
			<td><?php echo $row['semester'];?></td>
			<td><a onclick="return confirm('are you sure you want to delete ?');"
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

<?php include 'footer.php';?>