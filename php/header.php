<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Traffic E-challan</title>
    <link rel="stylesheet" href="../css/echallan.css">
    
</head>
<body>
    <!-- navigation bar or menu bar starts from here  -->
    <div class="header">  
        <a href="../php/index.php"><img class="logo" src="../photo/e-challan.png" alt=""> </a>
        <h1 ><a class="heading" href="../php/index.php">E - Challan</a></h1>
        
        <nav class="navigation">
            <ul class='navigation-ul'>
                
                <li><a href="../php/TrafficLaws.php">Voilation laws</a></li>

                <?php
                if(isset($_SESSION['userId'])){
                    echo '<li> <form class="logout" action="logout.php" method="post"><button class="logout" type="submit">Logout</button></form></li>
                    <li><a href="../php/createChallan.php">Create Challan</a></li>';
                }else{
                    echo '<li><a href="../php/signup-page.php">Signup</a></li>
                    <li><a href="../php/login-page.php">login</a></li>';
                }
                ?>
                
                
            </ul>
        </nav>
    </div>
    <!-- navigation bar or menu bar ends here -->

</body>
</html>