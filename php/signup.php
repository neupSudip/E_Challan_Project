<?php
if(isset($_POST['signup-submit'])) {
    require 'database.php';

    $username = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pwd'];
    $pasRepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($pass) || empty($pasRepeat)) {
        header("Location: ../php/signup-page.php?error=emptyfields");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../php/signup-page.php?error=invalidemail&username");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../php/signup-page.php?error=invalidemail");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../php/signup-page.php?error=invalidusername");
        exit();
    }
    else if($pass !== $pasRepeat){
        header("Location: ../php/signup-page.php?error=passwordNOtMatch");
        exit();
    }
    else{
       $sql = "SELECT uemail FROM users WHERE uemail=?;";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../php/signup-page.php?error=sqlerror");
            exit();
       }
       else{
           mysqli_stmt_bind_param($stmt, "s", $email);
           mysqli_stmt_execute($stmt);
           mysqli_stmt_store_result($stmt);
           $result = mysqli_stmt_num_rows($stmt);
           if($result > 0){
                header("Location: ../php/signup-page.php?error=UserExist");
                exit();
           }else{
               $sql = "INSERT INTO users (uname, uemail, upass) VALUES (?, ?, ?)";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../php/signup-page.php?error=sqlerror");
                    exit();
                } else{
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