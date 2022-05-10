<?php 
    if(isset($_SESSION['school_id'])){
        header('Location: ./php/driving-school-dashboard.php');
    }else{
        header('Location: ./php/driving-school-login.php');
    }
?>