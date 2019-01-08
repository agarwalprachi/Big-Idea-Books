<?php

?>



<div class="container-fluid">
	<nav class="navbar navbar-default" style="background-color:#FF5733;">
	<div class="row">
	<div class="col-sm-2">
	<div class="navbar-header">

	 <a><img src="bigideabooks.png" id="logo"></a>
	   
	</div>
	</div>
	<div class="col-sm-8">
	  <ul class="nav navbar-nav">
	  <li class="active"><a href="">Home</a></li>
      <li><a href="b1.html">AboutUs</a></li>
      <li><a href="Contact.html">ContactUs</a></li>
	 
	
	
     <?php
     if(isset($_SESSION['email'])){
     if($status==1){
     ?>
     <li><a href="registered_users.php">Registered user</a></li> 
	 <li><a href="#">View Product</a><li>
	 <li><a href="#">Add Product</a></li>

      <?php
         }elseif($status==0){
           ?>
		   <li><a href="">View Product</a></li>
		   <?php>
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
     <li><a href="logout.php">Logout</li>
     <?php
      }
       elseif($status==0){
        echo "Welcome ".$name; 
      ?>
     <li><a href="logout.php">Logout</li>
 
     <?php
     }//if session is not set
	  }else{
      ?>
      <li><a href="Register.html">SignUp</a></li>
      <li><a href="LogIn.html">LogIn</a></li>
     <?php
     }
     ?>
	  
    </ul>
	
  </div>
  </div>
</nav>