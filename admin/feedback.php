<?php include 'header.php';?>

	<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>FEEDBACKS</h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                      <table id="row-select" class="display table table-borderd table-hover">
										<tr>
												<th>Feedback Id</th>
												<th>User Name</th>
												<th>Subject</th>
												<th>Message</th>
												<th>Email</th>
												<th>Date</th>
												<th>Action</th>
										</tr>
										<?php
											$c=mysqli_connect("localhost","root","","exam_db");
											$query="select*from feedback_tbl";
											$r=mysqli_query($c,$query);
											
											while($row=mysqli_fetch_array($r))
											{
												?>
												<tr>
												<td><?php echo $row['f_id'];?></td>
												<td><?php echo $row['user_name'];?></td>
												<td><?php echo $row['subject'];?></td>
												<td><?php echo $row['message'];?></td>
												<td><?php echo $row['email'];?></td>
												<td><?php echo $row['date'];?></td>
												<td><a <a onclick="return confirm('are you sure you want to delete ?');"
												href="feedelete.php?id=<?php echo $row['f_id'];?>">Delete</a></td>
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