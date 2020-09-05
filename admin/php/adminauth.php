<?php
$userName=$_REQUEST['uname'];
$pass=$_REQUEST['pwd'];
session_start();
include "connection.php";
$sql = "SELECT * FROM `admin` WHERE (`username` = '$userName' AND `password` = '$pass');";
$result = $conn->query($sql);
// echo $sql;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $_SESSION["id"] = $id;
        echo $id;
        setcookie("user", $id, time() + (86400 * 30), "/");
        setcookie("table", $table, time() + (86400 * 30), "/");
        header("Location:../insert.php"); 
        exit;
    }
} else {
  header("Location:../adminlogin.php"); 
  exit;
}
$conn->close()

?>