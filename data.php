<!DOCTYPE html>
<html>
	<head> 
		<title> Data </title>
		<script src="js/jquery.js"> </script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	</head>
	<body> 
		<div class="container">
			<h1>Submit form</h1>
			<form class="form-horizontal" role="form" action="form_process.php" method="post">
				<div class="form-group">
					<label for="name" class="control-label col-sm-2">Name</label>
						<div class="col-sm-5">
							<input type="text" id="name" class="form-control" placeholder="Full name" name="name" required>
						</div>
				</div>
				<div class="form-group">
					<label for="email" class="control-label col-sm-2">Email</label>
						<div class="col-sm-5">
							<input type="email" id="email" class="form-control" placeholder="Email Address" name="email" required>
						</div>
				</div>
				<div class="form-group">
					<label for="subject" class="control-label col-sm-2">Subject</label>
						<div class="col-sm-5">
							<input type="text" id="subject" class="form-control" placeholder="Subject" name="subject">
						</div>
				</div>
				<div class="form-group">
					<label for="gender" class="control-label col-sm-2">Gender</label>
						<div class="col-sm-2">
						<select class="form-control" name="gender" required>
							<option value="">Select gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Skills</label>
						<div class="col-sm-5">
						<label class="checkbox-inline"><input type="checkbox" name="skills1" value="HTML">HTML</label>
						<label class="checkbox-inline"><input type="checkbox" name="skills2" value="CSS">CSS</label>
						<label class="checkbox-inline"><input type="checkbox" name="skills3" value="PHP">PHP</label>
					<label class="checkbox-inline"><input type="checkbox" name="skills4" value="JQuery">JQuery</label>
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Select your country</label>
						<div class="col-sm-3">
						<select class="form-control" name="country" required>
							<option value="">Select your country</option>
							<option value="Philippines">Philippines</option>
							<option value="America">America</option>
							<option value="Brazil">Brazil</option>
							<option value="cn">China</option>
							<option value="Singapore">Singapore</option>
							<option value="Russia">Russia</option>
							<option value="India">India</option>
							<option value="London">London</option>
							<option value="Cuba">Cuba</option>
						</select>
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Comments</label>
						<div class="col-sm-5">
							<textarea class="form-control my-fixed" name="comments" rows="8"></textarea>
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2"></label>
					<div class="col-sm-5">
						<input type="submit" class="btn btn-default btn-block" name="submit_form" value="submit form">
	
					</div>
				</div>
			</form>
		</div>

	</body>
</html>