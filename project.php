<?php include 'includes/db.php'; 
	if(isset($_GET['del_id'])) {
		$del_sql= "DELETE FROM comment WHERE id='$_GET[del_id]'";
		$run_sql = mysqli_query($conn,$del_sql);
		}
?>

<html> 
	<head>
		<title>Connection of databases</title>
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"> </script>
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
			<th>Country</th>
			<th>Access</th>
			<th>Delete</th>
		</thread>
		<tbody>
<?php 
	$sql = "SELECT * FROM comment";
	$run_sql = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($run_sql)){
		echo '
			<tr>
				<td>'.$row['id'] . '</td>
				<td>'.$row['name'] . '</td>
				<td>'.$row['email'] . '</td>
				<td>'.$row['gender'] . '</td>
				<td>'.$row['country'] . '</td>
				<td><a href="detail.php?user_id='.$row['id'].'">Access</a></td>
				<td><a href="project.php?del_id='.$row['id'].'">Delete</a></td>
			</tr>'
			;
	}
?>
	</tbody>
	</table>
	</div>

</body>
</html>
