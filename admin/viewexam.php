<?php include 'header.php';?>
<div class="container-fluid">
</div>

	<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>EXAM SCHEDULING</h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
										<table id="row-select" class="display table table-borderd table-hover">
										<tr>
											<th>Exam Id</th>
											<th>Subject Name</th>
											<th>Date</th>
											<th>Time</th>
											<th>Total Marks</th>
											<th>Total Questions</th>
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
													<td><?php echo $row['sub_name'];?></td>
													<td><?php echo $row['date'];?></td>
													<td><?php echo $row['time'];?></td>
													<td><?php echo $row['total_mark'];?></td>
													<td><?php echo $row['total_qu'];?></td>
													<td style="text-align:left"><a onclick="return confirm('are you sure you want to delete ?');"
													href="examdelete.php?id=<?php echo $row['e_id'];?>">Delete</a>/
													<a href="edit.php?id=<?php echo $row['e_id'];?>">Edit</a></td>
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