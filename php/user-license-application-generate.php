<?php 
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
        if(isset($_POST['btnGetLicense'])){
            $application_id = $_POST['application_id'];
        
            $applicationSQL = "SELECT * FROM Application WHERE application_id = '$application_id'";
            $result = $conn->query($applicationSQL);
            $applicationData = $result->fetch_assoc();

            $user_id = $applicationData['user_id'];
            $user_name = $applicationData['full_name'];
            $user_image = $applicationData['photo'];
            $license_type = $applicationData['license_type'];
            $create_date = date('Y-m-d');
            $expired_date = date('Y-m-d', strtotime('+1 year'));

            $licenseSQL = "INSERT INTO License(license_id, user_id, user_name, user_image, license_type, create_date, expired_date) VALUES(DEFAULT, '$user_id', '$user_name', '$user_image', '$license_type', '$create_date', '$expired_date')";

            if($conn->query($licenseSQL)){
                $setStatus = "UPDATE Application SET application_status = 'Success' WHERE application_id = '$application_id'";
                $conn->query($setStatus);
                echo "<script>alert('License was created successfully!'); window.location = './admin-license-manage.php'</script>";
            }else{
                echo "<script>alert('License was not created successfully!'); window.location = './admin-license-manage.php'</script>";
            } 
        }else{
            header("Location: ./admin-license-manage.php");
        }
    }else{
        header("Location: ./admin.php");
    }
?>
