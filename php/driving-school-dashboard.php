<?php
    session_start();
    if(isset($_SESSION['school_id'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/driving-school-navigation.php'?>
    <div class = "container">
        <div class="row">
            <div class="column column-1">
                <div class="content">
                    <i class="fa-solid fa-users fa-4x"></i>
                    <h1>Registered Users Count</h1>
                    <h2 id="count">56</h2>
                </div>
            </div>
            <div class="column column-2">
                <div class="content">
                    <i class="fa-solid fa-book fa-4x"></i>
                    <h1>Listed Courses Count</h1>
                    <h2 id="count">6</h2>
                </div>
            </div>
            <div class="column column-3">
                <div class="content">
                    <i class="fa-solid fa-ban fa-4x"></i>
                    <h1>Unpublished Courses Count</h1>
                    <h2 id="count">2</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-4">
                <div class="shortcut">
                    <i class="fa-solid fa-box-archive fa-2x"></i>
                    <!-- https://www.30secondsofcode.org/css/s/hover-underline-animation -->
                    <h1><a href="#" class="underline-animation">Package Manage</a></h1>
                </div>
            </div>
            <div class="column column-5">
                <div class="shortcut">
                    <i class="fa-solid fa-user-gear fa-2x"></i>
                    <h1><a href="#" class="underline-animation">Registered User Manage</a></h1>
                </div>
            </div>
            <div class="column column-6">
                <div class="shortcut">
                    <i class="fa-solid fa-user-pen fa-2x"></i>
                    <h1><a href="../php/driving-school-package-manage.php#heading2" class="underline-animation">Add Package</a></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    }else{
        header('Location: ./driving-school.php');
    }
?>