
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Challan</title>
</head>
<body>
    

<?php 
    require "header.php";
?>


<section class="traffic-challan-form">
    <form class="challan-form">
        <h1 class="form-title challan-title">Create Challan</h1>
        <div class="challan-field">              
            <p class="challan-field-name">Rider Name</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="Rider Name" required>   
        </div>
        <div class="challan-field">
            <p class="challan-field-name">Location</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="location" required>
        </div>
        <div class="challan-field">
            <p class="challan-field-name">License Number</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="Rider License Number" required>
        </div>
        <div class="challan-field">
            <p class="challan-field-name">Vehicle Number</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="Rider Vehicle Number" required>
        </div>
        <div class="challan-field">
            <p class="challan-field-name">Vehicle Type</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="Rider Vehicle Type" required>
        </div>
        <div class="challan-field">
            <p class="challan-field-name">Challan Created By</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="challan creater (traffic name)" required>
        </div>
        <div class="challan-field">
            <p class="challan-field-name">Voilation of law</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="name of the voilated law" required>
        </div>
        <div class="challan-field">
            <p class="challan-field-name">Fine</p>
            <input type="text" class="form-input challan-input" autofocus placeholder="fine" required>
        </div>
        <button type="submit" class="form-button challan-button">Create Challan</button>
    </form>
</section>


<?php 
    require "footer.php";
?>

    
</body>
</html>


