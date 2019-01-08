<?php
//echo"hii";  
//die;
//echo "hello";
    require("connect.php");


 session_start();

     if( isset ($_SESSION['email']))
    {
     $email= $_SESSION['email'];
// echo $email; die;
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

}//outermost if
$_SESSION['user_id']=$id;
$id_user= $_SESSION['user_id'];


$product_id= $_GET['p_id'];

//echo $product_id;die;

$q = $_POST["p_quan"];
$_SESSION['q']=$q;



// $res=mysqli_query($conn,"SELECT user_id FROM cart");
//echo $res;die;


  
  
  
  

$sql = "SELECT user_id FROM cart";
$result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  //$count = mysqli_num_rows($result);
  
  if($row) 
  {//echo"hi";die;
 //echo "<pre>";
 // print_r($row);
  // echo in_array($id_user,$row);die;
     if(in_array($id_user,$row))
  {
  echo "hello";die;
 // $query= "select prod_id from cart where user_id='$id_user'";

     // $user_cart= mysqli_query($conn, $query);
     // $row = mysqli_fetch_assoc($user_cart);

  }

     $res1=mysqli_query($conn,"select prod_id , user_quan2  from cart where user_id='$id' ");
     $row = mysqli_fetch_assoc($res1);


if(in_array($product_id,$row))

{
//echo $product_id;die;
$user_quan2=$row["user_quan2"];
//echo $user_quan2;die;
$res2 =mysqli_query($conn,"update cart set user_quan2=  $user_quan2+$q where prod_id='$product_id'");
//$res3=mysqli_query($conn,"update cart set total_price= user_quan2+prod_price where prod_id='$product_id'");
//$res4=mysqli_query($conn,"update cart set prod_p_quan= prod_p_quan-user_quan2 where prod_id='$product_id'");
header('Location:view_cart.php');


}

  }
 
else
{

    

$res=mysqli_query($conn,"select *  from product where p_id='$product_id' ");


    while($row = mysqli_fetch_assoc($res))
{

    $product_id = $row["p_id"];
$product_price = $row["p_price"];
$product_quantity= $row["p_quan"];
$product_name=$row["p_name"];
$product_image=$row["p_image"];
// echo $product_quantity;die;
}
$_SESSION['p_id']= $product_id;