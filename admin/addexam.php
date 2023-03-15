<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$subnm=$_POST['subtxt'];
	$dt=$_POST['dtxt'];
	$time=$_POST['time'];
	$mark=$_POST['tmarktxt'];
	$tqu=$_POST['tqutxt'];
	
	$query="insert into exam_tbl values('','$subnm','$dt','$time','$mark','$tqu')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="viewexam.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("invalid information...");
			window.location="addexam.php";
		</script>
		<?php
	}
}
?>

<?php
 include 'header.php';
?>
<!doctype html>
<head>
	<title> addexam</title>
</head>
<body>
	<center>
			<h1> ADD EXAM</h1></br></br></br></br></br>
	<form method="POST" action="#">
	<h4>
			
	Subject Name :
	<input type="text" name="subtxt"/><br><br></br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	Date:
	<input type="date" name="dtxt"/><br><br></br>
	
	Time:
	<input type="time" name="time"/><br><br></br>

	Total Marks:
	<input type="text" name="tmarktxt"/><br><br></br>
	
	Total Questions:
	<input type="text" name="tqutxt"/><br><br></br>
	
	<input type="submit" name="submit" value="Add Exam"/>

	</h4>
	</form>
</center>
</body>
</html>
<?php include 'footer.php';?>