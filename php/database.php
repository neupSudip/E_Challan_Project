<?php

$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "echallan";

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Database connection failoed: ".mysqli_connect_error());
}