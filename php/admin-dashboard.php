<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <!-- 
        admin navigation

    -->
    <?php include '../includes/admin-navigation.php'?>
    <div class = "container">
        <div class="row">
            <div class="column column-1">
                <div class="content">
                    <?php
                        $sql1 = "SELECT * FROM User";
                        $result1 = $conn->query($sql1);
                        if($result1->num_rows != 0){
                            $userCount = $result1->num_rows;
                        }else{
                            $userCount = 0;
                        }
                    ?>
                    <i class="fa-solid fa-users fa-4x"></i>
                    <h1>Registered Users Count</h1>
                    <h2 id="count"><?php echo $userCount ?></h2>
                </div>
            </div>
            <div class="column column-2">
                <div class="content">
                    <?php
                        $sql2 = "SELECT * FROM Package";
                        $result2 = $conn->query($sql2);
                        if($result2->num_rows != 0){
                            $packageCount = $result2->num_rows;
                        }else{
                            $packageCount = 0;
                        }
                    ?>
                    <i class="fa-solid fa-book fa-4x"></i>
                    <h1>Listed Courses Count</h1>
                    <h2 id="count"><?php echo $packageCount ?></h2>
                </div>
            </div>
            <div class="column column-3">
                <div class="content">
                    <?php
                        $sql3 = "SELECT * FROM Application WHERE application_status = 'Pending'";
                        $result3 = $conn->query($sql3);
                        if($result3->num_rows != 0){
                            $pending = $result3->num_rows;
                        }else{
                            $pending = 0;
                        }
                    ?>
                    <i class="fa-solid fa-pause fa-4x"></i>
                    <h1>Pending Applications</h1>
                    <h2 id="count"><?php echo $pending ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-4">
                <div class="shortcut">
                    <i class="fa-solid fa-box-archive fa-2x"></i>
                    <!-- https://www.30secondsofcode.org/css/s/hover-underline-animation -->
                    <h1><a href="./admin-license-manage.php" class="underline-animation">Admin License Manage</a></h1>
                </div>
            </div>
            <div class="column column-5">
                <div class="shortcut">
                    <i class="fa-solid fa-user-gear fa-2x"></i>
                    <h1><a href="./admin-registered-user-manage.php" class="underline-animation">Registered User Manage</a></h1>
                </div>
            </div>
            <div class="column column-6">
                <div class="shortcut">
                    <i class="fa-solid fa-user-pen fa-2x"></i>
                    <h1><a href="./admin-driving-school-manage.php" class="underline-animation">Driving School Manage</a></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    }else{
        header('Location: ./admin.php');
    }
?>