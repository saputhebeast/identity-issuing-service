<?php
    require "../includes/config.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        if(isset($_POST['deleteAppBtn'])){
            $id = $_SESSION['user_id'];
            $sql = "DELETE FROM Application WHERE user_id = '$id";
            if($conn->query($sql)){
                echo "<script>alert('Application was deleted successfully!'); window.location = './user-new-license.php'</script>";
            }else{
                echo "<script>alert('Application was deleted successfully!'); window.location = './user-new-license.php'</script>";
            }
        }else{
            header("Location: ./user-new-license.php");
        }
    }else{
        header("Location: ./user.php");
    }
?>