<?php
    session_start();
    if(isset($_SESSION['school_id'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - User Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/navigation.php'?>
    <div class="container">
        <h1 class="dashboard-table-heading">Registered User Manage</h1>
        <div class="user-container">
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1243</td>
                        <td>John Doe</td>
                        <td>Colombo 10</td>
                        <td>07654321432</td>
                        <td>
                            <a class = "a-btn btn-warning" href="../php/driving-school-registered-user-schedule.php">Schedule</a>
                            <a class = "a-btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php     
    }else{
        header('Location: ../index.php');
    }
?>