<?php
	$fid=$_REQUEST['id'];
	
	$c=mysqli_connect("localhost","root","","exam_db");
	$query="Delete from feedback_tbl where f_id='$fid'";
	$r=mysqli_query($c,$query);
	if($r)
	{
		?>
		<script>
		window.location="feedback.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("error...");
		window.location="feedback.php";
		</script>
		<?php
	}
?>
