<?php 
    require "../includes/config.php";
    session_start();

    if(isset($_SESSION['school_id'])){
        if(isset($_POST['btnAddPkg'])){
            $package_name = $_POST['package_name'];
            $package_price = $_POST['package_price'];
            $package_duration = $_POST['package_duration'];
            $package_description = $_POST['package_description'];
            $school_id = $_SESSION['school_id'];

            $sql = "INSERT INTO Package VALUES(DEFAULT, '$school_id', '$package_name', '$package_price', '$package_description', '$package_duration')";
            if($conn->query($sql) === TRUE){
                echo "<script>alert('Package was added successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }else{
                echo "<script>alert('Package was not added successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }
        }else{
            header('Location: ./php/driving-school-dashboard.php');
        }
    }else{
        header("Location: ../index.php");
    }
?>