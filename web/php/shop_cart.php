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
        <title>Sprinkle Heaven</title>
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../css/shopping.css"/>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Sprinkle Heaven</h1>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Menu</a> -->
                </div>
                 <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./shop_browse.php">   Home</a></li>
                        <li><a href="./shop_browse.php"><span class="glyphicon glyphicon-tags"></span>   Products</a></li>
                        <li><a href="#">
                            <span class="glyphicon glyphicon-phone">
                            </span>   Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>   Your Account</a></li>
                        <li><a href="./shop_cart.php">
                            <span class="glyphicon glyphicon-shopping-cart">
                            </span>   Cart</a></li>
                <!--Provide a way to remove individual items 
                from the cart.
                The view cart page should have:
                a link to return to the browse page 
                for more shopping
                a link to continue to the checkout page.-->
                    </ul>
                </div>
            </div>
        </nav>
        <form id='confirm2' name='confirm2' action='confirm.php' method="post">
            <fieldset>
                <legend>Your Cart</legend>   
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
                            array_push($cart, $prices);
                        }
                        }
                        }
                    var_dump($cart); 
                    echo $cart . "<br>";       
                    $cartNum = 0;
                    foreach ($cart as $cartItem) {
                        echo $cartItem . "<br>";
                        $cartNum++;
                        }
                    echo "<br>Total:  ";
                    if (isset($_POST["total"])) 	
                        {echo $_POST["total"];}
                ?> 
                <br><br>
                <label for="name">Name:  </label>
			    <input type="text" placeholder="Name" id="name" name="name">
			    <br>
			    <label for="email">Email:  </label>
			    <input type="text" placeholder="Email Address" id="email" name="email">
			    <br>
                
                <br><br>
                <button type='submit' id='submit' name='formBtn' value='submit'>Confirm Order</button>
            </fieldset>
        </form>
        <footer class="footer">
            <p id="footertag">RestrainedChaos Inc.</p>
        </footer>
    </body>
    <script>
    function checkTotal() {
    var table = document.getElementById("buyForm0");
    var checks = table.getElementsByTagName("input");
    var sum = 0;
    for (i=0; i < checks.length; i++) {
        if (checks[i].checked) {
            sum = sum + parseFloat(checks[i].value);
        }
    }
    document.getElementById("totalNum").innerHTML = sum.toFixed(2);
    document.getElementById("totalNum").value = sum.toFixed(2);
}</script>
</html>