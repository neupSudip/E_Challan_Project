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

    if(!preg_match("/^[0-9]*$/", $license)){
        header("Location: ../php/createChallan.php?error=inavlidlicensetype");
    }
    else if(!preg_match("/^[0-9]*$/", $fine)){
        header("Location: ../php/createChallan.php?error=inavlidfine");
    }
    else{
        // passing values as a parameter
        $stmt->bind_param("ississssii",$id, $rider, $location, $license, $vehicle, $type, $creater, $law, $fine, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: ../php/viewChallan.php");

    }
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

        <?php 
            if (isset($_GET['error'])){
                if($_GET['error'] == "inavlidlicensetype"){
                    echo '<p style="color:red;">License number should be integer</p>';
                }
                else if($_GET['error'] == "inavlidfine"){
                    echo '<p style="color:red;">Fine amount should be integer</p>';
                }
            }

            include 'database.php';
            $id = $_GET['id'];
            $sql = "SELECT * from challan WHERE id=$id;";
            $stmt = mysqli_query($conn, $sql);
            $result = mysqli_fetch_array($stmt);
        
        ?>

        <div class="challan-field">              
            <p class="challan-field-name">Rider Name</p>
            <input type="text" class="form-input challan-input" name="rider" autofocus value="<?php echo $result['rider'] ?>" required>   
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Location</p>
            <input type="text" class="form-input challan-input" name="location" autofocus value="<?php echo $result['place'] ?>" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">License Number</p>
            <input type="text" class="form-input challan-input" name="license" autofocus value="<?php echo $result['license_num'] ?>" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Vehicle Number</p>
            <input type="text" class="form-input challan-input" name="vehicle" autofocus value="<?php echo $result['vehicle_num'] ?>" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Vehicle Type</p>
            <input type="text" class="form-input challan-input" name="type" autofocus value="<?php echo $result['vehicle_type'] ?>" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Challan Created By</p>
            <input type="text" class="form-input challan-input" name="creater" autofocus value="<?php echo $result['creater'] ?>" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Voilation of law</p>
            <input type="text" class="form-input challan-input" name="law" autofocus value="<?php echo $result['law'] ?>" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Fine</p>
            <input type="text" class="form-input challan-input" name="fine" autofocus value="<?php echo $result['fine'] ?>" required>
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


