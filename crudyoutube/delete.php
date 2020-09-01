<?php
include("dbcon.php");
error_reporting(0);
$id = $_GET['id'];
$deletequery = "DELETE FROM registration WHERE id='$id'";
$query = mysqli_query($con,$deletequery);
if($query){
	echo "Data Deleted";
	header("location:select.php");
}else{
	echo "Not Deleted";
}
?>