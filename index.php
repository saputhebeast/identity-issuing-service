<?php  include './includes/remove-session.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLMS</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dlms-home-main.css">
    <?php include './includes/google-font.php'?>
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="./images/home/logo/DLMS.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./index.php#services">SERVICES</a></li>
                    <li><a href="./php/dlms-about.php">ABOUT</a></li>
                    <li><a href="./php/dlms-course.php">COURSE</a></li>
                    <li><a href="./php/dlms-contact.php">CONTACT</a></li>
                    <li><a href="./index.php#log">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>Driving License Management System</h1>
            <p>"DLMS" (Driving License Management System) is an online driving license issuing service.<br> 
                This system helps customers get their license easier and faster, and driving school owners can advertise their course among the<br>
                customers by posting classes in the courses section.</p>
            <a href="./php/dlms-about.php" class="hero-btn">Know More</a>
        </div>
    </section>

    <!-- log in -->
    <section class="log" id="log">
        <h1>Log In to the System</h1>
        <p>You can Log into the system according to your requirement and role using the below mentioned portals</p>

        <div class="row">
            <div class="log-col">
                <h2><a href="./php/user.php" class="underline-animation a-remove">User Login</a></h2>
                <p>Log into the system to discover our more services and get your work done easier and faster. </p>
            </div>
            <div class="log-col">
                <h2><a href="./php/admin.php" class="underline-animation a-remove">Admin Login</a></h2>
                <p>Admins who are part of our system who manages all the activities can log in through this portal.</p>
            </div>
            <div class="log-col">
                <h2><a href="./php/driving-school.php" class="underline-animation a-remove">School Login</a></h2>
                <p>Driving School Advertisers can login through this portal for their publication purposes. </p>
            </div>
        </div>
    </section>

    <!-- branch -->
    <section class="branch">
        <h1>OUR ISLAND WIDE BRANCHES</h1>
        <p>Our highly active branches are located all over the country to make your work done efficiently.</p>
        
        <div class="row">
            <div class="branch-col">
                <img src="./images/home/branch/colombo.jpg" alt="">
                <div class="layer">
                    <h3>COLOMBO</h3>
                </div>
            </div>
            <div class="branch-col">
                <img src="./images/home/branch/gampaha.png" alt="">
                <div class="layer">
                    <h3>GAMPAHA</h3>
                </div>
            </div>
            <div class="branch-col">
                <img src="./images/home/branch/kandy.jpg" alt="">
                <div class="layer">
                    <h3>KANDY</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="services" id="services">
        <h1>OUR SERVICES</h1>
        <p>Multiple of servises are avaliable in our system mainly such as New License Registartion, License Renewal, Applying for Foriegn License etc according to your requirements. </p>
        <div class="row">
            <div class="services-col">
                <img src="./images/home/service/new.jpg" alt="">
                <h2><a href="./php/user-new-license.php" class="a-remove underline-animation">Local License</a></h2>
                <p>If you haven't got your License yet register through new license registration and we will offer a faster and reliable service to obtain your license.</p>
            </div>
            <div class="services-col">
                <img src="./images/home/service/renew.jpg" alt="">
                <h2><a href="./php/user-renew-license.php" class="a-remove underline-animation">Renew License</a></h2>
                <p>If you want any renewal of your license register through License renewal and we will offer a faster and reliable service to renew your license. </p>
            </div>
            <div class="services-col">
                <img src="./images/home/service/foreign.jpg" alt="">
                <h2><a href="./php/user-new-license.php" class="a-remove underline-animation">Foreign License</a></h2>
                <p>If you want to apply for foriegn license register through Foreign License and we will offer a faster and reliable service to obtain a foriegn license</p>

            </div>
        </div>
    </section>

    <!-- review -->
    <section class="review">
        <h1>What Our Customers Says</h1>
        <p>You can convey your honest opinions towards our services and if there are any suggestions for our improvments. </p>
        <div class="row">
            <div class="review-col">
                <img src="./images/home/review/ameesha.jpg" alt="">
                <div>
                    <p>This is the head office or the center of  Motor Traffic Department commonly known as 'license office'. It caters all your needs with regard to obtaining a new driving license or renewing. It's the main hub in the area for issuing license and is quite busy during its working hours. You better know all the details of the work you have to do in order to take the license before coming here.</p>
                    <h3>Ameesha Akalanka</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="review-col">
                <img src="./images/home/review/gayashan.jpg" alt="">
                <div>
                    <p>Today my experience was too good. Firstly I did my registration in 22th July & my date was got on 5th August. When I go to RMV and I got my trail date withing one hour. It was a actual improvement of a government departments. When my 1st experience with RMV too much bad. I've in there on 7 am and I got my trail date around 3 pm. "but the main problem is date not givin within a week"</p>
                    <h3>Gayashan Chamikara</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- call to action -->
    <section class="cta">
        <h1>Enroll For Our Partner's Driving School Cources</h1>
        <a href="./php/dlms-course.php" class="hero-btn">EXPLORE COURCES</a>
    </section>

    <?php include './includes/footer.php'?>
</body>
</html>