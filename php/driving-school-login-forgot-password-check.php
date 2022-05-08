<?php
	session_start();
	if(isset($_SESSION['username'])){
		header('Location: ./driving-school-dashboard.php');
	}
    echo "<h1>change password processing!</h1>";
?>