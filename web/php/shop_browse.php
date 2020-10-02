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
<li class="active"><a href="./shop_browse.php">   Home</a></li>
<li><a href="./shop_browse.php"><span class="glyphicon glyphicon-tags"></span>   Products</a></li>
<li><a href="#"><span class="glyphicon glyphicon-phone"></span>   Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span>   Your Account</a></li>
<li><a href="shop_cart.php"><span class="glyphicon glyphicon-shopping-cart">
</span>   Cart</a><?=$cartNum;?></li> <!--need php code for cart++-->
<?php

?>
</ul>
</div>
</div>
</nav>
<form id="buyForm0">
<div class="container">
<div class="row">
<div class="col-sm-4"id="item0" name="item[]" value="item0">
<div class="panel panel-primary">
<div class="panel-heading">Name</div>
<div class="panel-body"><img src="" class="img-responsive" style="width:100%" alt="Image"></div>
<div class="panel-footer">
<p>Description</p>
<p><input type="checkbox" id="price0" name="price[]" onchange="checkTotal()" value="10">$10.00</p></div>
</div></div>
<div class="col-sm-4" id="item1" name="item[]" value="item1">
<div class="panel panel-primary">
<div class="panel-heading">Name</div>
<div class="panel-body">
	<p><img src="" class="img-responsive" style="width: 100%" alt="Image"></div>
<div class="panel-footer">
<p>Description</p>
<p><input type="checkbox" id="price1" name="price[]" onchange="checkTotal()" value="10">$10.00</p></div></div>
</div>
<div class="col-sm-4" id="item2" name="item[]" value="item2">
<div class="panel panel-primary">
<div class="panel-heading">Name</div>
<div class="panel-body"><img src="" class="img-responsive" style="width: 100%" alt="Image"></div>
<div class="panel-footer">
<p>Description</p>
<p><input type="checkbox" id="price2" name="price[]" onchange="checkTotal()" value="10">$10.00</p></div>
</div>
</div>
</div></div>
<div class="container">
<div class="row">
<div class="col-sm-4" id="item3" name="item[]" value="item3">
<div class="panel panel-primary">
<div class="panel-heading">Name</div>
<div class="panel-body"><img src="" class="img-responsive" style="width: 100%;" alt="Image"></div>
<div class="panel-footer">
<p>Description</p>
<p><input type="checkbox" id="price3" name="price[]" onchange="checkTotal()" value="10">$10.00</p><div>
</div>
</div></div></div>
<div class="col-sm-4" id="item4" name="item[]" value="item4">
<div class="panel panel-primary">
<div class="panel-heading">Name</div>
<div class="panel-body"><img src="" class="img-responsive" style="width:100%" alt="Image"></div>
<div class="panel-footer">
<p>Description</p>
<p><input type="checkbox" id="price4" name="price[]" onchange="checkTotal()" value="10">$10.00</p></div>
</div>
</div>
<div class="col-sm-4"id="item5" name="item[]" value="item5">
<div class="panel panel-primary">
<div class="panel-heading">Name</div>
<div class="panel-body"><img src="" class="img-responsive" style="width: 100%" alt="Image"></div>
<div class="panel-footer">
<p>Description</p>
<p><input type="checkbox" id="price5" name="price[]" onchange="checkTotal()" value="10">$10.00</p>
</div>
</div></div></div></div>
<div class="container">
<div class="row">
<div class="col-sm-12" id="total" name="total" value="Total">
<div class="panel panel-primary">
<div class="panel-heading">Total</div>
<div class="panel-footer"><p id="totalNum" name="totalNum">0.00</p>
<p><input type="button" onclick="checkTotal()" value="Add to Cart"></p></div></div>
<script>function checkTotal() {
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
</div>
</div>
</div><br><br>
</form>
</form>
<footer class="container-fluid text-center">
<p>RestrainedChaos Inc.</p>
</footer>
</body>
</html>


