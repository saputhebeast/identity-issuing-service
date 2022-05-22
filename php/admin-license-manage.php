<?php
    session_start();
    require "../includes/config.php";
    if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator- License Application Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-dashboard.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/driving-school-package-manage.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/user-new-license.css"/>
    <?php include '../includes/google-font.php';?>
</head>
<body>
    <!-- 
        admin navigation
    -->
    <?php include '../includes/admin-navigation.php'?>
    <div class="container">
        <h1 class="dashboard-table-heading">License Application Manage- New Applications</h1>
        <div class="table-container">
            <?php 
                $sql = "SELECT * FROM Application WHERE application_status = 'Pending'";
                $result = $conn->query($sql);
                if((!empty($result)) && ($result->num_rows > 0)){
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['full_name']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['license_type']?></td>
                        <td>
                            <form action="./admin-license-application-view.php?application_id=<?php echo $row['application_id'] ?>" method="POST">
                                <input class="a-btn btn-warning" type="submit" value="View Full Application" name = "btnView">
                            </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php
                }else{
                    echo "<h3 class = 'alert alert-danger'>No new applications to show!</h3>";
                }
            ?>
        </div>
    </div>
    <div class="container">
        <h1 class="dashboard-table-heading">License Application Manage- Completed</h1>
        <div class="table-container">
            <?php 
                $sql = "SELECT * FROM Application WHERE application_status = 'Success'";
                $result = $conn->query($sql);
                if((!empty($result)) && ($result->num_rows > 0)){
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['full_name'];?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['license_type'] ?></td>
                        <td>
                            <form action="./admin-license-complete-application-view.php?application_id=<?php echo $row['application_id'] ?>" method="POST">
                                <input class="a-btn btn-warning" type="submit" value="View Full Application" name = "btnEdit">
                            </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php
                }else{
                    echo "<h3 class = 'alert alert-danger'>No completed applications to show!</h3>";
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php 
    }else{
        header('Location: ./user.php');
    }
?>