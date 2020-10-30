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
                <h1>
                    <a href="./shop_browse.php">
                    Sprinkle Heaven
                    </a>
                </h1>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
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
                    $cart = array();
                    //if post var 'price' is valid array       
                    if(!empty($_POST['price']) && is_array($_POST['price'])) {
                    //loop thru array of checkbox values
                        foreach ($_POST['price'] as $names) {
                        //make sure option is valid
                            echo ucfirst($names) . "bubbles <br>";
                            //add selected options to $cart array
                            $cart[] = $names;
                            }
                        }
                    //var_dump($cart); 
                    $cartTotal = $_POST['totalNum'];
                    echo "Total: " . $cartTotal;
                ?> 
                <br><br>
                <label for="name">Name:  </label>
			    <input type="text" placeholder="Name" id="name" name="name">
			    <br>
			    <label for="email">Email:  </label>
			    <input type="text" placeholder="Email Address" id="email" name="email">
			    <br>
                
                <br><br>
                <button type='submit' id='submit' name='formBtn' value='submit' action="./shop_confirm.php">Confirm Order</button>
            </fieldset>
        </form>
        <footer class="footer">
            <p id="footertag">RestrainedChaos Inc.</p>
        </footer>
    </body>
</html>