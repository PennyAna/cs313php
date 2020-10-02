<!--After completing the purchase 
from the checkout page, the user is shown: 
    a confirmation page. It should:
        display all the items they have just 
        purchased as well as the address to 
        which it will be shipped.

Make sure to check: 
    for malicious injection, 
    especially from free-entry fields 
    like the address.-->
<?php 
	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
?><!DOCTYPE html>
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
<a href="./shop_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
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
<li class="active"><a href="./shop_browse.php">   Home</a></li>
<li><a href="./shop_browse.php"><span class="glyphicon glyphicon-tags"></span>   Products</a></li>
<li><a href="#"><span class="glyphicon glyphicon-phone"></span>   Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span>   Your Account</a></li>
<li><a href="./shop_cart.php"><span class="glyphicon glyphicon-shopping-cart">
</span>   Cart</a></li>
</ul>
</div>
</div>
    <header> <h1>Order Confirmation</h1> </header>
    <div id='page-container'>
      <div id='content-wrap'>
        <h2>Header</h2>
        <p>
<?php 
	echo "Order Number: " . (mt_rand(10, 1000)) . "<br>";
	echo $name . ", thank you for your order! <br> You will receive a confirmation email at ";
	echo $_POST["email"] . "! <br>";
?>
	</p>
      </div>
      <footer>
        <p>RestrainedChaos Inc.</p>
      </footer>
    </div>
  </body>
</html>