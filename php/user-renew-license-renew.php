<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>User - Renew License</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-package-manage.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <!-- 
        user navigation
    -->
    <?php include '../includes/user-navigation.php'?>
    
    <div class="container">
    <h1 class="dashboard-table-heading">License Renewal</h1>
        <div class="add-package-container">
            <p>You have to pay LKR: 2500.00 to renew for 1 year.</p><br>
            <form name = "license-renew-pay-form" action = "./user-license-renew-pay.php"  method = "POST" onsubmit = "return validateApplication();">
                <div class="first-row">
                    <input class = "inputField" id = "card-number" type="text" placeholder="Enter Card Number" name = "card_number"/><br>
                    <p class = "error-message" id = "error-number"></p>
                    <input class = "inputField" id = "card-expire" type="text" placeholder="Enter Card Expired Date" name = "card_expire"/><br>
                    <p class = "error-message" id = "error-expire"></p>
                    <input class = "inputField" id = "card-cvv" type="text" placeholder="Enter CVV" name = "card_cvv"/><br>
                    <p class = "error-message" id = "error-cvv"></p>
                </div>
                <div class="second-row">
                    <input class="inputField btn" type="submit" value="Pay for License Renewal" name = "btnRenewPay">
                </div>
            </form>
        </div>
    </div>
    <script src="../js/user-renew-license-renew.js"></script>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>