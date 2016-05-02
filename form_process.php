<?php 
include "includes/db.php";
if(isset($_POST['submit_form'])){
	$name = $_POST['name'];
	$email=	$_POST['email'];
	$subject = $_POST['subject'];
	$gender =$_POST['gender'];
	$country = $_POST['country'];
	$comments = $_POST['comments'];
if(empty($_POST['skills1'])) {
	$_POST['skills1'] = "";
}
if(empty($_POST['skills2'])) {
	$_POST['skills2'] = "";
}
if(empty($_POST['skills3'])) {
	$_POST['skills3'] = "";
}
if(empty($_POST['skills4'])) {
	$_POST['skills4'] = "";
}

$ins_sql = "INSERT INTO comment (name, email, subject, gender, skill1, skill2, skill3, skill4, country, comments) VALUES ('$name', '$email', '$subject', '$gender', '$_POST[skills1]', '$_POST[skills2]', '$_POST[skills3]','$_POST[skills4]', '$country', '$comments')";
$run_sql = mysqli_query($conn,$ins_sql);
}

?>	