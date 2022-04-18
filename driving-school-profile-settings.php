<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - Profile Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-profile-settings.css"/>
    <?php include 'includes/google-font.php';?>
</head>
<body>
    <?php include 'includes/navigation.php'?>
    <div class="container">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Profile Settings</h1>
            <form class = "" action = "" name = "update-account-form" method = "POST">
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
				<input class="inputField btn"  type = "submit" value = "Update Profile" />
			</form>
        </div>
    </div>
</body>
</html>