<?php

if(isset($_POST['login-submit'])){
    require 'database.php';

    $user = $_POST['email'];
    $pass = $_POST['pwd'];

    if(empty($user) || empty($pass)){
        header("Location: ../php/login-page.php?error=emptyField");
        exit();
    }
     // if user login as admin
    else if(strtolower($user) == "echallanadmin@gmail.com" && $pass == "admin12345"){
        session_start();
        // sesion variable for admin
        $_SESSION['admin'] = "admin";
        header("Location: ../php/index.php?login=success");
        exit();  
    }
    // if not admin then checking for traffic details from database
    else{
        $sql = "SELECT * FROM users WHERE uemail=?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../php/login-page.php?error=sqlerror");
            exit();
        }       
        // if connection on sql statement is true
        else {
            // passing email in statement to check email correct or not
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // if we get result or any row that has input email
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($pass, $row['upass']);
                if($pwdCheck == false){
                    header("Location: ../php/login-page.php?error=wrongpassword");
                    exit();
                }
                // if password is also correct
                else if($pwdCheck == true){
                    // sesion starts 
                    session_start();
                    $_SESSION['userId'] = $row['uid'];
                    $_SESSION['userName'] = $row['uname'];
                    header("Location: ../php/index.php?login=success");
                    exit();  
                }else{
                    header("Location: ../php/login-page.php?error=wrongpassword");
                    exit();
                }
            }
            // if we do not get result or any row that has input email
            else {
                header("Location: ../php/login-page.php?error=noUser");
                exit();
            }
        }
    }

}
else{
    header("Location: ../php/login-page.php");
    exit();
}