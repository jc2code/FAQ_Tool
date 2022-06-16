<?php 

// We need these 4 variables to connect to a database
/*
$dbServername = "us-faqtool-test:3307";
$dbUsername = "webdev";
$dbPassword = "SM95131*";
$dbName = "FAQ";
*/

// Local
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

 
