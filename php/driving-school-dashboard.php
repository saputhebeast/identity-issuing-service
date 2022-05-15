<?php
    include '../includes/remove-session.php';
    include '../includes/config.php';
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
                    <i class="fa-solid fa-book fa-4x"></i>
                    <h1>Listed Package Count</h1>
                    <?php 
                        $sql = "SELECT * FROM Package WHERE school_id = '$_SESSION[school_id]'";
                        $result = $conn->query($sql);
                        $packageCount = $result->num_rows;
                    ?>
                    <h2 id="count"><?php echo $packageCount ?></h2>
                </div>
            </div>
            <div class="column column-2">
                <div class="content">
                    <i class="fa-solid fa-line-chart fa-4x"></i>
                    <h1>Highest Priced Course</h1>
                    <?php 
                        $sql = "SELECT MAX(package_price) AS 'max' FROM Package WHERE school_id = '$_SESSION[school_id]'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0 && !empty($result)){
                            $data = $result->fetch_assoc();
                            $maxPackage = $data['max'];
                        }
                    ?>
                    <h2 id="count">LKR: <?php echo number_format($maxPackage) ?></h2>
                </div>
            </div>
            <div class="column column-3">
                <div class="content">
                    <i class="fa-solid fa-calculator fa-4x"></i>
                    <h1>Average Course Price</h1>
                    <?php 
                        $sql = "SELECT AVG(package_price) AS 'avg' FROM Package WHERE school_id = '$_SESSION[school_id]'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0 && !empty($result)){
                            $data = $result->fetch_assoc();
                            $avgPackage = $data['avg'];
                        }
                    ?>
                    <h2 id="count">LKR: <?php echo number_format($avgPackage) ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-4">
                <div class="shortcut">
                    <i class="fa-solid fa-box-archive fa-2x"></i>
                    <!-- https://www.30secondsofcode.org/css/s/hover-underline-animation -->
                    <h1><a href="./driving-school-package-manage.php" class="underline-animation">Package Manage</a></h1>
                </div>
            </div>
            <div class="column column-5">
                <div class="shortcut">
                    <i class="fa-solid fa-user-gear fa-2x"></i>
                    <h1><a href="./driving-school-profile-settings.php" class="underline-animation">Update Profile Details</a></h1>
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