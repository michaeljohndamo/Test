<?php include 'include/db.php'; ?>

<html> 
<head>
	<title> Connection of databases</title>
 </head>
<body> 
<?php 
	$sql = "SELECT * FROM comment";
	$run_sql = mysqli_query($conn,$sql);
	while($row = mysql_fetch_array($run_sql)){
		echo $row['name']."<br>";
		echo $row['email']."<br>";
		echo $row['subject']."<br>";
		echo $row['gender']."<br>";
	}

?>
</body>
</html>
