<?php
include("dbcon.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>disply files</title>
	<style>
		body{
			background-color: blue;
		}
		table{
			background-color: white;
			color:black;
		}
	</style>
</head>
<body>
	<h1 align="center"> List of candidates for web development jobs.</h1>
	<table align="center" border="3" cellspacing="10">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>mobile</th>
			<th>degree</th>
			<th>refer</th>
			<th>post</th>
			<th colspan="2">Operation</th>
		</tr>
		<?php
			$selectquery = "select * from registration";
			$query = mysqli_query($con,$selectquery);

			while ($result = mysqli_fetch_assoc($query)) {
		?>
		   <tr>
		   		<td><?php echo $result['id']; ?></td>
		   		<td><?php echo $result['name']; ?></td>
		   		<td><?php echo $result['email']; ?></td>
		   		<td><?php echo $result['mobile']; ?></td>
		   		<td><?php echo $result['degree']; ?></td>
		   		<td><?php echo $result['refer']; ?></td>
		   		<td><?php echo $result['lang']; ?></td>
		   		<td><a href="update.php?id=<?php echo $result['id']; ?>">update</a></td>
		   		<td><a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
		   </tr>
		<?php		
			}
		?>
	</table>
</body>
</html>