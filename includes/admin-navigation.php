<?php 

?>
<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-navigation.css"/>
<div class = "navigation">
    <ul class = "nav-links">
        <li><a href="../php/admin-dashboard.php">Home</a></li>
        <li><a href="../php/admin-license-manage.php">License Application Manage</a></li>
        <li><a href="../php/admin-registered-user-manage.php">Registered User Manage</a></li>
        <li><a href="../php/admin-driving-school-manage.php">Driving School Manage</a></li>
        <li><a href="../php/admin-profile-settings.php">Profile Settings</a></li>
        <li style="float:right"><form action="../php/admin-logout.php" method="POST"><input class="log-btn" type="submit" value="Log Out" name="btnOut"></form></li>
    </ul>
</div>