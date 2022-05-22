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
    <link rel = "stylesheet" type = "text/css" href = "../css/user-new-license.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <!-- 
        user navigation
    -->
    <?php include '../includes/user-navigation.php'?>
    <?php 
        $sql = "SELECT * FROM License WHERE user_id = '$id'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $data = $result->fetch_assoc();
            $currentDate = date('Y-m-d');
            // $currentDate = date('2024-05-23');
            if($currentDate > $data['expired_date']){
    ?>
            <div class = "container">
                <p class="alert alert-danger">Your license has been expired since <?php echo $data['expired_date'] ?>. Renew your license from here. 
                    <form action="./user-renew-license-renew.php" method="POST">
                        <input class = "inputField btn" id = "renew" type="submit" value="Renew" name="renewLicenseBtn">
                    </form>
                </p>
            </div>
    <?php
            }else{
    ?>
            <div class = "container">
                <p class="alert alert-success">Your license will be expired in <?php echo $data['expired_date'] ?></p>
            </div>
    <?php
            }
    ?>
    <?php
        }else{
            $app = "SELECT * FROM Application WHERE user_id = '$id'";
            $appResult = $conn->query($app);
            if($appResult->num_rows == 1){
    ?>
                <div class = "container">
                    <p class="alert alert-success">You already have a submitted application to get new license.<br> Once the application process is over, your new license will show.<br> You can check it from here.</p>
                </div>
    <?php
            }else{
    ?>
                <div class = "container">
                    <p class="alert alert-success">You do not have a license yet. Please fill and submit a <a href="../php/user-new-license.php" class="license-view">application.</a></p>
                </div>
    <?php
            }
        }
    ?>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>