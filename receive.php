<?php
	if(isset($_POST['gamer'])){
		echo "This is the username: $_POST[username] <br>";
		echo "This is the password: $_POST[password]";
	}else{
		echo "There is no request!";
	}	

?> 