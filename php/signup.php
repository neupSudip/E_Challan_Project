<?php
if(isset($_POST['signup-submit'])) {
    require 'database.php';

    // taking input values from form
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pwd'];
    $pasRepeat = $_POST['pwd-repeat'];

    // if username contains any invalid character and email format is incorrect
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../php/signup-page.php?error=invalidemail&username");
        exit();
    }
    // if email format is incorrect
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../php/signup-page.php?error=invalidemail");
        exit();
    }
    // if username contains any invalid character
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../php/signup-page.php?error=invalidusername");
        exit();
    }
    // if password is not equal to repeated password
    else if($pass !== $pasRepeat){
        header("Location: ../php/signup-page.php?error=passwordNOtMatch");
        exit();
    }

    // if everything is in right order in form
    else{

       $sql = "SELECT uemail FROM users WHERE uemail=?;";
       $stmt = mysqli_stmt_init($conn);

    //    if any error to connect statement
       if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../php/signup-page.php?error=sqlerror");
            exit();
       }
       else{
        //    checking either email already exist or not
           mysqli_stmt_bind_param($stmt, "s", $email);
           mysqli_stmt_execute($stmt);
           mysqli_stmt_store_result($stmt);
           $result = mysqli_stmt_num_rows($stmt);
           if($result > 0){
                header("Location: ../php/signup-page.php?error=UserExist");
                exit();
           }
        //    if user doenot exist 
           else{
               $sql = "INSERT INTO users (uname, uemail, upass) VALUES (?, ?, ?)";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../php/signup-page.php?error=sqlerror");
                    exit();
                } 
                // if connection and statement are right
                else{
                    // hashing password
                    $hashPwd = password_hash($pass, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../php/index.php?signup=success");
                    exit();
                }
            }
       }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../php/signup-page.php?signup=success");
    exit();
}