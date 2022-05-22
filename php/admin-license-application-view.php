<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
        if($_POST['btnView']){
            $application_id = $_GET['application_id'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator- View Full Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-package-manage.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/admin-license-application-view.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/admin-navigation.php'?>
    <div class="container">
        <h1 class="dashboard-table-heading">License Application Manage- User Application Details</h1>
        <div class="table-container">
            <?php 
                $sql = "SELECT * FROM Application WHERE application_id = '$application_id'";
                $result = $conn->query($sql);
                if((!empty($result)) && ($result->num_rows > 0)){
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Application Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $row = $result->fetch_assoc();
                        $user_id = $row['user_id'];
                    ?>
                    <tr>
                        <td>Full Name: <?php echo $row['full_name'];?></td>
                    </tr>
                    <tr>
                        <td>Address: <?php echo $row['address'] ?></td>
                    </tr>
                    <tr>
                        <td>License Type: <?php echo $row['license_type'] ?></td>
                    </tr>
                    <tr>
                        <td>Photo: <a href="<?php echo $row['photo'] ?>" target="_blank" class="a-remove">View Photo</a></td>
                    </tr>
                    <tr>
                        <td>NIC: <a href="<?php echo $row['nic'] ?>" target="_blank" class="a-remove">View NIC</a></td>
                    </tr>
                    <tr>
                        <td>Birth Certificate: <a href="<?php echo $row['birth_certificate'] ?>" target="_blank" class="a-remove">View Birth Certificate</a></td>
                    </tr>
                    <tr>
                        <td>Medical Report: <a href="<?php echo $row['medical_report'] ?>" target="_blank" class="a-remove">View Medical Report</a></td>
                    </tr>
                </tbody>
            </table>
            <form class="application_edit" action="./admin-license-application-delete.php" method="POST">
                <input type="hidden" value="<?php echo $application_id ?>" name="application_id">
                <input class = "inputField btn-danger" type="submit" value="Delete Application" name="deleteApplicationBtn">
            </form>
            <?php
                }
            ?>
        </div>
    </div>

    <div class="container">
        <h1 class="dashboard-table-heading">License Application Manage- Create New License</h1>
        <div class="add-package-container">
            <form class="application_edit" action="./user-license-application-generate.php" method="POST">
                <input type="hidden" name="application_id" value="<?php echo $application_id ?>">
                <input class = "inputField btn" type="submit" value="Generate New License" name="btnGetLicense">
            </form>
        </div>
    </div>
</body>
</html>
<?php
        }else{
            header('Location: ./admin-dashboard.php');
        }   
    }else{
        header('Location: ./admin.php');
    }
?>