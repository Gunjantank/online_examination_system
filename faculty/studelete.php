<?php
	$sid=$_REQUEST['id'];
	
	$c=mysqli_connect("localhost","root","","exam_db");
	$query="Delete from student_tbl where roll_no='$sid'";
	$r=mysqli_query($c,$query);
	if($r)
	{
		?>
		<script>
		window.location="student.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("error...");
		window.location="student.php";
		</script>
		<?php
	}
?>
