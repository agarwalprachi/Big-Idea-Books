<?php
(include 'header.php');
?>

<html>
<head>
<title>	LogIn</title>
</head>

<body>
<form method="post" action="Add_product.php" style="margin-left:488px;">
Product Name:<input type="text" name="p_name">
<br>
<br>
Product Image:<input type="file" name="p_image">
<br>
Product Description:<input type="text" name="p_description">
<br>
Product Price:<input type="numbers" name="p_price">
<br>
Product Quantity:<input type="number" name="p_quantity">
<br>
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
<?php (include 'footer.php');?>