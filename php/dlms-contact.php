<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DLMS</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dlms-home-main.css">
    <link rel="stylesheet" href="../css/dlms-home-contact.css">
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
        <h1>Contact Us</h1>
    </section>
    
    <!-- contact us -->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.803855978964!2d79.82118600958712!3d6.92192257611555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1646919422144!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <!-- contact-us -->
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Driving License Management System</h5>
                        <p>Colombo, LK</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>0769985475</h5>
                        <p>Monday to Friday, 10AM to 3PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>contact@dlms.lk</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="#">
                    <input type="text" placeholder="Enter your name" required>
                    <input type="email" placeholder="Enter your email address" required>
                    <input type="text" placeholder="Enter your subject" required>
                    <textarea cols="8" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include '../includes/footer.php'?>
</body>
</html>