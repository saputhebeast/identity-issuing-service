<?php 
    require "../includes/config.php";
    session_start();

    if(isset($_SESSION['school_id'])){
        if(isset($_POST['btnAddPkg'])){
            $package_name = $_POST['package_name'];
            $package_price = $_POST['package_price'];
            $package_duration = $_POST['package_duration'];
            $package_description = $_POST['package_description'];
            $school_id = $_SESSION['school_id'];

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

            // Check if $uploadOk is set to 1
            if ($uploadOk == 1) {
                // move the file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $sql = "INSERT INTO Package(package_id, school_id, package_name, package_price, description, duration, image) 
                    VALUES(DEFAULT, '$school_id', '$package_name', '$package_price', '$package_description', '$package_duration', '$target_file')";
                    
                    if($conn->query($sql) === TRUE){
                        if(isset($_SESSION['image-or-not'])){
                            unset($_SESSION['image-or-not']);
                        }
                        if(isset($_SESSION['image-type'])){
                            unset($_SESSION['image-type']);
                        }
                        if(isset($_SESSION['image-exist'])){
                            unset($_SESSION['image-exist']);    
                        }
                        if(isset($_SESSION['image-size'])){
                            unset($_SESSION['image-size']);    
                        }
                        if(isset($_SESSION['image-error'])){
                            unset($_SESSION['image-error']);    
                        }
                        
                        echo "<script>alert('Package was added successfully!'); window.location = './driving-school-package-manage.php'</script>";
                    }else{
                        unlink($target_file);
                        echo "<script>alert('Package was not added successfully!'); window.location = './driving-school-package-manage.php'</script>";
                    }
                } else {
                    $_SESSION['image-error'] = "Sorry, there was an error uploading your file.";
                    header("Location: ./driving-school-package-manage.php");
                }
            }else{
                header("Location: ./driving-school-package-manage.php");
            }
        }else{
            header('Location: ./driving-school-dashboard.php');
        }
    }else{
        header("Location: ./driving-school.php");
    }
?>