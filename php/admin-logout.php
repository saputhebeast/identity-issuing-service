<?php 
    session_start();
    if(isset($_SESSION['admin_id'])){
        if(isset($_POST['btnOut'])){
            session_destroy();
            header("Location: ./admin.php");
        }else{
            header("Location: ./admin-dashboard.php");
        }
    }else{
        header("Location: ./admin-dashboard.php");
    }
?>