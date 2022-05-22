<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
        if(isset($_POST['deleteBtn'])){
            $id = $_POST['school_id'];
            $sql = "DELETE FROM Driving_School WHERE school_id = '$id'";
            if($conn->query($sql)){
                echo "<script>alert('School was deleted successfully!'); window.location = './admin-driving-school-manage.php'</script>";
            }else{
                echo "<script>alert('School was not deleted successfully!'); window.location = './admin-driving-school-manage.php'</script>";
            }
        }else{
            header("Location: ./admin-dashboard.php");
        }
    }else{
        header("Location: ./admin.php");
    }
?>