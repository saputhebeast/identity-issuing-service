<?php 
    session_start();
    require "../includes/config.php";

    if(isset($_SESSION['school_id'])){
        if(isset($_POST['btnDelete'])){
            $package_id = $_GET['package_id'];
            // echo $package_id;
            $sql = "DELETE FROM package WHERE package_id = '$package_id'";
            if($conn->query($sql)){
                echo "<script>alert('Package was deleted successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }else{
                echo "<script>alert('Package was not deleted successfully!'); window.location = './driving-school-package-manage.php'</script>";
            }
        }else{
            header("Location: ./driving-school-package-manage.php");
        }
    }else{
        header("Location: ./driving-school.php");
    }
?>