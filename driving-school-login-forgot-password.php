<?php 
	
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Driving School - Forgot Password</title>
	<link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-login-forgot-password.css" />
	<link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-main.css"/>
</head>
<body>
	<div class = "forgot-pass-form">
		<section class = "first-row">
			<h1>Forgot Password- Driving School Account</h1>
			<form action = "driving-school-login-forgot-password-check.php" name="forgot-pass-form" onsubmit = "return validateForm();" method = "POST">
				<input class="inputField"  type = "text" placeholder = "Enter the email address" name = "email" id = "email"/><br>
				<p class = "error-message" id="error-email"></p>
				<input class="inputField"  type = "password" placeholder = "Enter the new password" name = "password" id = "pass"/><br>
				<p class = "error-message" id="error-pass"></p>
				<input class="inputField"  type = "password" placeholder = "Confirm the new password" name = "confirm-password" id = "confirm-pass"/><br>
				<p class = "error-message" id="error-confirm-pass"></p>
				<p class = "error-message" id = "equality"></p>
				<input class="inputField btn"  type = "submit" value = "Change the Password" />
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password"><span class="space"></span>Show Passwords</label>
		</section>
		
		<section class = "third-row">
			<p><a class = "main-page-links" href = "driving-school-login.php">Back to the login page</a></p>
		</section>
	</div>
	
	<script src = "scripts/driving-school-login-forgot-password.js"></script>
</body>
</html>