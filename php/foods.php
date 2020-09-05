<?php
if(!isset($_COOKIE["id"])) {
 
} else {
 $user=$_COOKIE["id"];
}

//$cat=$_REQUEST["cat"];
include "connection.php";
$sql = "SELECT * FROM `food` WHERE rest='$rest'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $name=$row["name"];
        $price=$row["price"];
        $info=$row["info"];
        $img=$row["img"];
        echo "
        <div class='card'>
        <div class='card-img-top'>
            <img src='$img' alt='aloo gobi'>
        </div>
        <div class='card-title'>
            <h3><b>$name</b></h3>
        </div>
        <div class='card-body'>
        <p class='price'>Rs.$price</p>
        <form  action='../php/addToCart.php' method='POST'>
        <input type='hidden' name='user' value='1'>
        <input type='hidden' name='itm' value='$id'>
        <input type='hidden' name='restt' value='$rest'>

        <p> <input class='qty' type='number' name='qty'><p>
        <input class='button' type='submit' value='Add to Cart'>
        </form>
        </div>
    </div>";
    }
} else {
 
}
$conn->close()

?>