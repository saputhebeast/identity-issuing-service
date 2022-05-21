<?php
    session_start();
    require "../includes/config.php";

    if(isset($_SESSION['user_id'])){
        if(isset($_POST['btnUpdate'])){
            $id = $_SESSION['user_id'];
            $name = $_POST['user-name'];
            $email = $_POST['user-email'];
            $contactNumber = $_POST['phone-number'];
            $address = $_POST['user-address'];

            $sql = "UPDATE User SET name = '$name', email = '$email', address = '$address', contact = '$contactNumber' WHERE user_id = '$id'";
            
            if($conn->query($sql) === TRUE){
                echo "<script>alert('Profile details was updated successfully!'); window.location = './user-profile-settings.php'</script>";
            }else{
                echo "<script>alert('Profile details was not updated successfully!'); window.location = './user-profile-settings.php'</script>";
            }
        }else{
            header("Location: ./user-profile-settings.php");
        }
    }else{
        header("Location: ./user.php");
    }
?>