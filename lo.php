<?php 
$email= $_POST['email'];
$Password= $_POST['password'];

 

$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="detail";
$conn = new mysqli($host, $dbusername, $dbpassword,$dbname)or die('Could not connect:'.mysql_error());



 

$select1 = "SELECT * FROM register WHERE email='$email' and password='$Password'";
$result1 = mysql_query($select1)or die(mysql_error());

$num1 = mysql_num_rows($result1);

if($num1>0){

    $row = mysql_fetch_row($result1);

    $email = $row[0];
 

    $select2 = "SELECT * FROM register WHERE email='$email'";
    $result2 = mysql_query($select2)or die(mysql_error());
    $row2 = mysql_fetch_row($result2);

    $email = $row2[1];

    $_SESSION['logname'] = $email;

    mysql_close($conn);

    header("Location:Home.html");

}else{

    mysql_close($conn);

}

?>
