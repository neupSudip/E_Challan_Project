<?php

// for stablishing connection 
$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "echallan";

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dBName);


// if connection fail to connect database
if(!$conn) {
    die("Database connection failoed: ".mysqli_connect_error());
}