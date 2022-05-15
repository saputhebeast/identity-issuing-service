<?php 
    session_start();
    if(isset($_SESSION['user_id'])){
        if(isset($_POST['btnOut'])){
            session_destroy();
            header("Location: ./user.php");
        }else{
            header("Location: ./user-dashboard.php");
        }
    }else{
        header("Location: ./user-dashboard.php");
    }
?>