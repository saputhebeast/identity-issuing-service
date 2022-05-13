<?php 
    require "../includes/config.php";
    session_start();

    if(isset($_SESSION['school_id'])){
        if(isset($_POST['btnEditImg'])){
            $packageID = $_POST['package_id'];
            $target_dir = "../images/driving-school/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // https://www.w3schools.com/php/php_file_upload.asp

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check === false) {
                $_SESSION['image-or-not'] = "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                $_SESSION['image-exist'] = "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["image"]["size"] > 2000000) {
                $_SESSION['image-size'] = "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $_SESSION['image-type'] = "Sorry, only JPG, JPEG, PNG files are allowed.";
                $uploadOk = 0;
            }
            // echo "./driving-school-package-manage-edit.php?package_id=$packageID";
            // echo $target_file;

            // Check if $uploadOk is set to 1
            if ($uploadOk == 1) {
                // move the file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE Package SET image = '$target_file' WHERE package_id = '$packageID'";
                    
                    if($conn->query($sql) === TRUE){
                        unset($_SESSION['image-or-not']);
                        unset($_SESSION['image-type']);
                        unset($_SESSION['image-exist']);
                        unset($_SESSION['image-size']);
                        unset($_SESSION['image-error']);

                        echo "<script>alert('Package image was updated successfully!'); window.location = './driving-school-package-manage.php'</script>";
                    }else{
                        echo "<script>alert('Package image was not updated successfully!'); window.location = './driving-school-package-manage.php'</script>";
                    }
                } else {
                    $_SESSION['image-error'] = "Sorry, there was an error uploading your file.";
                    header("Location: ./driving-school-package-manage-edit.php?package_id=$packageID");
                }
            }else{
                header("Location: ./driving-school-package-manage-edit.php?package_id=$packageID");
            }
        }else{
            header('Location: ./driving-school-dashboard.php');
        }
    }else{
        header("Location: ./driving-school.php");
    }
?>