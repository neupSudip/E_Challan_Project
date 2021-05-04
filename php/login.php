<?php

if(isset($_POST['login-submit'])){
    require 'database.php';

    $user = $_POST['email'];
    $pass = $_POST['pwd'];

    if(empty($user) || empty($pass)){
        header("Location: ../php/login-page.php?error=emptyField");
        exit();
    }
    else{

        $sql = "SELECT * FROM users WHERE uemail=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../php/login-page.php?error=sqlerror");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($pass, $row['upass']);
                if($pwdCheck == false){
                    header("Location: ../php/login-page.php?error=wrongpassword");
                    exit();
                }else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['uid'];
                    $_SESSION['userName'] = $row['uname'];
                    header("Location: ../php/index.php?login=success");
                    exit();  
                }else{
                    header("Location: ../php/login-page.php?error=wrongpassword");
                    exit();
                }
            }else {
                header("Location: ../php/login-page.php?error=noUser");
                exit();
            }
        }
    }

}else{
    header("Location: ../php/login-page.php");
    exit();
}