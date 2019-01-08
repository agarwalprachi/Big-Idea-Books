<?php
include('header.php');


require("connection.php");
     if( isset ($_SESSION['email']))
    {
     $email= $_SESSION['email'];

  $sql = "SELECT id FROM register where email='$email'";
  $result = mysqli_query($conn, $sql);
     $id;
 
      if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {

$id=$row["id"];
//session variable
      }//while
  
    }//if
	}	

$result = mysqli_query($conn,"SELECT cart_id,prod_id,product_name,prod_image,prod_price,product_p_quantity,Quantity,Total from cart where user_id='$id'");
?>

<div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
<div class="col-sm-9 col-md-8">
<table class="table table-hover">
<thead>
<tr>
<th>Cart Id</th>
<th>Product Name</th>
<th>Image</th>
<th>Product Price</th>
<th>Available Quantity</th>
<th>Quantity</th>
<th>Total</th>
<th>Product Action</th>
 </tr>
</thead>
<tbody>

<?php



 while($row = mysqli_fetch_assoc($result)){
	 echo"<tr>";
	  echo "<td>" . $row['cart_id'] . "</td>";
      echo"<td>". $row['product_name'] . "</td>"; ?> 
<?php	echo "<td>"?>  <img src="<?php echo $row["prod_image"]; ?>" height="100" width="">  <?php echo "</td>";
	  echo "<td>". $row['prod_price'] ."</td>";
	echo"<td>". $row['product_p_quantity'] ."</td>"; 
	echo"<td>". $row['Quantity'] ."</td>" ;
	echo"<td>". $row['Total'] ."</td>";
	$info_url ="delete_cart.php?cart_id=".$row["cart_id"];
	 echo"<td>"
	  
		?> <a href="<?php echo $info_url; ?>"><span class="glyphicon glyphicon-trash"></span></a>
	<?php
	echo " </td></tr>";
 }
?>
	</tbody>

<?php
echo "</table>";?>
<form method ="post" action="View_product.php">
	<input type="submit" name="submit" value="CONTINUE SHOPPING">
	</form>
</div>
	
	
<div class="col-sm-3 col-md-2" style="margin-left:198px; margin-top: 82px;">
<?php
echo "<center><b><h2>"."Price Details"."<h2></b></center>";
$grandtotal=0;
$items=0;
$query = "select Quantity,Total from cart where user_id='$id'";
$result2=$conn->query($query);
while($row=$result2->fetch_assoc())
{

 $a = $row["Quantity"];
 
$b = $row["Total"];
$grandtotal=$grandtotal+$b;
$items=$items+$a;
	
	
}


?>
<table class="table table-borderless">

<tr>
<td><strong>Total Items</strong></th>
<td> <?php echo $items; ?>  </td>
</tr>
<tr>
<td><strong>Grand Total</strong></th>
<td><?php echo $grandtotal; ?> </td>
</tr>
</table>
<div class="row">
<div class="col-sm-6">
<form method ="post" action="empty.php">
	<input type="submit" name="submit" value="EMPTYCART">
	</form>
</div>
<div class="col-sm-6">
<form method ="post" action="bank.php">
	<input type="submit" name="submit" value="NEXT">
	</form>
</div>
</div>

</div>
</div>
<?php
mysqli_close($conn);

?>
<?php
include('footer.php');
?>

