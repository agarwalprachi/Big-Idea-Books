<?php
(include 'header.php');

require("connection.php");
$id=$_GET['p_id'];
$_SESSION['p_id'] = $id;

$result = mysqli_query($conn,"select p_name,p_image,p_description,p_price,p_quantity from product where p_id='$id'");

while($row =mysqli_fetch_array($result))
{
	?>
	<form method="post" action="update_form2.php">
	Product Name:
	<input type="text" name="product_name" value="<?php echo $row["p_name"]; ?>"><br>
	Product Image
	<img src="<?php echo $row["p_image"]; ?>" height="" width="" ><br>
	Product Description:
	<input type="text" name="product_description" value="<?php echo $row["p_description"];?>"><br>
	Product Price:
	<input type="number" name="product_price" value="<?php echo $row["p_price"]; ?>"><br>
	Product Quantity:
	<input type="numbers" name="product_quantity" value="<?php echo $row["p_quantity"]; ?>"><br>
	<input type="submit" name="submit" value="Update"></a>
	</form>
<?php
}	
(include 'footer.php');
?>
	