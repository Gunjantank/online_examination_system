<?php
	$fid=$_REQUEST['id'];
	
	$c=mysqli_connect("localhost","root","","exam_db");
	$query="Delete from faculty_tbl where f_id='$fid'";
	$r=mysqli_query($c,$query);
	if($r)
	{
		?>
		<script>
		window.location="viewfaculty.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("error...");
		window.location="viewfaculty.php";
		</script>
		<?php
	}
?>
