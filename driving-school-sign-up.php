<?php
	
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Driving School- Sign Up</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/driving-school-sign-up.css"/>
</head>
<body>
<div class = "signup-form">
		<section class = "first-row">
			<h1>Sign Up- Driving School</h1>
			<form action = "driving-school-sign-check.php" name = "create-account-form" onsubmit = "return validateForm();" method = "POST">
				<input type = "text" placeholder = "Enter the driving school name" name = "school-name" id = "school-name"/><br>
				<p id="error-school-name"></p>
				<input type = "text" placeholder = "Enter the email address" name = "email" id = "email"/><br>
				<p id="error-email"></p>
				<input type = "text" placeholder = "Enter the phone number" name = "phone-number" id = "phone-number"/><br>
				<p id="error-phone-number"></p>
				<input type = "password" placeholder = "Enter the password" name = "password" id = "password"/><br>
				<p id="error-password"></p>
				<input type = "password" placeholder = "Confirm the password" name = "confirm-password" id = "confirm-password"/><br>
				<p id="error-confirm-password"></p>
				<p id = "error-pass-mismatch"></p>
				<input type = "submit" value = "Sign Up" />
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password">Show Passwords</label>
		</section>
		
		<section class = "third-row">
			<p><a href = "driving-school-login.php">Back to the login page.</a></p>
		</section>
	</div>
	<script src = "scripts/driving-school-sign-up.js"></script>
</body>
</html>