<?php include 'includes/db.php'; ?>

<html> 
	<head>
		<title> Connection of databases</title>
		<script src="js/jquery.js"></script>
		<script src="bootsrap/js/bootstrap.js"> </script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	 </head>
<body> 
	<div class="container">
		<table class="table">
			<thread>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Skills</th>
			<th>Country</th>
		</thread>
		<tbody>
<?php 
	$sql = "SELECT * FROM php_course";
	$run_sql = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($run_sql)){
		echo '
			<tr>
				<td>'.$row['id'] . '</td>
				<td>'.$row['name'] . '</td>
				<td>'.$row['email'] . '</td>
				<td>'.$row['gender'] . '</td>
				<td>'.$row['skills1'] .','.$row['skills2']. ',' .$row['skills3']. ',' . $row['skills4'] . '</td>
				<td>'.$row['country'] . '</td>
			</tr>'
			;
	}
?>
	</tbody>
	</table>
	</div>

</body>
</html>
