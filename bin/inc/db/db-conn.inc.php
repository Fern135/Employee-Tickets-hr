<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "employees_ticketing";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "<script>console.log('Connected successfully');</script>";
    }