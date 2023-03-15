<?php include 'header.php';?>

<section class="about-part team-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>View Questions</h2>
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section>
<?php
	$exam_id=$_REQUEST['eid'];
?>
<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
							<a href="addque.php?id=<?php echo $exam_id;?>"><button type="button" class="btn btn-primary m-b-10 m-l-5" style="margin-top:20px">Add Questions</button></a>
                            <div class="card">
                                <div class="card-title" style="margin-top:30px" >    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover" border='2';>
										<tr>
			<th>Question ID</th>
			<th>Exam ID</th>
			<th>Question</th>
			<th>Option A</th>
			<th>Option B</th>
			<th>Option C</th>
			<th>Option D</th>
			<th>Answer</th>
			<th>Action</th>
	</tr>
	<?php
		$c=mysqli_connect("localhost","root","","exam_db");
		$query="select * from question_master_tbl where e_id='$exam_id'";
		$r=mysqli_query($c,$query);
		
		while($row=mysqli_fetch_array($r))
		{
			?>
			<tr>
			<td><?php echo $row['q_id'];?></td>
			<td><?php echo $row['e_id'];?></td>
			<td><?php echo $row['question'];?></td>
			<td><?php echo $row['option_a'];?></td>
			<td><?php echo $row['option_b'];?></td>
			<td><?php echo $row['option_c'];?></td>
			<td><?php echo $row['option_d'];?></td>
			<td><?php echo $row['ans'];?></td>
			<td> <a href="editque.php?id=<?php echo $row['q_id'];?>">Edit</a></td>
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