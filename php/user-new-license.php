<?php
    session_start();
    include "../includes/config.php";
    if(isset($_SESSION['user_id'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>User - New License</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-package-manage.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/user-new-license.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <!-- 
        user navigation
    -->
    <?php include '../includes/user-navigation.php'?>
    
    <!-- check is user already have submitted a form or not -->
    <?php 
        $id = $_SESSION['user_id'];
        $sql = "SELECT * FROM Application WHERE user_id = '$id'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $data = $result->fetch_assoc();
    ?>
    <div class = "container">
        <p class="alert alert-success">You already have a submitted application to get new license.<br> Once the application process is over, your new license will show.<br> You can check it from here.</p>
        <a href="" class="license-view"></a>
        <div class="buttons">
            <form action="./user-view-license.php" method="POST">
                <input class = "inputField btn" id = "renew" type="submit" value="View License" name="viewLicenseBtn">
            </form>
    <?php 
            if($data['application_status'] == 'Pending'){
    ?>
            <form action="./user-delete-license-application.php" method="POST">
                <input class = "inputField btn btn-danger" id = "renew" type="submit" value="Delete License Application" name="deleteAppBtn">
            </form>
    <?php }
    ?>
        </div> 
    </div>
    <?php
        }else{
    ?>
    <div class="container">
    <h1 class="dashboard-table-heading">Apply for a New License</h1>
        <div class="add-package-container">
            <form name = "license-apply-form" action = "./user-new-license-apply.php"  method = "POST" onsubmit = "return validateApplication();" enctype="multipart/form-data">
                <div class="first-row">
                    <p class = "error-message" id = "error-move-files"><?php echo isset($_SESSION['application-image-error']) ? $_SESSION['application-image-error'] : ''; ?></p>
                    <input class = "inputField" id = "license-name" type="text" placeholder="Enter Full Name" name = "license_name"/><br>
                    <p class = "error-message" id = "error-name"></p>
                    <input class = "inputField" id = "license-address" type="text" placeholder="Enter Address" name = "license_address"/><br>
                    <p class = "error-message" id = "error-address"></p>
                    <select class="inputField" name="license-type" id="license-type">
                        <option value="0" disabled selected>Select License Type</option>
                        <option value="Heavy Vehicle">Heavy Vehicle</option>
                        <option value="Light Vehicle">Light Vehicle</option>
                        <option value="Heavy and Light Vehicle">Heavy and Light Vehicle</option>
                    </select>
                    <p class = "error-message" id = "error-type"></p>
                    <input class = "inputFile file-photo" id = "license-photo" type = "file" name = "license-photo"/><br>
                    <p class = "error-message" id = "error-photo"><?php echo isset($_SESSION['photo-error']) ? $_SESSION['photo-error'] : ''?></p>
                    <input class = "inputFile file-nic" id = "license-nic" type = "file" name = "license-nic"/><br>
                    <p class = "error-message" id = "error-nic"><?php echo isset($_SESSION['nic-error']) ? $_SESSION['nic-error'] : ''?></p>
                    <input class = "inputFile file-birth" id = "license-birth" type = "file" name = "license-birth"/><br>
                    <p class = "error-message" id = "error-birth"><?php echo isset($_SESSION['birth-error']) ? $_SESSION['birth-error'] : ''?></p>
                    <input class = "inputFile file-medical" id = "license-medical" type = "file" name = "license-medical"/><br>
                    <p class = "error-message" id = "error-medical"><?php echo isset($_SESSION['medical-error']) ? $_SESSION['medical-error'] : ''?></p>
                </div>
                <p class="note">Note: Submit all documents in pdf format or upload clear images.</p>
                <div class="second-row">
                    <input class="inputField btn" type="submit" value="Submit the Application" name = "btnGetLicense">
                </div>
            </form>
        </div>
    </div>
    <?php
        }
    ?>
    <script src="../js/user-new-license.js"></script>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>