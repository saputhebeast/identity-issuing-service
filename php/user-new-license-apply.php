<?php 
    require "../includes/config.php";
    session_start();
    if(isset($_SESSION['user_id'])){
        if(isset($_POST['btnGetLicense'])){
            $user_id = $_SESSION['user_id'];
            $name = $_POST["license_name"];
            $address = $_POST["license_address"];
            $type = $_POST["license-type"];
            $photo = $_FILES["license-photo"];
            $nic = $_FILES["license-nic"];
            $birthCertificate = $_FILES["license-birth"];
            $medical = $_FILES["license-medical"];

            // echo $name;
            // echo "<br>";
            // echo $address;
            // echo "<br>";
            // echo $type;
            // echo "<br>";
            // echo $photo;
            // echo "<br>";
            // echo $nic;
            // echo "<br>";
            // echo $birthCertificate;
            // echo "<br>";
            // echo $medical;
            // echo "<br>";

            // print_r($photoStatus);
            // echo "<br>";
            // print_r($nicStatus);
            // echo "<br>";
            // print_r($birthCertificateStatus);
            // echo "<br>";
            // print_r($medicalStatus);
            // echo "<br>";

            $photoData = insertImage($photo);
            $photoError = $photoData[0];
            $_SESSION['photo-error'] = $photoError;
            $photoStatus = $photoData[1];
            $photoFileName = $photoData[2];

            $nicData = insertImage($nic);
            $nicError = $nicData[0];
            $_SESSION['nic-error'] = $nicError;
            $nicStatus = $nicData[1];
            $nicFileName = $nicData[2];
            
            $birthCertificateData = insertImage($birthCertificate);
            $birthCertificateError = $birthCertificateData[0];
            $_SESSION['birth-error'] = $birthCertificateError;
            $birthCertificateStatus = $birthCertificateData[1];
            $birthCertificateFileName = $birthCertificateData[2];
            
            $medicalData = insertImage($medical);
            $medicalError = $medicalData[0];
            $_SESSION['medical-error'] = $medicalError;
            $medicalStatus = $medicalData[1];
            $medicalFileName = $medicalData[2];

            // Check if $uploadOk is set to 1
            if ($photoStatus == 1 && $nicStatus == 1 && $birthCertificateStatus == 1 && $medicalStatus == 1) {
                // move the file
                if ((move_uploaded_file($photo["tmp_name"], $photoFileName)) && (move_uploaded_file($nic["tmp_name"], $nicFileName)) && (move_uploaded_file($birthCertificate["tmp_name"], $birthCertificateFileName)) && (move_uploaded_file($medical["tmp_name"], $medicalFileName))) {

                    $sql = "INSERT INTO Application(application_id, user_id, full_name, address, license_type, photo, nic, birth_certificate, medical_report, application_status) 
                    VALUES(DEFAULT, '$user_id', '$name', '$address', '$type', '$photoFileName', '$nicFileName', '$birthCertificateFileName', '$medicalFileName', 'Pending')";
                    
                    if($conn->query($sql) === TRUE){
                        unset($_SESSION['photo-error']);
                        unset($_SESSION['nic-error']);
                        unset($_SESSION['birth-error']);
                        unset($_SESSION['medical-error']);
                        
                        if(isset($_SESSION['application-image-error'])){
                            unset($_SESSION['application-image-error']);
                        }

                        echo "<script>alert('Application was submitted successfully!'); window.location = './user-dashboard.php'</script>";
                    }else{
                        unlink($photoFileName);
                        unlink($nicFileName);
                        unlink($birthCertificateFileName);
                        unlink($medicalFileName);

                        echo "<script>alert('Application was not submitted successfully!'); window.location = './user-new-license.php'</script>";
                    }
                } else {
                    $_SESSION['application-image-error'] = "Sorry, there was an error uploading your file.";
                    header("Location: ./user-new-license.php");
                }
            }else{
                header("Location: ./user-new-license.php");
            }


        }else{
            header("Location: ./user-dashboard.php");
        }
    }else{
        header("Location: ./user.php");
    }
?>
<?php 
function insertImage($file){
    $target_dir = "../images/user/applications/";
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $error = '';

    // Check if file already exists
    if (file_exists($target_file)) {
        $error .= "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 12000000) {
        $error .= "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf") {
        $error .= "Sorry, only JPG, JPEG, PNG, PDF files are allowed.";
        $uploadOk = 0;
    }

    $data = array($error, $uploadOk, $target_file);

    // return values with array
    return $data;
}
?>