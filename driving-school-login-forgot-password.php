<?php 
	
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Driving School - Forgot Password</title>
	<link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-login-forgot-password.css" />
</head>
<body>
	<div class = "forgot-pass-form">
		<section class = "first-row">
			<h1>Forgot Password- Driving School Account</h1>
			<form action = "driving-school-login-forgot-password-check.php" name="forgot-pass-form" onsubmit = "return validateForm();" method = "POST">
				<input type = "text" placeholder = "Enter the email address" name = "email" id = "email"/><br>
				<p id="error-email"></p>
				<input type = "password" placeholder = "Enter the new password" name = "password" id = "pass"/><br>
				<p id="error-pass"></p>
				<input type = "password" placeholder = "Confirm the new password" name = "confirm-password" id = "confirm-pass"/><br>
				<p id="error-confirm-pass"></p>
				<p id = "equality"></p>
				<input type = "submit" value = "Change the Password" />
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password">Show Passwords</label>
		</section>
		
		<section class = "third-row">
			<p><a href = "driving-school-login.php">Back to the login page.</a></p>
		</section>
	</div>
	
	<script src = "scripts/driving-school-login-forgot-password.js"></script>
</body>
</html>