<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "tripadvisor";

    
    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("connection failed : " . mysqli_connect_error());
    }
    else{
        // echo "<script>alert('DBconnected')</script>";
    }
    ?>