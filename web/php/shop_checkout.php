<!--The checkout page should:
    ask the user for the different components of 
    their address. 
    (No credit card or other purchase information 
    is collected, only an address.)
    the option to complete the purchase 
    or return to the cart.-->
<!DOCTYPE html>
<html>
<head>
<meta>
</head>
<body>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='RestrainedChaos'>
    <title>Title</title>
    <link rel='stylesheet' type='text/css' href='../css/shopping.css'>
  </head>
  <body>
    <header> <h1>Header</h1></header>
	<p>
	<a href='./browsemain.php'>Shop Home</a>
	<a href='../homepage/home2.html'>Assignments</a>
	<a href='../index.php'>Homepage</a>
	</p>
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