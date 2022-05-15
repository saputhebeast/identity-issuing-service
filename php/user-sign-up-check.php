<?php
    require "../includes/config.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        header('Location: ./user-dashboard.php');
    }
    if(isset($_POST['uSignUpBtn'])){
        $password = $_POST['password'];
        $phoneNumber = $_POST['phone-number'];
        $email = $_POST['email'];
        $name = $_POST['user-name'];
        $address = $_POST['home-address'];

        // echo $name;
        // echo $email;
        // echo $phoneNumber;
        // echo $address;
        // echo $password;

        // https://www.php.net/manual/en/function.password-hash.php
        // hash the password using default algorithm (current BCRYPT)
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO User(user_id, name, email, contact, address, password) VALUES 
        (DEFAULT, '$name', '$email', $phoneNumber, '$address', '$hashPassword');";

        if($conn->query($sql) === TRUE){
            echo "<script>alert('Account was created successfully!'); window.location = './user-login.php'</script>";
        }else{
            echo "<script>alert('Account was not created successfully!'); window.location = './user-sign-up.php'</script>";
        }
    }else{
        header('Location: ./user.php');
    }
?>