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
?>
<html>
  <head> 
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='RestrainedChaos'>
    <title>Title</title>
    <link rel='stylesheet' type='text/css' href='shopping.css'>
  </head>
<body>
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