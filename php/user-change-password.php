<?php
    session_start();
    require "../includes/config.php";

    if(isset($_SESSION['user_id'])){
        if(isset($_POST['changeBtn'])){
            $id = $_SESSION['user_id'];
            $currentPassword = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];
            
            // echo $currentPassword;
            // echo '<br>';
            // echo $newPassword;
            
            $sql = "SELECT * FROM User WHERE user_id = '$id'";
            $result = $conn->query($sql);
            $data = $result->fetch_assoc();
            if(password_verify($currentPassword, $data['password'])){
                $hashPass = password_hash($newPassword, PASSWORD_DEFAULT);
                $change = "UPDATE User SET password = '$hashPass' WHERE user_id = '$id'";
                if($conn->query($change) === TRUE){
                    // change the password
                    if(isset($_SESSION['change-error'])){
                        unset($_SESSION['change-error']);
                    }
                    echo "<script>alert('Password was updated successfully!'); window.location = './user-profile-settings.php'</script>";
                }else{  
                    // cant change the password
                    echo "<script>alert('Password was not updated successfully!'); window.location = './user-profile-settings.php'</script>";
                }
            }else{  
                // something went wrong
                $_SESSION['change-error'] = 'Invalid Password!';
                header("Location: ./user-profile-settings.php");
            }
        }else{
            header("Location: ./user-dashboard.php");
        }
    }else{
        header("Location: ./user.php");
    }
?>