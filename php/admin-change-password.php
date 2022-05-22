<?php
    session_start();
    require "../includes/config.php";

    if(isset($_SESSION['admin_id'])){
        if(isset($_POST['changeBtn'])){
            $id = $_SESSION['admin_id'];
            $currentPassword = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];
            
            // echo $currentPassword;
            // echo '<br>';
            // echo $newPassword;
            
            $sql = "SELECT * FROM Administrator WHERE admin_id = '$id'";
            $result = $conn->query($sql);
            $data = $result->fetch_assoc();
            if(password_verify($currentPassword, $data['password'])){
                $hashPass = password_hash($newPassword, PASSWORD_DEFAULT);
                $change = "UPDATE Administrator SET password = '$hashPass' WHERE admin_id = '$id'";
                if($conn->query($change) === TRUE){
                    // change the password
                    if(isset($_SESSION['change-error'])){
                        unset($_SESSION['change-error']);
                    }
                    echo "<script>alert('Password was updated successfully!'); window.location = './admin-profile-settings.php'</script>";
                }else{  
                    // cant change the password
                    echo "<script>alert('Password was not updated successfully!'); window.location = './admin-profile-settings.php'</script>";
                }
            }else{  
                // something went wrong
                $_SESSION['change-error'] = 'Invalid Password!';
                header("Location: ./admin-profile-settings.php");
            }
        }else{
            header("Location: ./admin-dashboard.php");
        }
    }else{
        header("Location: ./admin.php");
    }
?>