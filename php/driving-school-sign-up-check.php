<?php
    require "../includes/config.php";
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: ./driving-school-dashboard.php');
    }
    if(isset($_POST['signUpBtn'])){
        $password = $_POST['password'];
        $phoneNumber = $_POST['phone-number'];
        $email = $_POST['email'];
        $school_name = $_POST['school-name'];

        // https://www.php.net/manual/en/function.password-hash.php
        // hash the password using default algorithm (current BCRYPT)
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO Driving_School(school_id, school_name, email, address, contact, password, description) VALUES (DEFAULT, '$school_name', '$email', '-', $phoneNumber, '$hashPassword', '-')";

        if($conn->query($sql) === TRUE){
            echo "<script>alert('Account was created successfully!'); window.location = './driving-school-login.php'</script>";
        }else{
            echo "<script>alert('Account was not created successfully!'); window.location = './driving-school-sign-up.php'</script>";
        }

    }else{
        header('Location: ./driving-school.php');
    }
?>