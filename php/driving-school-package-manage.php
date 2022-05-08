<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Driving School - Package Manage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-package-manage.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <?php include '../includes/navigation.php'?>
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
                            <!-- https://www.w3schools.com/howto/howto_js_popup_form.asp -->
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
    <script src = "../js/driving-school-page-manage.js"></script>
</body>
</html>