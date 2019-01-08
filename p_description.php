<?php
include('header.php');
require ('connection.php');
$id=$_GET['p_id'];?>
<!--
<div class="container-fluid" style="padding-right: 0px;padding-left: 356px;">-->
<div class="description" style="margin-top:20px;" >

<?php
$res=mysqli_query($conn,"select * from product where p_id='$id' ");

while($row=mysqli_fetch_array($res))
{?>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-4">
	<img src="<?php echo $row["p_image"]; ?>" height="50%" width="20%" >
</div>
<div class="col-sm-4">
	<?php
	echo "<strong>";
    echo '<span style=" font-size:30px;">';
	echo $row["p_name"];
	echo"</strong>";
	
	echo "<br>";
	 echo '<span style=" font-size:15px;">';
	echo $row["p_description"];
	echo "<br>";
	echo"Rs.";
	echo $row["p_price"];
	
	
	//echo"PQuantity:";
	//echo $row["p_quantity"];
	echo"<br>";
	
	?>
	
	

	<?php $cart_url="p_cart.php"?>
	<form method ="post" action="<?php echo $cart_url; ?>">
	<input type="hidden" name="product_id" value="<?php echo $id;  ?>">
	Quantity:<input type="number" name="quant" value="Quantity">
	<br>
	<br>
	<input type="submit" name="submit" value="ADD TO CART">
	</form>
</div>
<div class="col-sm-2"></div>
</div><?php } ?>
</div>
<?php	
include('footer.php');
?>

