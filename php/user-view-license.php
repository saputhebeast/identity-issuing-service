<?php
    session_start();
    include "../includes/config.php";
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
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
    <?php
        $sql = "SELECT * FROM License WHERE user_id = '$id'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $data = $result->fetch_assoc();
    ?>
    <div class="container">
        <div class="add-package-container">
            <h1>Your License</h1>
            <div class="container-inner">
                <div class="center">
                    <img src="<?php echo $data['user_image'] ?>" alt="">
                </div>
                <div class="inner-text">
                    <p>Full Name: <?php echo $data['user_name'] ?></p>
                    <p>License Type: <?php echo $data['license_type'] ?></p>
                    <p>Create Date: <?php echo $data['create_date'] ?></p>
                    <p>Expired Date: <?php echo $data['expired_date'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
        }else{
    ?>
    <div class = "container">
        <p class="alert alert-success">You do not have a license yet. Please fill and submit a <a href="../php/user-new-license.php" class="license-view">application.</a></p>
    </div>
    <?php
        }
    ?>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>