<?php
if(isset($_POST['challan-submit'])) {
    require 'database.php';

    $rider = $_POST['rider'];
    $location = $_POST['location'];
    $license = $_POST['license'];
    $vehicle = $_POST['vehicle'];
    $type = $_POST['type'];
    $creater = $_POST['creater'];
    $law = $_POST['law'];
    $fine = $_POST['fine'];

    $stmt = $conn->prepare("INSERT INTO challan (rider, place, license_num, vehicle_num, vehicle_type, creater, law, fine)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssiisssi", $rider, $location, $license, $vehicle, $type, $creater, $law, $fine);
    $stmt->execute();
    $stmt->close();
    header("Location: ../php/index.php");
}