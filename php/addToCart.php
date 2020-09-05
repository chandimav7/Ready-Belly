<?php
session_start();

if(!isset($_COOKIE["id"])) {
 
} else {
 $user=$_COOKIE["id"];
}
 $user=$_SESSION["id"] ;
$restt=$_REQUEST["restt"];
$itm=$_REQUEST["itm"];
$qty=$_REQUEST["qty"];
echo $user;
echo $itm;
echo $qty;
include "connection.php";
$sql = "INSERT INTO `cart`(`id`, `user`, `tableNo`, `item`, `qty`, `time`,`rest`) 
VALUES ('','$user','0',$itm,$qty,CURRENT_TIMESTAMP,'$restt')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
     header("Location:../restaurants/$restt.php"); 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>