<?php
	session_start();
	if(isset($_SESSION['school_id'])){
		header('Location: ./driving-school-dashboard.php');
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Driving School - Login Page</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-login.css" />
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
</head>
<body>
	<div class = "login-form">
		<section class = "first-row">
			<h1>Log In- Driving School Account</h1>
			<form name = "login-form" action = "./driving-school-login-check.php" onsubmit = "return validateForm();" method = "POST">
				<p class = "error-message login-invalid" id="error-login"><?php echo isset (($_SESSION['login-error']))?$_SESSION['login-error']:''; ?></p>
				<input class="inputField" type = "text" placeholder = "Enter the email address" name = "email" id="login-email"/><br>
				<p class = "error-message" id="error-email"></p>
				<input class="inputField" type = "password" placeholder = "Enter the password" name = "password" id = "login-password"/><br>
				<p class = "error-message" id="error-pass"></p>
				<input class="inputField btn" type = "submit" value = "Log In" name = "logInBtn"/>
			</form>
		</section>
		
		<section class = "second-row">
			<input type = "checkbox" id = "showPassword"><label for = "show-password"><span class="space"></span>Show Password</label>
			<a class = "main-page-links" href = "./driving-school-login-forgot-password.php">Forgot Password</a>
		</section>
		
		<section class = "third-row">
			<p>Don't have an account? <a class = "main-page-links" href = "./driving-school-sign-up.php">Sign Up</a> here!</p>
		</section>

		<section class = "fourth-row">
			<a class="a-btn" href="../index.php">Go Back to Home Page</a>
		</section>
	</div>
	
	<script src = "../js/login.js"></script>
</body>
</html>