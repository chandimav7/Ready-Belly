<?php
session_start();

if(!isset($_COOKIE["id"])) {
 
} else {
 $user=$_COOKIE["id"];
}
 $user=$_SESSION["id"] ;

 $name=$_REQUEST["name"];
 $address=$_REQUEST["name"];

include "connection.php";

$sql = "UPDATE `cart` SET `conf` = '1',`resName` = '$name',`resAddress` = '$address' WHERE `cart`.`user` =$user AND  `cart`.`tableNo` =0;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>