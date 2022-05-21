<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['school_id'])){
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
    <?php include '../includes/driving-school-navigation.php'?>
    <div class="container">
        <h1 class="dashboard-table-heading">Driving School Training Package Manage</h1>
        <div class="table-container">
            <?php 
                $id = $_SESSION['school_id'];
                $sql = "SELECT * FROM Package WHERE school_id = '$id'";
                $result = $conn->query($sql);
                if((!empty($result)) && ($result->num_rows > 0)){
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Package</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>Description</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><img src="<?php echo $row['image']?>" width = "300" height = "200"></td>
                        <td><?php echo $row['package_name'] ?></td>
                        <td>LKR: <?php echo $row['package_price'] ?></td>
                        <td><?php echo $row['duration'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td>
                            <form action="./driving-school-package-manage-edit.php?package_id=<?php echo $row['package_id'] ?>" method="POST">
                                <input class="a-btn btn-warning" type="submit" value="Edit" name = "btnEdit">
                            </form>
                            <form action="./driving-school-package-manage-delete.php?package_id=<?php echo $row['package_id'] ?>" method="POST">
                                <input class="a-btn btn-danger" type="submit" value="Delete" name = "btnDelete">
                            </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php
                }else{
                    echo "<h3 class = 'alert alert-danger'>No packages to show!</h3>";
                }
            ?>
        </div>
    </div>
    <div id = "heading2" class="container">
        <h1 class="dashboard-table-heading">Add New Package</h1>
        <div class="add-package-container">
            <form name = "package-add-form" action = "./driving-school-package-manage-add.php"  method = "POST" onsubmit = "return validateForm();" enctype="multipart/form-data">
                <div class="first-row">
                    <input class = "inputField" id = "package_name" type="text" placeholder="Enter Package Name" name = "package_name"/><br>
                    <p class = "error-message" id = "error-name"></p>
                    <input class = "inputField" id = "package_price" type="text" placeholder="Enter Package Price" name = "package_price"/><br>
                    <p class = "error-message" id = "error-price"></p>
                    <input class = "inputField" id = "package_duration" type = "text" placeholder="Enter Training Duration" name = "package_duration"/><br>
                    <p class = "error-message" id = "error-duration"></p>
                    <textarea class = "inputField" id = "package_description" rows="4" cols="50" placeholder="Enter Package Description" name = "package_description"></textarea><br>
                    <p class = "error-message" id = "error-description"></p>
                    <input class = "inputFile" id = "package_image" type = "file" name = "image"/><br>
                    <p class = "error-message" id = "error-image"></p>
                    <?php
                        $error = '';
                        if(isset($_SESSION['image-or-not'])){
                            $error .= $_SESSION['image-or-not']."<br>";
                        }
                        if(isset($_SESSION['image-type'])){
                            $error .= $_SESSION['image-type']."<br>";
                        }
                        if(isset($_SESSION['image-exist'])){    
                            $error .= $_SESSION['image-exist']."<br>";
                        }
                        if(isset($_SESSION['image-size'])){
                            $error .= $_SESSION['image-size']."<br>";
                        }
                        if(isset($_SESSION['image-error'])){
                            $error .= $_SESSION['image-error']."<br>";
                        }
                    ?>
                    <p class = "error-message" id = "error-upload"><?php echo $error ?></p>
                </div>
                <p class="note">Note: Add only JPG, JPEG, PNG file.</p>
                <div class="second-row">
                    <input class="inputField btn" type="submit" value="Add Package" name = "btnAddPkg">
                </div>
            </form>
        </div>
    </div>
    <script src = "../js/driving-school-package-manage.js"></script>
</body>
</html>
<?php   
    }else{
        header('Location: ./driving-school.php');
    }
?>



