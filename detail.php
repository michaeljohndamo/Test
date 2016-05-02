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
		<div class="jumbotron">
			<h1>User Details</h1>
			<p>Let me get the complete details</p>
		</div>
		<?php 
		if(isset($_GET['user_id'])) {
			$sql = "SELECT * FROM comment WHERE id='$_GET[user_id]'";
			$run = mysqli_query($conn,$sql);
			while($rows = mysqli_fetch_assoc($run)) {
				echo '<div class="row"> 
			<Strong class="col-sm-3">Name: </Strong>
			<div class="col-sm-3">'.$rows["name"] . '</div>
		</div>
		<div class="row"> 
			<Strong class="col-sm-3">Email: </Strong>
			<div class="col-sm-3">'. $rows["email"].'</div>
		</div>
		<div class="row"> 
			<Strong class="col-sm-3">Subject: </Strong>
			<div class="col-sm-3">'.$rows["subject"].'</div>
		</div>
		<div class="row"> 
			<Strong class="col-sm-3">Gender: </Strong>
			<div class="col-sm-3">'.$rows['gender'].'</div>
		</div>
		<div class="row"> 
			<Strong class="col-sm-3">Skills: </Strong>
			<div class="col-sm-3">Jay </div>
		</div>
		<div class="row"> 
			<Strong class="col-sm-3">Country: </Strong>
			<div class="col-sm-3">'.$rows['country'].'</div>
		</div>
		<div class="row"> 
			<Strong class="col-sm-3">Comments: </Strong>
			<div class="col-sm-3">'.$rows["comments"].'</div>
		</div>';
			}
		}
		?>
		
	</div>

</body>
</html>
