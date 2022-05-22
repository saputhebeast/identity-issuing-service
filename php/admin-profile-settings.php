<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator- Profile Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-profile-settings.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <!-- 
        admin navigation
    -->
    <?php include '../includes/admin-navigation.php'?>
    
    <div class="container" id="change-password">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Change Password</h1>
            <form name="changePassword" action = "./admin-change-password.php" onsubmit = "return validatePassChangeForm();" method = "POST">
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
    <script src="../js/driving-school-profile-settings.js"></script>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>