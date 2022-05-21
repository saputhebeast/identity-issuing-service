<?php
    session_start();
    require "../includes/config.php";

    if(isset($_SESSION['school_id'])){
        if(isset($_POST['btnUpdate'])){
            $id = $_SESSION['school_id'];
            $name = $_POST['school-name'];
            $email = $_POST['email'];
            $contactNumber = $_POST['phone-number'];
            $address = $_POST['school_address'];
            $description = $_POST['school_description'];

            $sql = "UPDATE Driving_School SET school_name = '$name', email = '$email', address = '$address', contact = '$contactNumber', description = '$description' WHERE school_id = '$id'";
            if($conn->query($sql) === TRUE){
                echo "<script>alert('Profile details was updated successfully!'); window.location = './driving-school-profile-settings.php'</script>";
            }else{
                echo "<script>alert('Profile details was not updated successfully!'); window.location = './driving-school-profile-settings.php'</script>";
            }
        }else{
            header("Location: ./driving-school-profile-settings.php");
        }
    }else{
        header("Location: ./driving-school.php");
    }
?>