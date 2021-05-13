<?php

include 'database.php';

$id = $_GET['id'];

// statement for deleting data from database 
$stmt = $conn->prepare("DELETE from challan WHERE id=?;");
// passing values as a parameter
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
header("Location: ../php/viewChallan.php");

?>