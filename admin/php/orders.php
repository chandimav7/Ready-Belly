<?php
session_start();

if(!isset($_COOKIE["id"])) {
 
} else {
 $user=$_COOKIE["id"];
}
 $user=$_SESSION["id"] ;



include "connection.php";

$sql = "SELECT *  FROM `user` WHERE 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            
        $cus=$row["id"];


$sql1 = "SELECT `cart`.`id`,`cart`.`rest`,`food`.`name`,`food`.`price`,`cart`.`qty`,`food`.`price`*`cart`.`qty`AS `ammount`  FROM `cart`,`food` WHERE `cart`.`item`=`food`.`id` AND `cart`.`user`='$cus'AND `cart`.`tableNo`='0'AND `cart`.`conf`='0'";
$result1 = $conn->query($sql1);
$tot=0;
$totqty=0;
//echo $sql;

if ($result1->num_rows > 0) {
  echo "
  <div class='row'>
  <div class='col-lg-8'>
  <div class='container'>
  <div class='table-responsive'>
    <table class='table table-bordered table-hover table-warning'>
      <thead>
        <tr>
          <th scope='col'>Item </th>
          <th scope='col'>Qty</th>
          <th scope='col'>Unit Price</th>
          <th scope='col'>Amount </th>
          <th scope='col'>Restaurant </th>
          <th scope='col'>Remove</th>
        </tr>
      </thead>";
    while($row1 = $result1->fetch_assoc()) {
      $id=$row1["id"];
        $name=$row1["name"];
        $qty=$row1["qty"];
        $price=$row1["price"];
        $ammoutnt=$row1["ammount"];
        $rest=$row1["rest"];
        $tot=$tot+$ammoutnt;
        $totqty=$totqty+$qty;
        echo "
        <tbody>
    <tr>
      <td>$name</td>
      <td>$qty</td>
      <td>$price</td>
      <td>$ammoutnt</td>
      <td>$rest</td>
      <td><a href='php/removeFood.php?id=$id'>Remove</a></td>
    </tr>
  ";
    }
} else {
 
}



}
$conn->close();

?>