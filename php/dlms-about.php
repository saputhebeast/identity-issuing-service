<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLMS</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dlms-home-main.css">
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
        <h1>About Us</h1>
    </section>

    <!-- about us content -->
    <section class = "about-us">
        <div class="row">
            <div class="about-col">
                <h1>Driving License Management System</h1>
                <p>"DLMS" (Driving License Management System) is an online driving license issuing service. This system helps customers get their license easier and faster, and driving school owners can advertise their course among the customers by posting classes in the courses section.</p>
                <p>When a guest user visits the website, the homepage is displayed. The default language is “English,” and the currency is in Sri Lankan Rupees. If users want to change language, they can change according to their wishes. </p>
                <p>The homepage displays login methods such as user login, admin login, and driving school login. Users can easily select and log in to the system. If they don’t have an account, they can create it. Also, if they don’t remember the password, they can change it. They can see the services that they can get from the DLMS. Users have three options: new license registration, license renewal, and foreign license. When the guest login to the system as either admin or driving school, they will redirect to the dashboard. In the dashboard, they can manage their services.</p>
                <p>Admin user has control of all the functionalities in the system. He can examine all the ongoing changes in the system, and he/she can accept or reject them by checking with the system standards, rules, and regulations. For example, they can register a new user to obtain a new license by clarifying the user details or reject a learner’s company that is requesting the membership of DLMS with admin authority for their section. Moreover, they can update the system, record all the payment details and make reports of the information. After that admin can make further decisions by incorporating with other agents.</p>
                <p>Learner’s advertising admin is responsible for all the advertising purposes, mainly for leaner's advertisements and other essential advertisements related to the website. They are also eligible for student registrations for driving schools and make necessary payments from students known for driving school registrations. Also, they are responsible for scheduling the timetables for classes and publishing notices related to driving schools.</p>
            </div>
            <div class="about-col">
                <img src="../images/home/about.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include '../includes/footer.php'?>
</body>
</html>