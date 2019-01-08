
<?php
include('header.php');
?>

<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detail";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$res=mysqli_query($conn,"select * from product");
?>
<div class="container-fluid" style="padding-right: 0px;padding-left: 356px;">
<div class="col-sm-6 col-md-8">
<table class="table table-hover">
<thead>
<tr>
<th>Product Name</th>
<th>Product Image</th>
<th>Price</th>
<th>Action</th>
 </tr>
</thead>
<tbody>
  
<?php
while($row=mysqli_fetch_array($res))
{
	echo"<tr>";
	echo"<td>";echo $row["p_name"]; echo"</td>";?>	
<?php	echo"<td>";?><img src="<?php echo $row["p_image"]; ?>" height="100" width="">  <?php echo "</td>";
	
	echo "<td>"; echo $row["p_price"]; echo"</td>";
	echo"<td>";$info_url ="p_description.php?p_id=".$row["p_id"];
	$info_url2 ="update_form.php?p_id=".$row["p_id"];
	$info_url3 ="delete_product.php?p_id=".$row["p_id"];
	
	 
     if( isset($_SESSION['email'])){
     $email= $_SESSION['email'];
     $sql = "SELECT status FROM register where email='$email'";
     $result = mysqli_query($conn, $sql);
     $status;
      if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {

$status=$row["status"];
        
   }
	  }

     
     if($status==0){

        ?>
  
          <a href="<?php echo $info_url; ?>"> <span class="glyphicon glyphicon-info-sign"></span></a>
      <?php
          }
         elseif($status==1){
        ?>

        <a href="<?php echo $info_url; ?>"> <span class="glyphicon glyphicon-info-sign"></span></a>	
        <a href="<?php echo $info_url2; ?>"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="<?php echo $info_url3; ?>"><span class="glyphicon glyphicon-trash"></span></a>
    <?php
   }
   }

     else
   {
    ?>
            <a href="<?php echo $info_url; ?>"> <span class="glyphicon glyphicon-info-sign"></span></a>
      <?php
      }
   
    

     echo"</td>";
  
	?>
	
	
	
<?php
echo"</td>";	
	echo "</tr>";
}
echo "</table>";
?>
</div>
</div>
<?php
mysqli_close($conn);


include('footer.php');
?>
