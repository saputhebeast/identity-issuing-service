<?php 

?>
<link rel = "stylesheet" type = "text/css" href = "../css/driving-school-navigation.css"/>
<div class = "navigation">
    <ul class = "nav-links">
        <li><a href="../php/user-dashboard.php">Home</a></li>
        <li><a href="../php/user-new-license.php">New License</a></li>
        <li><a href="../php/user-renew-license.php">Renew License</a></li>
        <li><a href="../php/user-profile-settings.php">Profile Settings</a></li>
        <li style="float:right"><form action="../php/user-logout.php" method="POST"><input class="log-btn" type="submit" value="Log Out" name="btnOut"></form></li>
    </ul>
</div>