<?php
$email=$_REQUEST["email"];
$uname=$_REQUEST["uname"];
$pass=$_REQUEST["pwd"];


$today=date("Y-m-d");
include "connection.php";
// Create connection
 

$sql = "INSERT INTO `user`(`email`,`username`, `pass`) VALUES ('$email','$uname','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../index.php"); /* Redirect browser */
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>