<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student_php";

    $conn = mysqli_connect($host, $user, $password, $db);
    if(mysqli_connect_error()){
        die("Failed to connect with MySQL:".mysqli_connect_error());
    }
?>