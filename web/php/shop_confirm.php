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
                    </ul>
                </div>
            </div>
        </nav>
      <header> <h3>Order Confirmation</h3> </header>
      <div id='page-container'>
        <div id='content-wrap'>
          <p> Order Number: 
            <?php 
              echo "Order Number: " . (mt_rand(10, 1000)) . "<br>";
              echo $name . ", thank you for your order! <br> You will receive a confirmation email at ";
              echo $_POST["email"] . "! <br>";
            ?>
            </p>
        </div>
      </div>
    <footer class="footer">
      <p id="footertag">RestrainedChaos Inc.</p>
    </footer>
  </body>
</html>