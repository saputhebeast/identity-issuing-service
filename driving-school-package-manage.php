<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - Package Manage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "stylesheets/driving-school-package-manage.css"/>
    <?php include 'includes/google-font.php';?>
</head>
<body>
    <?php include 'includes/navigation.php'?>
    <div class="container">
        <h1 class="dashboard-table-heading">Driving School Package Manage</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Light- Weight Vehicle</td>
                        <td>LKR: 15000</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus eveniet minima at fugit saepe quas veniam suscipit ut nulla mollitia enim sit nemo alias provident, hic similique consequatur commodi?</td>
                        <td>
                            <button class="a-btn btn-warning" onclick="openForm()">Edit</button>
                            <div class="form-popup update-package-container" id="myForm">
                                <form action="" method = "POST" class="form-container">
                                    <div class="first-row">
                                        <input class = "inputField" type="text" placeholder="Enter Package Name"/><br>
                                        <input class = "inputField" type="text" placeholder="Enter Package Price"/><br>
                                        <textarea class = "inputField" rows="4" cols="50" placeholder="Enter Package Description"></textarea><br>
                                    </div>
                                    <div class="second-row">
                                        <button type="submit" class="a-btn btn-warning">Update</button>
                                        <button type="button" class="a-btn btn-danger" onclick="closeForm()">Close</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <a class = "a-btn btn-warning" href="">Edit</a> -->
                            <a class = "a-btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id = "heading2" class="container">
        <h1 class="dashboard-table-heading">Add New Package</h1>
        <div class="add-package-container">
            <form action="#">
                <div class="first-row">
                    <input class = "inputField" type="text" placeholder="Enter Package Name"/><br>
                    <input class = "inputField" type="text" placeholder="Enter Package Price"/><br>
                    <textarea class = "inputField" rows="4" cols="50" placeholder="Enter Package Description"></textarea><br>
                </div>
                <div class="second-row">
                    <input class="inputField btn" type="submit" value="Add Package">
                </div>
            </form>
        </div>
    </div>
    <style>
        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 3px solid #f1f1f1;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 400px;
            padding: 10px;
            background-color: white;
        }

        /* styling pop up */
        .form-container h1{
            text-align: center;
        }

        .first-row, .second-row, .third-row{
            padding-bottom: 20px;
        }
    </style>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>
</html>