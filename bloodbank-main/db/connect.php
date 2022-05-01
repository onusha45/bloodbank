<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bloodbank";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        die("connection failed");
    }
?>