<?php
    include '../includes/remove-session.php';
    require "../includes/config.php";
    if(isset($_SESSION['school_id'])){
        $id = $_SESSION['school_id'];
        $sql = "SELECT * FROM Driving_School WHERE school_id = '$id'";
        $result = $conn->query($sql);
        // no need to validate, if there is no user, can't log into the system
        $userData = $result->fetch_assoc();
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
    <?php include '../includes/driving-school-navigation.php'?>
    <div class="container" id="basic-information">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Basic Information</h1>
            <form action = "./driving-school-details-update.php" name = "update-account-form" onsubmit = "return validateUpdate();" method = "POST">
				<input class="inputField" type = "text" placeholder = "Enter the driving school name" name = "school-name" id = "school-name" value="<?php echo $userData['school_name'];?>"/><br>
				<p class = "error-message" id="error-name"></p>
                <input class="inputField"  type = "text" placeholder = "Enter the email address" name = "email" id = "email" value="<?php echo $userData['email'];?>"/><br>
				<p class = "error-message" id="error-email"></p>
                <input class="inputField"  type = "text" placeholder = "Enter the phone number" name = "phone-number" id = "phone-number" value="<?php echo $userData['contact'];?>"/><br>
                <p class = "error-message" id="error-phone"></p>
                <textarea class = "inputField" id = "school_address" rows="3" cols="50" placeholder="Enter School Address" name = "school_address"><?php echo $userData['address'];?></textarea><br>
                <p class = "error-message" id="error-address"></p>
                <textarea class = "inputField" id = "school_description" rows="6" cols="50" placeholder="Enter School Description" name = "school_description"><?php echo $userData['description'];?></textarea><br>
				<p class = "error-message" id="error-description"></p>
                <input class="inputField btn"  type = "submit" value = "Update Profile" name="btnUpdate" />
			</form>
        </div>
    </div>
    <div class="container" id="change-password">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Change Password</h1>
            <form name="changePassword" action = "./driving-school-change-password.php" onsubmit = "return validatePassChangeForm();" method = "POST">
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
    <div class="container" id="delete-account">
        <div class="setting-container">
            <h1 class="dashboard-table-heading">Delete Account</h1>
            <span>Keep remember to delete published packages before delete the account!</span>
            <form class="delete-account" action = "./driving-school-account-delete.php" name = "update-account-form" method = "POST">
				<input type="checkbox" id="deleteAccount" onclick = "showContent()"> Once you delete the account, there is no going back. Please be certain.
				<input style = "display: none;" class="inputField btn-danger"  id="deleteBtn" type = "submit" value = "Delete Account" name="deleteBtn"/>
			</form>
        </div>
    </div>
    <script src="../js/driving-school-profile-settings.js"></script>
</body>
</html>
<?php 
    }else{
        header('Location: ./driving-school.php');
    }
?>