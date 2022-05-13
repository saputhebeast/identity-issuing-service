<?php
	session_start();
	if(isset($_SESSION['admin_id'])){
		header('Location: ./admin-dashboard.php');
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Administrator - Login Page</title>
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-login.css" />
	<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
</head>
<body>
	<div class = "login-form">
		<section class = "first-row">
			<h1>Log In- Administrator Account</h1>
			<form name = "login-form" action = "./admin-login-check.php" onsubmit = "return validateForm();" method = "POST">
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
		</section>

		<section class = "fourth-row">
			<a class="a-btn" href="../index.php">Go Back to Home Page</a>
		</section>
	</div>
	
	<script src = "../js/login.js"></script>
</body>
</html>