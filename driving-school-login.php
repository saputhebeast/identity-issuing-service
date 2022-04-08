<?php


?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Driving School - Login Page</title>
	<link rel = "stylesheet" type = "text/css" href = "stylessheets/driving-school-login.css" />
</head>
<body>
	<div class = "login-form">
		<section class = "first-row">
			<h1>Log In- Driving School Account</h1>
			<form action = "driving-school-login-check.php" method = "POST">
				<input type = "text" placeholder = "Enter the email address" name = "email"/><br>
				<input type = "password" placeholder = "Enter the password" name = "password" id = "login-password"/><br>
				<input type = "submit" value = "Log In" />
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password">Show Password</label>
			<a href = "#">Forgot Password</a>
		</section>
		
		<section class = "third-row">
			<p>Don't have an account? <a href = "#">Sign Up</a> here!</p>
		</section>
	</div>
	
	<script src = "scripts/app.js"></script>
</body>
</html>