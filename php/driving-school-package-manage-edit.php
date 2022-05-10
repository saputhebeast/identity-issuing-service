<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['username'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - Package Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-package-manage.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/navigation.php'?>
    <div id = "heading2" class="container">
        <h1 class="dashboard-table-heading">Driving School Training Package Edit</h1>
        <div class="add-package-container">
            <?php 
                if(isset($_POST['btnEdit'])){
                    $package_id = $_GET['package_id'];
                    $sql = "SELECT * FROM Package WHERE package_id = '$package_id'";
                    $result = $conn->query($sql);
                    $data = $result->fetch_assoc();

            ?>
                    <form name = "package-add-form" action = "../php/driving-school-package-manage-edit-check.php" onsubmit = "return validateForm();" method = "POST">
                        <div class="first-row">
                            <input type="hidden" name="package_id" value="<?php echo $package_id ?>">
                            <input class = "inputField" id = "package_name" type="text" placeholder="Enter Package Name" name = "package_name" value="<?php echo $data['package_name']?>"/><br>
                            <p class = "error-message" id = "error-name"></p>
                            <input class = "inputField" id = "package_price" type="text" placeholder="Enter Package Price" name = "package_price" value="<?php echo $data['package_price']?>"/><br>
                            <p class = "error-message" id = "error-price"></p>
                            <input class = "inputField" id = "package_duration" type = "text" placeholder="Enter Training Duration" name = "package_duration" value="<?php echo $data['duration']?>"/><br>
                            <p class = "error-message" id = "error-duration"></p>
                            <textarea class = "inputField" id = "package_description" rows="4" cols="50" placeholder="Enter Package Description" name = "package_description"><?php echo $data['description']?></textarea><br>
                            <p class = "error-message" id = "error-description"></p>
                        </div>
                        <div class="second-row">
                            <input class="inputField btn" type="submit" value="Update Package" name = "btnEditPkg">
                        </div>
                    </form>
            <?php 
                }else{
                    header("Location: ./driving-school-package-manage.php");
                } 
            ?>
        </div>
    </div>
    <script src = "../js/driving-school-package-manage.js"></script>
</body>
</html>
<?php   
    }else{
        header('Location: ../index.php');
    }
?>