<?php 
    require "../includes/config.php";
    session_start();
    if(isset($_SESSION['school_id'])){
        if(isset($_POST['deleteBtn'])){
            $id = $_SESSION['school_id'];
            $sql1 = "DELETE FROM Driving_School WHERE school_id = '$id'";
            $sql2 = "DELETE FROM Package WHERE package_id = '$id'";
            if(($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)){
                session_destroy();
                echo "<script>alert('Account was deleted successfully!'); window.location = './driving-school.php'</script>";
            }else{
                echo "<script>alert('Account was not deleted successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }
        }else{
            header("Location: ./driving-school-dashboard.php");
        }
    }else{
        header("Location: ./driving-school.php");
    }
?>