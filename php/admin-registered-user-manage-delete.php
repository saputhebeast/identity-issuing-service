<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
        if(isset($_POST['deleteBtn'])){
            $id = $_POST['user_id'];
            $sql = "DELETE FROM User WHERE user_id = '$id'";
            if($conn->query($sql)){
                echo "<script>alert('User was deleted successfully!'); window.location = './admin-registered-user-manage.php'</script>";
            }else{
                echo "<script>alert('User was not deleted successfully!'); window.location = './admin-registered-user-manage.php'</script>";
            }
        }else{
            header("Location: ./admin-dashboard.php");
        }
    }else{
        header("Location: ./admin.php");
    }
?>