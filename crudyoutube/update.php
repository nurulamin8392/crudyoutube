<?php
	include("dbcon.php");
	error_reporting(0);
	$id = $_GET['id'];
	$selectquery = "select * from registration where id=$id";
	$query = mysqli_query($con,$selectquery);
	$result = mysqli_fetch_assoc($query);

	if(isset($_POST['submit'])){
		$id = $_GET['id'];
		$name = $_POST['user'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$degree = $_POST['degree'];
		$refer = $_POST['refer'];
		$lang = $_POST['lang'];
		$updatequery = "UPDATE `registration` SET id=$id, name='$name', email='$email', mobile='$mobile', degree='$degree', refer='$refer', lang='$lang' WHERE id=$id";
		$query = mysqli_query($con,$updatequery);
		if($query){
		//echo "Server Connected.";
	?>

	  <script>
	  	alert('Updated successfull.');
	  </script>
<?php
	}else{
?>
	<script>
	  	alert('Updated failed.');
	  </script>

<?php	
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1 align="center">Apply For Company Placement.</h1>
	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>Name</td>
				<td></td>
				<td><input type="text" name="user" placeholder="Enter Your Name" value="<?php echo $result['name']; ?>"></td>
			</tr>
			<tr>
				<td>E-mail Id</td>
				<td></td>
				<td><input type="email" name="email" placeholder="Enter Your E-mail Id" value="<?php echo $result['email']; ?>"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td></td>
				<td><input type="number" name="mobile" placeholder="Enter Your Mobile Number" value="<?php echo $result['mobile']; ?>"></td>
			</tr>
			
			<tr>
				<td>Qualification</td>
				<td></td>
				<td><input type="text" name="degree" placeholder="Enter Your Qualification" value="<?php echo $result['degree']; ?>"></td>
			</tr>
			
			
			<tr>
				<td>References</td>
				<td></td>
				<td><input type="text" name="refer" placeholder="Any References" value="<?php echo $result['refer']; ?>"></td>
			</tr>
			<tr>
				<td>Language</td>
				<td></td>
				<td><input type="text" name="lang" placeholder="Prefered Language" value="<?php echo $result['lang']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

