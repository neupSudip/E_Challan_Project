
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    

<?php 
    require "header.php";
?>


<div class="container">
    <!-- signup form starts from here  -->
    <form class="form" id="signup-form" action="signup.php" method="post">
        <h1 class="form-title">Create Account</h1>
        
        <div class="form-message form-error-message"></div>
        <!-- input fields for signup  -->
        <div class="form-fields">
            <input type="text" class="form-input" name="uname" autofocus placeholder="Type a Username" required>
            <input type="email" class="form-input" name="email" autofocus placeholder="Email Address" required>
            <input type="password" class="form-input" name="pwd" autofocus placeholder="Password" required>
            <input type="password" class="form-input" name="pwd-repeat" autofocus placeholder="Confirm password" required>
        </div>
        <button class="form-button" type="submit" name="signup-submit">Continue</button>
        <div class="form-links">     
            <span>Already ahve account? <a href="login-page.php" id="link-signup-form">Sign in</a> </span>
        </div>
    </form>
    <!-- signup form ends here -->
</div>


<?php 
    require "footer.php";
?>

    
</body>
</html>


