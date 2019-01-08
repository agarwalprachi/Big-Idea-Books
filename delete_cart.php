<?php

require("connection.php");
$cart= $_GET['cart_id'];



$result=mysqli_query($conn,"delete from cart where cart_id='$cart'");
//echo "<pre>";
//print_r($result);die;


if($result)
{
header('location:view_cart.php');
}
?>