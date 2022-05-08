<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $pass = '';
    $database = 'dlms';

    $conn = new mysqli($serverName, $userName, $pass, $database);

    if($conn->connect_error){
        die('Connection failed: '.$conn->connect_error);
    }
?>