<?php
require('connection.php');

   session_start();
//to find the user id for the logged in user
     if( isset ($_SESSION['email']))
    {
     $email= $_SESSION['email'];

	 $sql = "SELECT id FROM register where email='$email'";
$result = $conn->query($sql);
$id;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
    }
} else {
    echo "0 results";
}	 
}
$_SESSION['user_id']=$id;
$u =$_SESSION['user_id']; 
//echo $u;die;
	 
	 
	 
	 
  //to check if userid presents in cart table
	
//outermost if

$product_id= $_POST['product_id'];
$_SESSION['product_id']= $product_id;
//echo $product_id;die;
//$product_id= $_GET['p_id'];
$q = $_POST["quant"];
$_SESSION['q']=$q;
	
// $res ="select user_id from cart";
$res = "select * from cart where user_id='$u' AND prod_id= '$product_id'";
//echo $res;die;
 $result = $conn->query($res);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//quantity uodate
		$res2= "update cart set Quantity = Quantity+$q where prod_id='$product_id'";
        $result2 =$conn->query($res2);
		$r="update cart set Total=Total+ ($q*prod_price) where prod_id='$product_id'";
		$result3 = $conn->query($r);
		
		$res5="update cart set product_p_quantity =  product_p_quantity - $q where prod_id='$product_id'";
         $result5=$conn->query($res5);
  
   $res6="update product set p_quantity = p_quantity-$q where prod_id='$product_id'";
  $result6=$conn->query($res6);
		header('Location:view_cart.php');
    }
} else {
	$res="select *  from product where p_id='$product_id' ";
	$r= $conn->query($res);


    while($row = $r->fetch_assoc())
{

    $product_id = $row["p_id"];
$product_price = $row["p_price"];
$product_quantity= $row["p_quantity"]-$q;
$product_name=$row["p_name"];
$product_image=$row["p_image"];

}
$_SESSION['p_id']= $product_id;
$_SESSION['p_price']= $product_price;
$_SESSION['p_pquantity']=  $product_quantity;
$_SESSION['p_name']=$product_name;
$_SESSION['p_image']=$product_image;
$t=$_SESSION['q']*$_SESSION['p_price'];
//echo $t; die;
$_SESSION['t1']=$t;
$sql = "INSERT INTO cart(user_id,prod_id,product_name,prod_image,prod_price,product_p_quantity,Quantity,Total)
             VALUES ('".$_SESSION['user_id']."','".$_SESSION['p_id']."','".$_SESSION['p_name']."','".$_SESSION['p_image']."','".$_SESSION['p_price']."','".$_SESSION['p_pquantity']."','".$_SESSION['q']."','".$_SESSION['t1']."')";

if($conn->query($sql)){
echo "New record is inserted";
 header('Location:view_cart.php');
}
else {
      echo"Error".$sql ."<br>".$conn->error;	
   }
    
}

 ?>
 