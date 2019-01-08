<?php


require('connection.php');
$password= md5($_POST['password']);

//check email is registered or not









 $sql = "INSERT INTO register (first_name,last_name,email,phone,city,password)values('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["city"]."','".$password."')";
 
	 if($conn->query($sql)){
		 
		 header('Location:Home.php');
		 
	 }
	 else {
       echo"Error".$sql ."<br>".$conn->error;		 
    }




?>
