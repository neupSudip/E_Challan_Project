<?php
if(isset($_POST['challan-submit'])) {

    // for connecting to database
    require 'database.php';

    // for collecting all input values
    $rider = $_POST['rider'];
    $location = $_POST['location'];
    $license = $_POST['license'];
    $vehicle = $_POST['vehicle'];
    $type = $_POST['type'];
    $creater = $_POST['creater'];
    $law = $_POST['law'];
    $fine = $_POST['fine'];

    // statement for inserting data into database 
    $stmt = $conn->prepare("INSERT INTO challan (rider, place, license_num, vehicle_num, vehicle_type, creater, law, fine)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

    if(!preg_match("/^[0-9]*$/", $license)){
        header("Location: ../php/createChallan.php?error=inavlidlicensetype");
    }
    else if(!preg_match("/^[0-9]*$/", $fine)){
        header("Location: ../php/createChallan.php?error=inavlidfine");
    }
    else{
        // passing values as a parameter
        $stmt->bind_param("ssissssi", $rider, $location, $license, $vehicle, $type, $creater, $law, $fine);
        $stmt->execute();
        $stmt->close();
        header("Location: ../php/createChallan.php");
    } 
    
}