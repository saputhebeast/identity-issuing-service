<?php 
    require '../includes/config.php';

    if(isset($_POST['search-btn'])){
        $keyword = $_POST['search-text'];
        $sql = "SELECT D.school_name, D.address, D.contact, D.email, P.package_name, P.package_price, P.description, P.duration, P.image FROM driving_school D, package P WHERE D.school_id = P.school_id AND P.package_name LIKE '%{$keyword}%';";
    }else{
        $sql = "SELECT D.school_name, D.address, D.contact, D.email, P.package_name, P.package_price, P.description, P.duration, P.image FROM driving_school D, package P WHERE D.school_id = P.school_id;";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLMS</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dlms-home-main.css">
    <link rel="stylesheet" href="../css/driving-school-main.css">
    <?php include '../includes/google-font.php'?>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="../index.php"><img src="../images/home/logo/DLMS.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="../index.php#services">SERVICES</a></li>
                    <li><a href="./dlms-about.php">ABOUT</a></li>
                    <li><a href="./dlms-course.php">COURSE</a></li>
                    <li><a href="./dlms-contact.php">CONTACT</a></li>
                    <li><a href="../index.php#log">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <h1>Our Partner's Courses</h1>
    </section>

    <!-- intro -->
    <section class="course">
        <h1>Driving License Management System</h1>
        <p class="course-heading-about">Most recomended all Driving schools in SriLanka are available in one place with a reliable service with affordable prices. All the Practice sessions and learning tututrials are conducted through this<br> Driving schools according to the standards.</p>
    </section>

    <!-- search box -->
    <section class="search">
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input type="text" name="search-text" placeholder="Search Course By Name" class="search-text">
            <button class="course-search-btn" name="search-btn"><i class="fa fa-search fa-2x"></i></button>
        </form>
    </section>

    <!-- packages/courses -->
    <section class = "course">
        <?php 
            $result = $conn->query($sql);
            if(!empty($result) && $result->num_rows > 0){
                while($data = $result->fetch_assoc()){
                    ?>
                        <div class="course-row">
                            <div class="course-col">
                                <div class="text-container">
                                    <h1 class="course-h1"><?php echo $data['school_name'];?></h1>
                                    <h3 class="course-h3"><?php echo $data['package_name'];?></h3>
                                    <p class="course-p"><b>Course Duration: </b><?php echo $data['duration'];?></p>
                                    <p class="course-p"><b>Address: </b><?php echo $data['address'];?></p>
                                    <p class="course-p"><b>Contact: </b><?php echo $data['contact'];?></p>
                                    <p class="course-p"><b>Email: </b><?php echo $data['email'];?></p> 
                                    <p class="course-p"><b>Description: </b><?php echo $data['description'];?></p>
                                    <p class="course-p"><b>Course Price: </b>LKR <?php echo number_format($data['package_price']);?></p>
                                </div>
                            </div>
                            <div class="course-col">
                                <img src=<?php echo $data['image'];?> alt="">
                            </div>
                        </div>
                    <?php
                }
            }else{
                echo "<section class = 'services'><h3 class = 'alert alert-danger'>No courses to show!</h3></section>";
            }
        ?>
    </section>

    <!-- footer -->
    <?php include '../includes/footer.php'?>
</body>
</html>