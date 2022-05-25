<?php
    require "../includes/config.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        if(isset($_POST['deleteAppBtn'])){
            $id = $_SESSION['user_id'];
            
            // remove files when delete application
            $sql1 = "SELECT * FROM Application WHERE user_id = '$id'";
            $dataResult = $conn->query($sql1);
            $dataRecords = $dataResult->fetch_assoc();

            $photo = $dataRecords['photo'];
            $nic = $dataRecords['nic'];
            $birth_certificate  = $dataRecords['birth_certificate'];
            $medical_report = $dataRecords['medical_report'];

            $sql = "DELETE FROM Application WHERE user_id = '$id'";
            if($conn->query($sql)){
                unlink($photo);
                unlink($nic);
                unlink($birth_certificate);
                unlink($medical_report);
                echo "<script>alert('Application was deleted successfully!'); window.location = './user-new-license.php'</script>";
            }else{
                echo "<script>alert('Application was not deleted successfully!'); window.location = './user-new-license.php'</script>";
            }
        }else{
            header("Location: ./user-new-license.php");
        }
    }else{
        header("Location: ./user.php");
    }
?>