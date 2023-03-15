<?php
	$rid=$_REQUEST['id'];
	
	$c=mysqli_connect("localhost","root","","exam_db");
	$query="Delete from result_tbl where r_id='$rid'";
	$r=mysqli_query($c,$query);
	if($r)
	{
		?>
		<script>
		window.location="viewresult.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("error...");
		window.location="viewresult.php";
		</script>
		<?php
	}
?>
