<?php 

// We need these 4 variables to connect to a database


$dbServername = "us-faqtool-test";
$dbUsername = "webdev";
$dbPassword = "*SM95131*";
$dbName = "FAQ";

$conn = mysqli_connect(
    $dbServername, 
    $dbUsername, 
    $dbPassword,                 
    $dbName
);

 