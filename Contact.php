<?php
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ContactUs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;
     background-color: coral;}

input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=int], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=email], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}


input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
     <center><h2>Contact Form</h2></center>
	<div class="container">
	<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
	<center>
    
	<form method="post" action="pay.html">
   <label for="fname">First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <br>

    <label for="Mobile">Mobile No.:</label>
    <input type="int"id="Mobile" name="Mobile Number" placeholder="Your mobile no....">
    <br>
	<label for="ei">EmailId:</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" id="ei" name="Email Id" placeholder="Enter your valid Email Id">
    <br>
    <label for="country">Country:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="India">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>></label>
	 </select>
      <br>
     <input type="submit" value="submit">
	</form></center>
	</div>
	<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>
<?php
include('footer.php');
?>