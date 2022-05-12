<?php 
    require "../includes/config.php";
    session_start();

    if(isset($_SESSION['school_id'])){
        if(isset($_POST['btnEditPkg'])){
            $package_name = $_POST['package_name'];
            $package_price = $_POST['package_price'];
            $package_duration = $_POST['package_duration'];
            $package_description = $_POST['package_description'];
            $package_id = $_POST['package_id'];
            // echo $package_name;

            $sql = "UPDATE Package SET package_name = '$package_name', package_price = '$package_price', description = '$package_description', duration = '$package_duration' WHERE package_id = '$package_id'";
            if($conn->query($sql) === TRUE){
                echo "<script>alert('Package was updated successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }else{
                echo "<script>alert('Package was not updated successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }
        }else{
            header('Location: ./driving-school-dashboard.php');
        }
    }else{
        header("Location: ./driving-school.php");
    }
?>