<?php
	include '../includes/remove-session.php';
	if(isset($_SESSION['school_id'])){
		header('Location: ./driving-school-dashboard.php');
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Driving School- Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/driving-school-sign-up.css"/>
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
</head>
<body>
<div class = "signup-form">
		<section class = "first-row">
			<h1>Sign Up- Driving School</h1>
			<form action = "./driving-school-sign-up-check.php" name = "create-account-form" onsubmit = "return validateForm();" method = "POST">
				<input class="inputField" type = "text" placeholder = "Enter the driving school name" name = "school-name" id = "school-name"/><br>
				<p class = "error-message" id="error-school-name"></p>
				<input class="inputField"  type = "text" placeholder = "Enter the email address" name = "email" id = "email"/><br>
				<p class = "error-message" id="error-email"></p>
				<input class="inputField"  type = "text" placeholder = "Enter the phone number" name = "phone-number" id = "phone-number"/><br>
				<p class = "error-message" id="error-phone-number"></p>
				<input class="inputField"  type = "password" placeholder = "Enter the password" name = "password" id = "password"/><br>
				<p class = "error-message" id="error-password"></p>
				<input class="inputField"  type = "password" placeholder = "Confirm the password" name = "confirm-password" id = "confirm-password"/><br>
				<p class = "error-message" id="error-confirm-password"></p>
				<p class = "error-message" id = "error-pass-mismatch"></p>
				<input class="inputField btn"  type = "submit" value = "Sign Up" name = "signUpBtn"/>
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password"><span class="space"></span>Show Passwords</label>
		</section>
		
		<section class = "third-row">
			<p><a class = "main-page-links" href = "./driving-school-login.php">Back to the login page</a></p>
		</section>
	</div>
	<script src = "../js/driving-school-sign-up.js"></script>
</body>
</html>