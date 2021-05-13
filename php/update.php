<?php
include 'database.php';

if(isset($_POST['challan-submit'])){

    $id = $_GET['id'];
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
    $stmt = $conn->prepare("UPDATE challan SET id=?, rider=?, place=?, license_num=?, vehicle_num=?, vehicle_type=?, creater=?, law=?, fine=? WHERE id=?");

    // passing values as a parameter
    $stmt->bind_param("issiisssii",$id, $rider, $location, $license, $vehicle, $type, $creater, $law, $fine, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ../php/viewChallan.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Challan</title>
</head>
<body>

<!-- inserting header from header file -->
<?php 
    require "header.php";
?>


<section class="traffic-challan-form">
<!-- form for creating challan action on challan.php -->
    <form class="challan-form" method="post">
        <h1 class="form-title challan-title">Update Challan</h1>

        <div class="challan-field">              
            <p class="challan-field-name">Rider Name</p>
            <input type="text" class="form-input challan-input" name="rider" autofocus placeholder="Update Rider Name" required>   
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Location</p>
            <input type="text" class="form-input challan-input" name="location" autofocus placeholder="Update location" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">License Number</p>
            <input type="text" class="form-input challan-input" name="license" autofocus placeholder="Update Rider License Number" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Vehicle Number</p>
            <input type="text" class="form-input challan-input" name="vehicle" autofocus placeholder="Update Rider Vehicle Number" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Vehicle Type</p>
            <input type="text" class="form-input challan-input" name="type" autofocus placeholder="Update Rider Vehicle Type" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Challan Created By</p>
            <input type="text" class="form-input challan-input" name="creater" autofocus placeholder="Update challan creater (traffic name)" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Voilation of law</p>
            <input type="text" class="form-input challan-input" name="law" autofocus placeholder="Update name of the voilated law" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Fine</p>
            <input type="text" class="form-input challan-input" name="fine" autofocus placeholder="Update fine" required>
        </div>
        <button type="submit" class="form-button challan-button" name="challan-submit">Update Challan</button>
    </form>
</section>



<!-- inserting footer from footer.php file -->
<?php 
    require "footer.php";
?>

    
</body>
</html>


