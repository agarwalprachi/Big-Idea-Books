<?php
session_start();
require("connection.php");
$id= $_GET['p_id'];
$_SESSION['p_id'] = $id;


$result=mysqli_query($conn,"delete from product where p_id='$id'");
//echo "<pre>";
//print_r($result);die;


if($result)
{
header('location:View_product.php');
}
?>