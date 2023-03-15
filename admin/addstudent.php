<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$snm=$_POST['nmtxt'];
	$dnm=$_POST['deptxt'];
	$sem=$_POST['semno'];
	$cnm=$_POST['clgtxt'];
	
	$query="insert into student_tbl values('','$snm','$dnm','$sem','$cnm')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="viewstudent.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("invalid information...");
			window.location="addstudent.php";
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
	<title> addstudent </title>
</head>
<body>
	<center>
			<h1> ADD STUDENT </h1></br></br></br></br></br>
	<form method="POST" action="#">
	<h4>
			
	Student Name :
	<input type="text" name="nmtxt"/><br><br></br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	Department Name:
	<input type="text" name="deptxt"/><br><br></br>
	
	Semester :
	<input type="number" name="semno"/><br><br></br>

	College Name:
	<input type="text" name="clgtxt"/><br><br></br>

	<input type="submit" name="submit" value="Add Student"/>
	

	</h4>
	</form>
</center>
</body>
</html>
<?php include 'footer.php';?>