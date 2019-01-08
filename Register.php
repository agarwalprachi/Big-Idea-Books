<?php
include 'header.php';
?>
<html>
<head>
<!--<div class="loginbox" style="padding-right: 0px;padding-left: 612px;background-color: mintcream; ">-->

<link rel="stylesheet" type="text/css" href="s.css">

</head>
<body>
<div class="loginbox" style="height:615px; margin-left: 501px;">
<!--<img src="sy.jpg" class="avatar">-->
<img src="siimage.png" class="avatar">
<h2>Sign Up </h2>
<form method="post" action="form_connect.php">
FirstName:<br> <input type="text" id="firstname" name="first_name" pattern="[A-Za-z]{1,32}"  required><br>LastName: <input type="text" id="lastname" name="last_name" pattern="[A-Za-z]{1,32}"  required><br>
Email Id:<br><input type="email" id="email" pattern ="[^@]*@[^@]*" name="email" required><br>
PhoneNo:<br><input type="tel" id="phone" name="phone" pattern="^\d{10}$" required><br>
   <label for="city">City:</label><br>
    <select id="city" name="city" required>
      <option value="gurgaon">Gurgaon</option>
      <option value="delhi">Delhi</option>
      <option value="canada">Faridabad</option>
      <option value="usa">Noida</option></label></select>
      <br>
Password:<br><input type="password" id="pass" name="password" required><br>
<input type="submit"  name ="submit" value="Submit">

</div>
</form>
 <?php
 include('footer.php');
 ?>
 <script type="text/javascript">
 function form_valid(){
	 alert('text');
 }
 </script>
 <!--<?php
//include('header.php');
?><html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
<div class="loginbox" style="height:442px; margin-left: 501px;">
<img src="sy.jpg" class="avatar">
<h1>Login to Your Account</h1>
<form method="post" action="newlogin.php">
Email:<input type="text" name="email" placeholder="Enter Your EmailId"><br>
Password :<input type="text" name="password" placeholder="Enter Password"><br>
<input type="submit" value="Submit" name="submit">

</div>
</form>
<?php
//include('footer.php');
?>
</body>
</html>
