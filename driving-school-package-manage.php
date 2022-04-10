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
        <h1>Driving School Package Manage</h1>
        <div class="table-container">
            <table border="1" style="width: 100%;">
                <tr>
                    <th>Package</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Manage</th>
                </tr>
                <tr>
                    <td>Light- Weight Vehicle</td>
                    <td>LKR: 15000</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus eveniet minima at fugit saepe quas veniam suscipit ut nulla mollitia enim sit nemo alias provident, hic similique consequatur commodi?</td>
                    <td>
                        <form action="#">
                            <input type="submit" value="Edit"/>
                        </form>
                        <form action="#">
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Heavy- Weight Vehicle</td>
                    <td>LKR: 20000</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus eveniet minima at fugit saepe quas veniam suscipit ut nulla mollitia enim sit nemo alias provident, hic similique consequatur commodi?</td>
                    <td>
                        <form action="#">
                            <input type="submit" value="Edit"/>
                        </form>
                        <form action="#">
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Light/Heavy- Weight Vehicle</td>
                    <td>LKR: 25000</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus eveniet minima at fugit saepe quas veniam suscipit ut nulla mollitia enim sit nemo alias provident, hic similique consequatur commodi?</td>
                    <td>
                        <form action="#">
                            <input type="submit" value="Edit"/>
                        </form>
                        <form action="#">
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container">
        <h1>Add New Package</h1>
        <div class="add-package-container">
            <form action="#">
                <input type="text" placeholder="Enter Package Name"/><br>
                <input type="text" placeholder="Enter Package Price"/><br>
                <input type="type" placeholder="Enter Package Description"/><br>
                <input type="submit" value="Add Package">
            </form>
        </div>
    </div>
</body>
</html>