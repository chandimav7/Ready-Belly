<?php
session_start();

if(!isset($_COOKIE["id"])) {
 
} else {
 $user=$_COOKIE["id"];
}
 $user=$_SESSION["id"] ;



include "connection.php";
$sql = "SELECT `cart`.`id`,`cart`.`rest`,`food`.`name`,`food`.`price`,`cart`.`qty`,`food`.`price`*`cart`.`qty`AS `ammount`  FROM `cart`,`food` WHERE `cart`.`item`=`food`.`id` AND `cart`.`user`='$user'AND `cart`.`tableNo`='0'AND `cart`.`conf`='0'";
$result = $conn->query($sql);
$tot=0;
$totqty=0;
//echo $sql;

if ($result->num_rows > 0) {
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
    while($row = $result->fetch_assoc()) {
      $id=$row["id"];
        $name=$row["name"];
        $qty=$row["qty"];
        $price=$row["price"];
        $ammoutnt=$row["ammount"];
        $rest=$row["rest"];
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
echo "</tbody> 

<thead style='background-color:#f0e085'>
  <tr>
    <th scope='col'>Total Amount </th>
    <th scope='col'>$totqty</th>
    <th scope='col'></th>
    <th scope='col'>$tot</th>
    <th scope='col'></th>
    <th scope='col'></th>
  </tr>
</thead>
</table>
</div>
</div>
</div>
<div class='col-lg-4'>
<br>
<div class='container-fluid'>
<div><center><h3 style='color:white;'>Order Place</h3></center></div>
<center>
<form class='form-group form-buffer' action='php/confOrder.php' method='POST'>
<br>
       <input  type='hidden' name='user' value='$user'><input  type='hidden' name='tbl' value='0'>
       <input class='form-control' placeholder='Name' type='text' name='name' style='width:70%';><br>
       <input class='form-control' placeholder='Address' type='text' name='address' style='width:70%';>
       <br>
        <input class='btn btn-primary mb-2' type='submit' value='Confirm Order' style='width:40%'; ></p>
        <br>
</form>
</center>
</div>
</div>
</div>

";
$conn->close()

?>

