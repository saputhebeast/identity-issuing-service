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
			<form action = "#" method = "POST">
				<input type = "text" placeholder = "Enter the driving school name" name = "school-name"/><br>
				<input type = "text" placeholder = "Enter the email address" name = "email"/><br>
				<input type = "text" placeholder = "Enter the phone number"/><br>
				<input type = "password" placeholder = "Enter the password" name = "password" id = "password"/><br>
				<input type = "password" placeholder = "Confirm the password" name = "confirm-password" id = "confirm-password"/><br>
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