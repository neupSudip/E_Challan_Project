
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Challan</title>
</head>
<body>

<!-- inserting header from header file -->
<?php 
    require "header.php";
?>


<section class="traffic-challan-form">
<!-- form for creating challan action on challan.php -->
    <form class="challan-form" action="challan.php" method="post">
        <h1 class="form-title challan-title">Create Challan</h1>
        <?php 
            if (isset($_GET['error'])){
                if($_GET['error'] == "inavlidlicensetype"){
                    echo '<p style="color:red;">License number should be integer</p>';
                }
                else if($_GET['error'] == "inavlidfine"){
                    echo '<p style="color:red;">Fine amount should be integer</p>';
                }
            }
        
        ?>

        <div class="challan-field">              
            <p class="challan-field-name">Rider Name</p>
            <input type="text" class="form-input challan-input" name="rider" autofocus placeholder="Rider Name" required>   
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Location</p>
            <input type="text" class="form-input challan-input" name="location" autofocus placeholder="location" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">License Number</p>
            <input type="text" class="form-input challan-input" name="license" autofocus placeholder="Rider License Number" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Vehicle Number</p>
            <input type="text" class="form-input challan-input" name="vehicle" autofocus placeholder="Rider Vehicle Number" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Vehicle Type</p>
            <input type="text" class="form-input challan-input" name="type" autofocus placeholder="Rider Vehicle Type" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Challan Created By</p>
            <input type="text" class="form-input challan-input" name="creater" autofocus placeholder="challan creater (traffic name)" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Voilation of law</p>
            <input type="text" class="form-input challan-input" name="law" autofocus placeholder="name of the voilated law" required>
        </div>

        <div class="challan-field">
            <p class="challan-field-name">Fine</p>
            <input type="text" class="form-input challan-input" name="fine" autofocus placeholder="fine" required>
        </div>
        <button type="submit" class="form-button challan-button" name="challan-submit">Create Challan</button>
    </form>
</section>



<!-- inserting footer from footer.php file -->
<?php 
    require "footer.php";
?>

    
</body>
</html>


