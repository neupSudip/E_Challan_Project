
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    

<?php 
    require "header.php";
?>


<div class="container">
    <!-- login form starts from here  -->
    <form class="form" id="login-form" action="login.php" method="post">
        <h1 class="form-title">Login</h1>

        <?php
            if (isset($_GET['error'])){
                if($_GET['error'] == "noUser"){
                    echo '<p style="color:red;">Sorry email not found</p>';
                }
                else if($_GET['error'] == "wrongpassword"){
                    echo '<p style="color:red;">Password doen not match</p>';
                }
            }

        ?>      
        <!-- input fields for login -->
        <div class="form-fields">
            <input type="email" class="form-input" name="email" autofocus placeholder="Enter your email" required>
            <input type="password" class="form-input" name="pwd" autofocus placeholder="Password" required>
        </div>
        <button class="form-button" type="submit" name="login-submit">Continue</button>
        <div class="form-links">
            <a href="">Forgot your password?</a> 
            <br>
            <span>Don't have an account? <a href="signup-page.php" id="link-signup-form">Create account</a> </span>
        </div>
    </form>
    <!-- login form ends here  -->
</div>


<?php 
    require "footer.php";
?>

    
</body>
</html>


