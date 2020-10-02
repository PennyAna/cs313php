<!--The checkout page should:
    ask the user for the different components of 
    their address. 
    (No credit card or other purchase information 
    is collected, only an address.)
    the option to complete the purchase 
    or return to the cart.-->
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Store">
<meta name="keywords" content="">
<meta name="author" content="RestrainedChaos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Title</title>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="../css/shopping.css"/>
</head>
<body>
<div class="jumbotron">
<div class="container text-center">
<h1>Header</h1>
<a href="./shop_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><?=$cartNum;?></a>
 <!--need php code for cart++/-->
 <?php

?>
<p></p>
</div>
</div>
<form id="cartCount" method="post" action="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Menu</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="./shop_browse.php"> Home</a></li>
<li><a href="./shop_browse.php"><span class="glyphicon glyphicon-tags"></span> Products</a></li>
<li><a href="#"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href=""><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
<li><a href="./shop_cart.php"><span class="glyphicon glyphicon-shopping-cart">
</span> Cart</a><?=$cartNum;?></li> <!--need php code for cart++-->
<?php

?>
</ul>
</div>
</div>
<form id='confirm2' name='confirm2' action='confirm.php' method="post">
			<label for="name">Name</label>
			<input type="text" placeholder="Name" id="name" name="name">
			<br>
			<label for="email">Email</label>
			<input type="text" placeholder="Email Address" id="email" name="email">
			<br>
<p>Items in Cart: <br></p>
<?php
//whitelist of valid options
$cartOptions = array(
       'price0', 
       'price1', 
       'price2', 
       'price3', 
       'price4', 
       'price5', 
       'price6', 
       'price7', 
       'price8', 
       'price9', 
       'price10', 
       'price11', 
       'price12', 
       'price13');
//empty array
$cart = array();
//if post var 'price' is valid array       
if(!empty($_POST['price']) && is_array($_POST['price'])) {
//loop thru array of checkbox values
    foreach ($_POST['price'] as $prices) {
    //make sure option is valid
		if(in_array($prices, $cartOptions)) {
       //add selected options to $cart array
       $cart[] = $price;
       }
       }
       }
var_dump($cart);
$cartNum = 0;
foreach ($cart as $cartItem) {
       echo $cartItem . "<br>";
	   $cartNum++;
	   }
echo "Total: ";
if (isset($_POST["total"])) 	
	{echo $_POST["total"];}
?>
<button type='submit' id='submit' name='formBtn' value='submit'>Confirm Order</button>
</form>
</body>
</html>