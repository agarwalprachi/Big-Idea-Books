<?php
session_start();
require('conn.php');

if (isset($_POST['email']) and isset($_POST['password'])){
$email = $_POST['email'];
$pas = $_POST['password'];
$password  = md5($pas);
$query = "SELECT * FROM `register` WHERE email='$email' and password='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//echo $count;die();
if ($count == 1){
	//$query = "SELECT firstname FROM `register` WHERE email='$email' and password='$password'";
	//$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	
   $_SESSION['email'] = $email;
   
   //echo $_SESSION['email'];
  header('Location:Home.php');
 
  }
  else{

   echo "not login";die();
  } 
}
?>
