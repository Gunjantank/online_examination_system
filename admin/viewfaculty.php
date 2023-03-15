<?php include 'header.php';?>
	
	
	<div class="row">
		<a href="addfacclass.php"><button type="button" class="btn btn-warning ">ADD FACULTY</button></a>
	</div>
	<section id="main-content">
            <div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-title">
							<h4>FACULTY LISTING </h4>
                        </div>
						
                        <div class="bootstrap-data-table-panel">
							<div class="table-responsive">
								<table id="row-select" class="display table table-borderd table-hover">
								<tr>
										<th>Faculty Id</th>
										<th>Faculty Name</th>
										<th>Department Name</th>
										<th>semester</th>
										<th>Contact</th>
										<th>Class Name</th>
										<th>Email Id</th>
										<th>Action</th>
								</tr>
								<?php
									$c=mysqli_connect("localhost","root","","exam_db");
									$query="select*from faculty_tbl";
									$r=mysqli_query($c,$query);
									
									while($row=mysqli_fetch_array($r))
									{
										?>
										<tr>
											<td><?php echo $row['f_id'];?></td>
											<td><?php echo $row['f_name'];?></td>
											<td><?php echo $row['dep_name'];?></td>
											<td><?php echo $row['sem'];?></td>
											<td><?php echo $row['contact'];?></td>
											<td><?php echo $row['class_name'];?></td>
											<td><?php echo $row['email'];?></td>
											<td><a onclick="return confirm('are you sure you want to delete ?');"
											href="delete.php?id=<?php echo $row['f_id'];?>">
											Delete
											</a>

											</td>
										</tr>
										<?php
									}
									?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>	
	</section>

<?php include 'footer.php';?>