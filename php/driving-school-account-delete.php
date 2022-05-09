<?php 
    require "../includes/config.php";
    session_start();
    if(isset($_SESSION['username'])){
        if(isset($_POST['deleteBtn'])){
            $id = $_SESSION['school_id'];
            $sql = "DELETE FROM Driving_School WHERE school_id = '$id'";
            if($conn->query($sql) === TRUE){
                session_destroy();
                echo "<script>alert('Account was deleted successfully!'); window.location = '../index.php'</script>";
            }else{
                echo "<script>alert('Account was not deleted successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }
        }else{
            header("Location: ./driving-school-dashboard.php");
        }
    }else{
        header("Location: ../index.php");
    }
?>