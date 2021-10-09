<?php
    $server = "10.0.0.64";
    $user = "admin";
    $pass = "Admin-22";
    $dbname = "login";
    // $server = "localhost";
    // $user = "root";
    // $pass = "";
    // $dbname = "login";

    $connect = mysqli_connect($server, $user, $pass, $dbname);
    if ($connect) {
    
    } else {
    die("Connection Failed: " .mysqli_connect_error());
    }
?>