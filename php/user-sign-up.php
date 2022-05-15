<?php
	include '../includes/remove-session.php';
	if(isset($_SESSION['user_id'])){
		header('Location: ./user-dashboard.php');
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>User- Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/driving-school-sign-up.css"/>
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
</head>
<body>
<div class = "signup-form">
		<section class = "first-row">
			<h1>Sign Up- User</h1>
			<form action = "./user-sign-up-check.php" name = "create-account-form" onsubmit = "return validateForm();" method = "POST">
				<input class="inputField" type = "text" placeholder = "Enter the name" name = "user-name" id = "user-name"/><br>
				<p class = "error-message" id="error-user-name"></p>
				<input class="inputField"  type = "text" placeholder = "Enter the email address" name = "email" id = "email"/><br>
				<p class = "error-message" id="error-email"></p>
				<input class="inputField"  type = "text" placeholder = "Enter the phone number" name = "phone-number" id = "phone-number"/><br>
				<p class = "error-message" id="error-phone-number"></p>
                <input class="inputField"  type = "text" placeholder = "Enter the home address" name = "home-address" id = "home-address"/><br>
				<p class = "error-message" id="error-home-address"></p>
				<input class="inputField"  type = "password" placeholder = "Enter the password" name = "password" id = "password"/><br>
				<p class = "error-message" id="error-password"></p>
				<input class="inputField"  type = "password" placeholder = "Confirm the password" name = "confirm-password" id = "confirm-password"/><br>
				<p class = "error-message" id="error-confirm-password"></p>
				<p class = "error-message" id = "error-pass-mismatch"></p>
				<input class="inputField btn"  type = "submit" value = "Sign Up" name = "uSignUpBtn"/>
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password"><span class="space"></span>Show Passwords</label>
		</section>
		
		<section class = "third-row">
			<p><a class = "main-page-links" href = "./user-login.php">Back to the login page</a></p>
		</section>
	</div>
	<script src = "../js/user-sign-up.js"></script>
</body>
</html>