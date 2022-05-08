<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - User Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-user-schedule.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/navigation.php'?>
    <div class="bg-blur"></div>
    <div class="container">
        <h1 class="dashboard-table-heading">Registered User Schedule</h1>
        <div class="schedule-container">
            <div class="basic-information">
                <p>Student Registration Number: </p>
                <p>Name: </p>
                <p>Address: </p>
                <p>Contact Number: </p>
                <p>Courses: </p>
            </div>
            <div class="classes">
                <h2>Scheduled Sessions</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Starting Time</th>
                            <th>Ending Time</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1243</td>
                            <td>John Doe</td>
                            <td>Colombo 10</td>
                            <td>
                                <button class="a-btn btn-warning" onclick="openForm()">Edit</button>
                                <div class="form-popup" id="myForm">
                                    <form action="" method = "POST" class="form-container">
                                        <div class="first-row">
                                            <h1>Edit- Scheduled Session</h1>
                                        </div>
                                        <p>Enter Date:</p>
                                        <div class="date-time">
                                            <input type="date" min="2022-05-01">
                                        </div>
                                        <p>Enter Starting Time:</p>
                                        <div class="date-time">
                                            <input type="time">
                                        </div>
                                        <p>Enter Ending Time:</p>
                                        <div class="date-time">
                                            <input type="time">
                                        </div>
                                        <div class="third-row">
                                            <button type="submit" class="a-btn btn-warning">Change</button>
                                            <button type="button" class="a-btn btn-danger" onclick="closeForm()">Close</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- <a class = "a-btn btn" href="">Edit</a> -->
                                <a class = "a-btn btn-danger" href="">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="schedule-class">
            <h1 class="dashboard-table-heading">Add a Session</h1>
            <form action="" method="POST">
                <p>Enter Date:</p>
                <div class="date-time">
                    <input type="date" min="2022-05-01">
                </div>
                <p>Enter Starting Time:</p>
                <div class="date-time">
                    <input type="time">
                </div>
                <p>Enter Ending Time:</p>
                <div class="date-time">
                    <input type="time">
                </div>
                <input class="inputField btn-warning" type="submit" value="Make the Appointment">
            </form>
        </div>
    </div>
    <script src = "../js/driving-school-registered-user-schedule.js"></script>
</body>
</html>