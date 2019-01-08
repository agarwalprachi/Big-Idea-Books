<?php
include('header.php');
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
include('footer.php');
?>
</body>
</html>

 
