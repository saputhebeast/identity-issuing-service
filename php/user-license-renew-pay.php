<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        if(isset($_POST['btnRenewPay'])){
            $expired_date = date('Y-m-d', strtotime('+1 year'));
            $sql = "UPDATE License SET expired_date = '$expired_date' WHERE user_id = '$user_id'";
            $result = $conn->query($sql);
            if($result){
                echo "<script>alert('License was renewed successfully!'); window.location = './user-dashboard.php'</script>";
            }else{
                echo "<script>alert('License was not renewed successfully!'); window.location = './user-dashboard.php'</script>";
            }
        }else{
            header("Location: ./user-dashboard.php");
        }
    }else{
        header("Location: ./user.php");
    }
?>