<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Created Challans</title>
</head>
<body>

<!-- inserting header from header file -->
<?php 
    require "header.php";
?>

<div class="challan-div">
    <h1>List of Created Challans</h1>
    <table>
        <tr class="table-title">
            <th>Rider Name</th>
            <th>Vehicle No.</th>
            <th>license No.</th>
            <th >Location</th>
            <th>Created By</th>
            <th>Law</th>
            <th>Actions</th>
        </tr>

        <?php
            include 'database.php';
            $sql = "SELECT * from challan";
            $stmt = mysqli_query($conn, $sql);
            
            while($result = mysqli_fetch_array($stmt)){

        ?>

        <tr class="challan-list">
            <th><?php echo $result['rider'] ?></th>
            <th><?php echo $result['vehicle_num'] ?></th>
            <th><?php echo $result['license_num'] ?></th>
            <th ><?php echo $result['place'] ?></th>
            <th><?php echo $result['creater'] ?></th>
            <th><?php echo $result['law'] ?></th>
            <th>
                <button type="submit" class="up-btn">
                    <a href="../php/update.php?id=<?php echo $result['id'] ?>" class="up">
                        Update
                    </a>
                </button>
                <button type="submit" class="del-btn">
                    <a href="../php/delete.php?id=<?php echo $result['id'] ?>" class="del">
                        Delete
                    </a>
                </button>
            </th>
        </tr>

        <?php
            }
        ?>
       
    </table>


</div>





<!-- inserting footer from footer.php file -->
<?php 
    require "footer.php";
?>

    
</body>
</html>