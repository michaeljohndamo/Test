<!DOCTYPE html>

<?php

	$name = '';
	$email = '';
	$subject = '';
	$gender = '';
	$country = '';
	$skill1 = '';
	$skill2 = '';
	$skill3 = '';
	$skill4 = '';
	$comment = '';
	$result = '';
	if(isset($_POST['gamer'])){
		if(!empty($_POST['name'])){
			$name ='<span style="color:green;">' .$_POST['name']. '</span>';
		}else{
			$name = '<span style="color:red;">Invalid Character!</span>';
		}
		if (!empty($_POST['email'])) {
			$email = '<span style="color:green;"> ' .$_POST['email'].' </span>';
		}else{
			$email = '<span style="color:red;">You did not input your email address!</span>';
		}
		if(!empty($_POST['subject'])){
			$subject = '<span style="color:green;">' .$_POST['subject']. '</span>';
		}else{
			$subject ='<span style="color:red;">Please input a subject!</span>';
		if(!empty($_POST['gender'])) {
			$gender = '<span style="color:green;"> '.$_POST['gender'] . '</span>';
		}else{
			$gender = '<span style="color:red;"> Input your gender! </span>';
		}
		if(!empty($_POST['country'])) {
			$gender = '<span style="color:green;"> '.$_POST['country'] . '</span>';
		}else{
			$gender = '<span style="color:green;"> Please input your country</span>';
		}
		}
		$comment = '<h3>Comments</h3>' .htmlspecialchars($_POST['comment']);
	}else {
		$result = '<span style="color:green;"> Please fill up the blanks! </span>';
}
?>


<html> 
	<head> 
		<title> Php form </title>
	</head>
	<body> 
		<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method='post'> 
			<table> 
				<tr> 
					<td>Name:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr> 
					<td>Email:</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr> 
					<td>Subject:</td>
					<td><input type="text" name="subject"></td>
				</tr>
				<tr>
					<td>Gender</td>
				</tr>
				<tr> 
					<td>Male: <br> Female:</td>
					<td><input type="radio" value="male" name="gender"><br><input type="radio" value ="female" name="gender"></td>
				</tr>
					<td> 
						Skills:
					</td>
					<td> 
						<input type="checkbox" name="skills1" value="html">: HTML <br>
						<input type="checkbox" name="skills2" value="css">: CSS <br>
						<input type="checkbox" name="skills3" value="php">: PHP <br>
						<input type="checkbox" name="skills4" value="php">: JQuery <br>
					</td>
				<tr> 
					<td> Country </td>
					<td>
						<select name="country">
							<option selected>select country</option>x`
							<option value="us">America </option>
							<option value="phil">Philippines </option>
							<option value="sg">Singapore </option>
						</select>
					<td>
				</tr>
				<tr> 
					<td>Comments:</td>
					<td><textarea type="comment" name="comment"></textarea></td>
				</tr>
				<tr> 
					<td><input type="hidden" value='yes' name='gamer'> </td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
			<?php 
				echo $name."<br>"; 
				echo $email."<br>";
				echo $subject."<br>";
				echo $comment."<br>";
				echo $result."<br>";

			?>


		</form>
	</body>
</html>
