<?php
require("connection.php");
session_start();
//to find the user id for the logged in user
   if( isset ($_SESSION['email']))
  {
   $email= $_SESSION['email'];

$sql = "SELECT id FROM register where email='$email'";
$result = $conn->query($sql);
$id;
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
      $id=$row["id"];
  }
} else {
  echo "0 results";
}	 
}
$_SESSION['user_id']=$id;
$u =$_SESSION['user_id']; 



$r="delete from cart where user_id='$id'";
if($conn->query($r)===TRUE)
{
header('Location:View_product.php');
}
?>
