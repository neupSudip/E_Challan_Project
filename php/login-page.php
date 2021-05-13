
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<!-- inserting header from header file -->
<?php 
    require "header.php";
?>


<div class="container1">
    <!-- login form starts from here action on login.php -->
    <form class="form" id="login-form" action="login.php" method="post">
        <h1 class="form-title">Login</h1>

        <?php
        // if there is any error 
            if (isset($_GET['error'])){
                // if there is no such user 
                if($_GET['error'] == "noUser"){
                    echo '<p style="color:red;">Sorry email not found</p>';
                }
                // if user id is correct but password is wrong
                else if($_GET['error'] == "wrongpassword"){
                    echo '<p style="color:red;">Password does not match</p>';
                }
            }
        ?>    

        <!-- input fields for login -->
        <div class="form-fields">
            <input type="email" class="form-input" name="email" autofocus placeholder="Enter your email" required>
            <input type="password" class="form-input" name="pwd" autofocus placeholder="Password" required>
        </div>

        <button class="form-button" type="submit" name="login-submit">Continue</button>

        <!-- messages in bottom of form -->
        <div class="form-links">
            <a href="">Forgot your password?</a> 
            <br>
            <span>Don't have an account? <a href="signup-page.php" id="link-signup-form">Create account</a> </span>
        </div>
    </form>
    <!-- login form ends here  -->
</div>


<!-- inserting footer from footer.php file -->
<?php 
    require "footer.php";
?>

    
</body>
</html>


