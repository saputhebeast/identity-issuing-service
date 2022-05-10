<?php 
    session_start();
    if(isset($_SESSION['school_id'])){
        if(isset($_POST['btnOut'])){
            session_destroy();
            header("Location: ../index.php");
        }else{
            header("Location: ../php/driving-school-dashboard.php");
        }
    }else{
        header("Location: ./driving-school-dashboard.php");
    }
?>