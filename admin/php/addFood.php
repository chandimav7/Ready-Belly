<?php
session_start();

if(!isset($_COOKIE["id"])) {
 
} else {
 $user=$_COOKIE["id"];
}
 $user=$_SESSION["id"] ;




$restt=$_REQUEST["restt"];
$name=$_REQUEST["name"];
$price=$_REQUEST["price"];
$info=$_REQUEST["info"];
$img=$_REQUEST["img"];




echo $user;
echo $itm;
echo $qty;
include "connection.php";
$sql = "INSERT INTO `food`(`id`, `name`, `price`, `info`, `rest`, `img`)
 VALUES ('','$name','$price','$info','$restt','$img')

";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
     header("Location:../insert.php"); 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>