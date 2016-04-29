<?php 
	$server='localhost';
	$user= 'jay';
	$password= 'root';
	$db = 'php_course ';

	$conn=mysqli_connect($server,$user,$password,$db);

	if($conn) {
		die("connection failed:".mysqli_connect_error()):
	}
?>