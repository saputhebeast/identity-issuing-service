<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - User Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-main.css"/>
    <?php include 'includes/google-font.php';?>
</head>
<body>
    <?php include 'includes/navigation.php'?>
    <div class="container">
        <h1>Registered User Manage</h1>
        <div class="user-container">
            <table border="1">
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Manage</th>
                </tr>
                <tr>
                    <td>1243</td>
                    <td>John Doe</td>
                    <td>Colombo 10</td>
                    <td>07654321432</td>
                    <td>
                        <a href="driving-school-registered-user-schedule.php?ID=1243">Schedule</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1244</td>
                    <td>Peter Parker</td>
                    <td>Colombo 7</td>
                    <td>0764354790</td>
                    <td>
                        <a href="driving-school-registered-user-schedule.php?ID=1244">Schedule</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>