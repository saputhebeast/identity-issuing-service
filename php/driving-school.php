<?php 
    if(isset($_SESSION['school_id'])){
        header('Location: ./driving-school-dashboard.php');
    }else{
        header('Location: ./driving-school-login.php');
    }
?>