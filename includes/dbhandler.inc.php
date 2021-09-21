<?php 

// We need these 4 variables to connect to a database
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "FAQ";

$conn = mysqli_connect(
    $dbServername, 
    $dbUsername, 
    $dbPassword,                 
    $dbName
);

 