<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Online Books Reading</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php
require('conn.php'); 
session_start();
if(isset($_SESSION['email'])){
$email= $_SESSION['email'];
$sql = "SELECT * FROM register where email='$email'";
$result = mysqli_query($connection, $sql);
$status;
$name;
if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
$name = $row["first_name"];
$status=$row["status"];
       
   }
} else {
   echo "0 results";

}
}
?>

<div class="container-fluid" style="padding-right: 0px;padding-left: 0px; font-size:20px">
	<nav class="navbar navbar-default" style="background-color:#dae61b; display: flow-root;">
	<div class="row" style="margin-right: 34px; margin-left: -14px; webkit-text-size-adjust: 50%; ">
	<div class="col-sm-2">
	<div class="navbar-header">


	 <a><img src="logo.png" id="logo"></a>
	   
	</div>
	</div>
	<div class="col-sm-8">
	  <ul class="nav navbar-nav">
	  <li><a href="Home.php">Home<span style="font-size:100px height:40px"></span></a></li>
      <li><a href="b1.php">AboutUs</a></li>
      <li><a href="Contact.php">ContactUs</a></li>
	   <li><a href="View_product.php">View Product</a><li>
	 
	
	
     <?php
     if(isset($_SESSION['email'])){
     if($status==1){
     ?>
     <li><a href="registered_users.php">Registered user</a></li> 
	
	 <li><a href="Add_product2.php">Add Product</a></li>


      <?php
         }elseif($status==0){
			 ?>
			 <li><a href="view_cart.php">Cart</a></li>
			 
			 <?php

           }
           }


          ?>
</ul>
</div>
	  <div class="col-sm-2" id="options">
	  <ul class="nav navbar-nav">
	  <?php
	  if(isset($_SESSION['email'])){
		  //if session set
      if($status==1){

     ?>
	<!-- <li><a href="registered_users.php">Register Users</a></li> -->
	 <?php echo "Welcome ".$name; ?>
     <li><a href="logout.php">Logout</a></li>
     <?php
      }
       elseif($status==0){
        echo "Welcome ".$name; 
      ?>
     <li><a href="logout.php">Logout</a></li>
 
     <?php
     }//if session is not set
	  }else{
      ?>
      <li><a href="Register.php">SignUp</a></li>
      <li><a href="LogIn.php">LogIn</a></li>
     <?php
     }
     ?>
	  
    </ul>
	
  </div>
  </div>
</nav>
</div>
</body>
</html>