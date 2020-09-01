<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "cruddb";
	$con = mysqli_connect($server,$user,$password,$db);
	if($con){
		//echo "Server Connected.";
	?>
	  <script>
	  	alert('connection successfull.');
	  </script>
<?php
	}else{
?>
	<script>
	  	alert('connection failed.');
	  </script>

<?php	
	}
?>