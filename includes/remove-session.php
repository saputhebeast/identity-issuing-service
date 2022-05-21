<?php 
    session_start();
    // if user enter wrong credentials and go somewhere, after that if he visit again to the login system, we will remove the previous error message
    if(isset($_SESSION['login-error'])){
        unset($_SESSION['login-error']);
    }

    // password change errors
    if(isset($_SESSION['change-pass-error'])){
        unset($_SESSION['change-pass-error']);
    }

    // driving school course 
    if(isset($_SESSION['image-or-not'])){
        unset($_SESSION['image-or-not']);
    }

    if(isset($_SESSION['image-type'])){
        unset($_SESSION['image-type']);
    }

    if(isset($_SESSION['image-exist'])){    
        unset($_SESSION['image-exist']);
    }

    if(isset($_SESSION['image-size'])){
        unset($_SESSION['image-size']);
    }

    if(isset($_SESSION['image-error'])){
        unset($_SESSION['image-error']);
    }

    // license application errors
    if(isset($_SESSION['photo-error'])){
        unset($_SESSION['photo-error']);
    }
    if(isset($_SESSION['nic-error'])){
        unset($_SESSION['nic-error']);
    }
    if(isset($_SESSION['birth-error'])){
        unset($_SESSION['birth-error']);
    }
    if(isset($_SESSION['medical-error'])){
        unset($_SESSION['medical-error']);
    }
    if(isset($_SESSION['application-image-error'])){
        unset($_SESSION['application-image-error']);
    }
?>