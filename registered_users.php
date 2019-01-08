
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php

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

/*$sql = "SELECT *  FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "EmailId: " . $row["email"]. "	PhoneNo: " . $row["phone"]. "city " . $row["city"]. "password " . $row["password"]."<br>";
    }
} else {
    echo "0 results";
}*/


$result = mysqli_query($conn,"SELECT * FROM register");
 
 echo "<table border='1'> <tr>
 <th>Id</th>
 <th>Firstname</th> 
 <th>Lastname</th>
<th>EmailId</th>
<th>PhoneNo</th>
<th>city</th>
<th>password</th>
<th>Actions</th> </tr>";
 while($row = mysqli_fetch_array($result))
	 { echo "<tr>";
 echo "<td>" . $row['id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['city'] . "</td><td>" . $row['password'] . "</td>";
echo"<td>";?>
<span class="glyphicon glyphicon-info-sign"></span>
<span class="glyphicon glyphicon-edit"></span>
 <span class="glyphicon glyphicon-trash"></span>
 <?php
 echo "</td></tr>"; }
 echo "</table>";
 mysqli_close($conn);
 //$conn->close();
 ?>




