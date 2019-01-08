<?php
include("header.php");
 session_start();
require("connection.php");
$grandtotal=0;
$items=0;
$temp=$_SESSION['user_id'];
//echo $temp;die;
$query = "select * from cart where user_id='$temp'";
//echo $query;die;
$res=mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($res))
{
$c= $row["product_name"];
 $a = $row["Quantity"];
 $p = $row["prod_price"]
$b = $row["Total"];
$grandtotal=$grandtotal+$b;
$items=$items+$a;

}?>
<div class="container">
  <h2>Basic Table</h2>
            
  <table class="table">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
		<th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
echo "<table border='1'> <tr>
<th>Product Name </th>
<th>Total Items</th>
<th>grand total</th>
</tr>";
{ echo "<tr>";
echo "<td>" . $c. "</td><td>" . $items. "</td><td>" .$grandtotal. "</td>";
echo"</tr>";
echo "</table>";

mysqli_close($conn);
}
?>
<?php
include("nav.php");
session_start();
require("connect.php");
$grandtotal=0;
$items=0;
//$c;
$temp=$_SESSION['user_id'];
//echo $temp;die;
$query = "select * from cart where user_id='$temp'";
//echo $query;die;
$res=mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($res))
{

    $a = $row["user_quan2"];
$b = $row["total_price"];
//$c = $row["prod_name"];
//$d = $row["prod_price"];

$grandtotal=$grandtotal+$b;
$items=$items+$a;

}


 ?>
  

<div class="col-sm-6 col-md-6">
 <h2>Invoice</h2>
 <p>Please have a look at the items of your cart:</p>            
 <table class="table table-hover">
   <thead>
     <tr>
       <th>Product Name</th>
       <th>Quantity</th>
       <th>Price</th>
<th>Total</th>
     </tr>
   </thead>
   <tbody>
<?php
$query = "select * from cart where user_id='$temp'";

   $res=mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($res))
{
echo "<tr>";
echo "<td>" .$row['prod_name']. "</td>";
echo "<td>". $row['user_quan2']. "</td>";
echo "<td>" .$row['prod_price'] ."</td>";
echo "<td>". $row['total_price'] ."</td>";


// echo "<td>" . $row['prod_name'] . "</td><td>" . $row['user_quan2'] . "</td><td>" . $row['prod_price'] . "</td><td>" . $row['total'] . "</td>" 
?>


     
     </tr>
<?php } ?>
   </tbody>
 </table>
</div>
<div class="col-sm-6 col-md-6">
<?php

echo "<table border='1'> <tr>
<th>Total Items</th>
<th>grand total</th>
</tr>";
 echo "<tr>";
echo "<td>" . $items . "</td><td>" . $grandtotal . "</td>";
echo"</tr>";


?>
</div>


Send a message

