<?php include'header.php'; ?>

<?php $dnm=$_SESSION['dnm'];
	  $sem=$_SESSION['sem'];
?>
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img1">
							<div class="container">
								<div class="slider_banner_info_w3ls">
									<h4>EXAM</h4>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
			<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                       
										
										<div class="events-section">
										<div class="container">
										
										<?php
											$c=mysqli_connect("localhost","root","","exam_db");
											$query="select*from exam_tbl where d_name='$dnm' AND sem='$sem'";
											$r=mysqli_query($c,$query);
											
											while($row=mysqli_fetch_array($r))
											{
												?>
												<div class="col-sm-4 live-grids-w3ls" style="margin-top:30px">
												<div class="live-info">
												<tr>
													<td><?php echo"<b>Exam ID = </b>". $row['e_id'];?></td><br><br>
													<td><?php echo"<b>Exam Title = </b> ".$row['sub_name'];?></td><br><br>
													<td><?php echo"<b>Date = </b>".$row['date'];?></td><br><br>
													<td><?php echo"<b>Time = </b>".$row['time'];?></td><br><br>
													<td><?php echo"<b>Total Mark = </b>".$row['total_mark'];?></td><br><br>
													<td><a 
													onclick="return confirm('Are you sure to start exam. Because exam has timer and page will be expired when reached its duration')"
													href="giveexam1.php?id=<?php echo $row['e_id'];?>&due=<?php echo $row['duration'];?>">Apply Exam</a></td>
												</tr>
												<p class="para-1"></p>
												</div>	
												</div>
												<?php
											}
										?>
										</div>
										</div>
										         									
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