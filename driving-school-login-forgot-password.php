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
			<h1>Forgot Password</h1>
			<form action = "#" name="forgot-pass-form" onsubmit = "return validateForm()" method = "POST">
				<input type = "text" placeholder = "Enter the email address" name = "email"/><br>
				<input type = "password" placeholder = "Enter the new password" name = "new-password" id = "new-password"/><br>
				<input type = "password" placeholder = "Confirm the new password" name = "confirm-password" id = "confirm-password"/><br>
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