<?php 
    if(isset($_SESSION['user_id'])){
        header('Location: ./user-dashboard.php');
    }else{
        header('Location: ./user-login.php');
    }
?>