<?php
    include "../includes/remove-session.php";
    include "../includes/config.php";
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>User - User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <!-- 
        user navigation
    -->
    <?php include '../includes/user-navigation.php'?>
    <div class = "container">
        <div class="row">
            <div class="column column-1">
                <div class="content">
                    <?php 
                        $sql1 = "SELECT * FROM Application WHERE user_id = '$id'";
                        $result1 = $conn->query($sql1);
                        if($result1->num_rows == 1){
                            $data1 = $result1->fetch_assoc();
                            $application_status = $data1['application_status'];
                        }else{
                            $application_status = "-";
                        }
                    ?>
                    <i class="fa-solid fa-users fa-4x"></i>
                    <h1>Application Status</h1>
                    <h2 id="count"><?php echo $application_status?></h2>
                </div>
            </div>
            <div class="column column-2">
                <div class="content">
                    <?php 
                        $sql2 = "SELECT * FROM Application WHERE user_id = '$id'";
                        $result2 = $conn->query($sql2);
                        if($result2->num_rows == 1){
                            $data2 = $result2->fetch_assoc();
                            $license_type = $data2['license_type'];
                        }else{
                            $license_type = "-";
                        }
                    ?>
                    <i class="fa-solid fa-car fa-4x"></i>
                    <h1>Vehicle Type</h1>
                    <h2 id="count"><?php echo $license_type ?></h2>
                </div>
            </div>
            <div class="column column-3">
                <div class="content">
                    <?php 
                        $sql3 = "SELECT * FROM License WHERE user_id = '$id'";
                        $result3 = $conn->query($sql3);
                        if($result3->num_rows == 1){
                            $data3 = $result3->fetch_assoc();
                            $license_expire_date = $data3['expired_date'];
                        }else{
                            $license_expire_date = "-";
                        }
                    ?>
                    <i class="fa-solid fa-exclamation-triangle fa-4x"></i>
                    <h1>License Expiring Date</h1>
                    <h2 id="count"><?php echo $license_expire_date ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-4">
                <div class="shortcut">
                    <i class="fa-solid fa-id-card fa-2x"></i>
                    <!-- https://www.30secondsofcode.org/css/s/hover-underline-animation -->
                    <h1><a href="./user-new-license.php" class="underline-animation">New License</a></h1>
                </div>
            </div>
            <div class="column column-5">
                <div class="shortcut">
                    <i class="fa-solid fa-user-gear fa-2x"></i>
                    <h1><a href="./user-renew-license.php" class="underline-animation">Renew License</a></h1>
                </div>
            </div>
            <div class="column column-6">
                <div class="shortcut">
                    <i class="fa-solid fa-user-pen fa-2x"></i>
                    <h1><a href="./user-view-license.php" class="underline-animation">View License</a></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>