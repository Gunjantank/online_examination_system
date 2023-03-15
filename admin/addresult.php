<?php
if(isset($_POST['submit']))
{
	$c=mysqli_connect("localhost","root","","exam_db");
	
	$subnm=$_POST['subtxt'];
	$stunm=$_POST['stutxt'];
	$option=$_POST['slopt'];
	$true=$_POST['ttrue'];
	$result=$_POST['restxt'];
	
	$query="insert into result_tbl values('$subnm','$stunm','$option','$true','$result')";
	
	$rs=mysqli_query($c,$query);
	
	if($rs)
	{
		?>
		<script>
			alert("insert successfully!!");
			window.location="viewresult.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("invalid information...");
			window.location="addresult.php";
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
	<title> addresult</title>
</head>
<body>
	<center>
			<h1> ADD RESULT</h1></br></br></br></br></br>
	<form method="POST" action="#">
	<h4>
			
	Subject Name :
	<input type="text" name="subtxt"/><br><br></br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	Student Name:
	<input type="text" name="stutxt"/><br><br></br>
	
	Selected Option:
	<input type="text" name="slopt"/><br><br></br>

	Total True:
	<input type="text" name="ttrue"/><br><br></br>
	
	Result:
	<input type="text" name="restxt"/><br><br></br>
	
	<input type="submit" name="submit" value="Add Result"/>


	</h4>
	</form>
</center>
</body>
</html>
<?php include 'footer.php';?>