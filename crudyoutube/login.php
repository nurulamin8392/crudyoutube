<?php
	include("dbcon.php");
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1 align="center">Apply For Company Placement.</h1>
	<form action="select.php" method="POST">
		<table align="center">
			<tr>
				<td>Name</td>
				<td></td>
				<td><input type="text" name="user" placeholder="Enter Your Name"></td>
			</tr>
			<tr>
				<td>E-mail Id</td>
				<td></td>
				<td><input type="email" name="email" placeholder="Enter Your E-mail Id"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td></td>
				<td><input type="number" name="mobile" placeholder="Enter Your Mobile Number"></td>
			</tr>
			
			<tr>
				<td>Qualification</td>
				<td></td>
				<td><input type="text" name="degree" placeholder="Enter Your Qualification"></td>
			</tr>
			
			
			<tr>
				<td>References</td>
				<td></td>
				<td><input type="text" name="refer" placeholder="Any References"></td>
			</tr>
			<tr>
				<td>Language</td>
				<td></td>
				<td><input type="text" name="lang" placeholder="Prefered Language"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Register"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$name = $_POST['user'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$degree = $_POST['degree'];
		$refer = $_POST['refer'];
		$lang = $_POST['lang'];
		$insertquery = "insert into registration(name, email, mobile, degree, refer, lang) values('$name', '$email', '$mobile', '$degree', '$refer', '$lang')";
		$query = mysqli_query($con,$insertquery);
		if($query){
		//echo "Server Connected.";
	?>

	  <script>
	  	alert('Inserted successfull.');
	  </script>
<?php
	}else{
?>
	<script>
	  	alert('Inserted failed.');
	  </script>

<?php	
	}
}
?>