
<?php

session_start();
//echo $_POST['product_name'];die;
require("connection.php");
if (isset($_POST['submit']))
{   
     $new_id=$_SESSION['p_id'];
	//$id=$_GET["p_id2"];
	$p_name=$_POST['product_name'];
	//$p_image=$_POST['p_image'];
	$p_description=$_POST['product_description'];
	$p_price=$_POST['product_price'];
	$p_quantity=$_POST['product_quantity'];
	
$result = mysqli_query($conn,"	UPDATE product SET p_name='$p_name',p_description='$p_description',p_price='$p_price',p_quantity='$p_quantity'where p_id='$new_id'");

if($result)
{
	header('location:View_product.php');
}else{
	echo("Not updated");
}
}
	
?>