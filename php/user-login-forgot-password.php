<?php
	session_start();
	if(isset($_SESSION['user_id'])){
		header('Location: ./user-dashboard.php');
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>User - Forgot Password</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-login-forgot-password.css" />
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
</head>
<body>
	<div class = "forgot-pass-form">
		<section class = "first-row">
			<h1>Forgot Password- User Account</h1>
			<form action = "./user-login-forgot-password-check.php" name="forgot-pass-form" onsubmit = "return validateForm();" method = "POST">
				<p class = "error-message login-invalid" id="error-login"><?php echo isset (($_SESSION['change-pass-error']))?$_SESSION['change-pass-error']:''; ?></p>
				<input class="inputField"  type = "text" placeholder = "Enter the email address" name = "email" id = "email"/><br>
				<p class = "error-message" id="error-email"></p>
				<input class="inputField"  type = "password" placeholder = "Enter the new password" name = "password" id = "pass"/><br>
				<p class = "error-message" id="error-pass"></p>
				<input class="inputField"  type = "password" placeholder = "Confirm the new password" name = "confirm-password" id = "confirm-pass"/><br>
				<p class = "error-message" id="error-confirm-pass"></p>
				<p class = "error-message" id = "equality"></p>
				<input class="inputField btn"  type = "submit" value = "Change the Password" name = "btnForPass"/>
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password"><span class="space"></span>Show Passwords</label>
		</section>
		
		<section class = "third-row">
			<p><a class = "main-page-links" href = "./user-login.php">Back to the login page</a></p>
		</section>
	</div>
	
	<script src = "../js/driving-school-login-forgot-password.js"></script>
</body>
</html>