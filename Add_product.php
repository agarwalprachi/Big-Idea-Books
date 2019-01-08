<?php
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="detail";
$conn = new mysqli($host, $dbusername, $dbpassword,$dbname);

if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'
	.mysqli_connect_error());
}
	

//check if connection is successful or not
//else{
//$password= md5($_POST['password']);

 $sql = "INSERT INTO product (p_name,p_image,p_description,p_price,p_quantity)values('".$_POST["p_name"]."','".$_POST["p_image"]."','".$_POST["p_description"]."','".$_POST["p_price"]."','".$_POST["p_quantity"]."')";
	 if($conn->query($sql)){
		 echo"New product inserted";
		// header('Location:Home.html');
		 
	 }
	 else {
       echo"Error".$sql ."<br>".$conn->error;		 
    }
        $conn->close();



?>
