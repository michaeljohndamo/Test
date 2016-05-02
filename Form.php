<!DOCTYPE html>
<html> 
	<head> 
		<title> Php form </title>
	</head>
	<body> 
		<form action="receive.php" method='post'> 
			<table> 
				<tr> 
					<td>Username:</td>
					<td><input type="email" name="username"></td>
				</tr>
				<tr> 
					<td>Password:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr> 
					<td><input type="hidden" value='yes' name='gamer'> </td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>


		</form>
	</body>
</html>