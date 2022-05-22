<?php 
    session_start();
    require "../includes/config.php";
    if($_SESSION['admin_id']){
        if(isset($_POST['deleteApplicationBtn'])){
            $application_id = $_POST['application_id'];
            // get application data
            $application = "SELECT * FROM Application WHERE application_id = '$application_id'";
            $result = $conn->query($application);
            $data = $result->fetch_assoc();

            $photo = $data['photo'];
            $nic = $data['nic']; 
            $birth_certificate = $data['birth_certificate']; 
            $medical_report = $data['medical_report'];
            
            $delete = "DELETE FROM Application WHERE application_id = '$application_id'";
            if($conn->query($delete)){
                unlink($photo);
                unlink($nic);
                unlink($birth_certificate);
                unlink($medical_report);
                echo "<script>alert('Application was deleted successfully!'); window.location = './admin-license-manage.php'</script>";
            }else{
                echo "<script>alert('Application was not deleted successfully!'); window.location = './admin-license-manage.php'</script>";
            }
        }else{
            header("Location: ./admin-dashboard.php");
        }
    }else{
        header("Location: ./admin.php");
    }
?>