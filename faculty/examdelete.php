<?php
	$eid=$_REQUEST['id'];
	
	$c=mysqli_connect("localhost","root","","exam_db");
	$query="Delete from exam_tbl where e_id='$eid'";
	$r=mysqli_query($c,$query);
	if($r)
	{
		?>
		<script>
		window.location="Exam.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("error...");
		window.location="Exam.php";
		</script>
		<?php
	}
?>
