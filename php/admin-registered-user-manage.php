<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator- Register User Manage</title>
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
        <h1 class="dashboard-table-heading">Register User Manage</h1>
        <div class="table-container">
        <?php 
                $sql = "SELECT * FROM User";
                $result = $conn->query($sql);
                if((!empty($result)) && ($result->num_rows > 0)){
        ?>
            <table>
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>

        <?php
                while($data = $result->fetch_assoc()){
        ?>
                    <tr>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['contact'] ?></td>
                        <td><?php echo $data['address'] ?></td>
                        <td>
                            <form action="./admin-registered-user-manage-delete.php" method="POST">
                                <input type="hidden" value="<?php echo $data['user_id'] ?>" name="user_id">
                                <input class = "inputField btn btn-danger deleteBtn" type="submit" value="Delete" name="deleteBtn">
                            </form>
                        </td>
                    </tr>
            <?php
                    }
            ?>
            </tbody>
            </table>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php   
    }else{
        header('Location: ./admin.php');
    }
?>