<?php
    include '../includes/remove-session.php';
    require "../includes/config.php";
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $sql = "SELECT * FROM User WHERE user_id = '$id'";
        $result = $conn->query($sql);
        // no need to validate, if there is no user, can't log into the system
        $userData = $result->fetch_assoc();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>User - Profile Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-profile-settings.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/user-profile-settings.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/user-navigation.php'?>
    <div class="container" id="basic-information">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Basic Information</h1>
            <form action = "./user-details-update.php" name = "update-account-form" onsubmit = "return validateUpdate();" method = "POST">
				<input class="inputField" type = "text" placeholder = "Enter the user name" name = "user-name" id = "user-name" value="<?php echo $userData['name']; ?>"/><br>
				<p class = "error-message" id="error-name"></p>
                <input class="inputField"  type = "text" placeholder = "Enter the email address" name = "user-email" id = "user-email" value="<?php echo $userData['email']; ?>"/><br>
				<p class = "error-message" id="error-email"></p>
                <input class="inputField"  type = "text" placeholder = "Enter the phone number" name = "phone-number" id = "phone-number" value="<?php echo $userData['contact'] + 0;?>"/><br>
                <p class = "error-message" id="error-phone"></p>
                <textarea class = "inputField" id = "user-address" rows="6" cols="50" placeholder="Enter the address" name = "user-address"><?php echo $userData['address']; ?></textarea><br>
				<p class = "error-message" id="error-address"></p>
                <input class="inputField btn"  type = "submit" value = "Update Profile" name="btnUpdate" />
			</form>
        </div>
    </div>
    <div class="container last-container" id="change-password">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Change Password</h1>
            <form name="changePassword" action = "./user-change-password.php" onsubmit = "return validatePassChangeForm();" method = "POST">
                <p class = "error-message invalid-pass"><?php echo isset (($_SESSION['change-error']))?$_SESSION['change-error']:''; ?></p>
                <input class="inputField" id = "old" type = "password" placeholder = "Old Password" name="currentPassword"/><br>
                <p class = "error-message" id="error-pass"></p>
                <input class="inputField" id = "new" type = "password" placeholder = "New Password"/ name="newPassword"><br>
                <p class = "error-message" id="error-new-pass"></p>
                <input class="inputField" id = "confirm" type = "password" placeholder = "Confirm New Password" name="confirmNewPassword"/><br>
                <p class = "error-message" id="error-new-confirm-pass"></p>
                <p class = "error-message" id="error-not-same"></p>
                <input class="inputField btn"  type = "submit" value = "Change Password" name="changeBtn"/>
                <input type = "checkbox" id = "showPassword"><label for = "show-password"><span class="space"></span>Show Password</label>
			</form>
        </div>
    </div>
    <script src="../js/user-profile-settings.js"></script>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>