<?php
$id=$_REQUEST["id"];
include "connection.php";
// sql to delete a record
$sql = "DELETE FROM `cart` WHERE `cart`.`id` = $id;";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

header("Location:../cart.php"); 
exit;
$conn->close();
?>