<?php
    session_start();
    if(isset($_SESSION['username'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - Profile Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-profile-settings.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/navigation.php'?>
    <div class="container">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Basic Information</h1>
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
                <!-- <textarea class = "inputField" id = "package_description" rows="4" cols="50" placeholder="Enter Package Description" name = "package_description"></textarea><br> -->
				<input class="inputField btn"  type = "submit" value = "Update Profile" />
			</form>
        </div>
    </div>
    <div class="container">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Change Password</h1>
            <form class = "" action = "" name = "update-account-form" method = "POST">
				<input class="inputField" type = "password" placeholder = "Old Password"/><br>
                <input class="inputField" type = "password" placeholder = "New Password"/><br>
                <input class="inputField" type = "password" placeholder = "Confirm New Password"/><br>
				<input class="inputField btn"  type = "submit" value = "Change Password" />
			</form>
        </div>
    </div>
    <div class="container">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Delete Account</h1>
            <form action = "driving-school-account-delete.php" name = "update-account-form" method = "POST">
				<input type="checkbox" id="deleteAccount" onclick = "showContent()"> Once you delete the account, there is no going back. Please be certain.<br>
				<input style = "display: none;" class="inputField btn-danger"  id="deleteBtn" type = "submit" value = "Delete Account" name="deleteBtn"/>
			</form>
        </div>
    </div>
    <script src="../js/driving-school-profile-settings.js"></script>
</body>
</html>
<?php 
    }else{
        header('Location: ../index.php');
    }
?>