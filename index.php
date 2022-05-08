<?php 
    if(isset($_SESSION['username'])){
        header('Location: ./php/driving-school-dashboard.php');
    }else{
        header('Location: ./php/driving-school-login.php');
    }
?>