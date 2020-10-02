<!--browse should have:
			header
			logo
			shopping cart form with add to cart action heading to cart php
			about blurb
			add to cart option
			cart icon 
			footer 
adding to cart: action sends to cart php & adds item to cart array
clicking cart icon: action sends to cart php
cart php contains: cart summary
					submit "checkout" button, clear button
					action sends to confirm php
-->
<!-- 
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Red Riding Hood Store">
<meta name="keywords" content="Little Red Riding Hood, little red riding hood, granny, big bad wolf">
<meta name="author" content="RestrainedChaos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Title</title>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="./shopping.css"/>
</head>
<body>
<div class="container fluid" id="flex1" >
<div class="row">
<div id="headerDiv" class="span-12">
insert RR1 pic
<img id="" src="" alt="">
<header><p>Header</p></header>
insert basket icon
<img id="" src="" alt="See Cart"><a href="./cartmain.php">Cart</a></img>
</div>
</div>
<div id="formDiv">
<h2>Current Stock</h2>
<form method="post" action="./cartmain.php" id="browseCart" class="row">
<table id="stock">
            <tr>
              <th class="col-sm-4">Item</th>
              <th class="col-sm-4">Description</th>
              <th class="col-sm-4">Purchase?</th>
            </tr>
            <tr>
              <td id="item0" 
                  name="item[]"
                  value="item0" 
                  class="col-sm-4">Item 0</td>
              <td class="col-sm-4">
                Description 0</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price0"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td id="item1" 
                  name="item[]"
                  value="item1" 
                  class="col-sm-4">Item 1</td>
              <td class="col-sm-4">
               Description 1</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price1"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item2"
                   name="item[]"
                   value="item2"
                   class="col-sm-4">Item 2</td>
              <td class="col-sm-4">Description 2</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price2"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item3"
                   name="item[]"
                   value="item3"
                   class="col-sm-4">Item 3</td>
              <td class="col-sm-4">Description 3</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price3" 
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item4"
                   name="item[]"
                   value="item4"
                   class="col-sm-4">Item 4</td>
              <td class="col-sm-4">Description 4/td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price4"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item5"
                   name="item[]"
                   value="item5"
                   class="col-sm-4">Item 5</td>
              <td class="col-sm-4">Description 5</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price5"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item6"
                   name="item[]"
                   value="item6"
                   class="col-sm-4">Item 6</td>
              <td class="col-sm-4">Description 6</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price6"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item7"
                   name="item[]"
                   value="item7"
                   class="col-sm-4">Item 7</td>
              <td class="col-sm-4">Description 7</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price[]"
                       name="price7"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item8"
                   name="item[]"
                   value="item8"
                   class="col-sm-4">Item 8</td>
              <td class="col-sm-4">Description 8</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price8" 
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item9"
                   name="item[]"
                   value="item9"
                   class="col-sm-4">Item 9</td>
              <td class="col-sm-4">Description 9</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price9"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item10"
                   name="item[]"
                   value="item10"
                   class="col-sm-4">Item 10</td>
              <td class="col-sm-4">Description 10</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price10"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
            <tr>
              <td  id="item11"
                   name="item[]"
                   value="item11"
                   class="col-sm-4">Item 11</td>
              <td class="col-sm-4">Description 11</td>
              <td class="col-sm-4">
                <input type="checkbox" 
                       id="price11"
                       name="price[]"
                       onchange="checkTotal()" 
                       value="10"></input>$10.00</td>
            </tr>
          </table>
		  <div class="row">
          <div id="totalDiv" name="totalDiv" class="col-sm-4">
            Total: $
			</div>
		  <div class="col-sm-4"></div>
			<div class="col-sm-4" id="total" name="total" value="">0.00</div>
		  </div>
</div></div>
<div id="checkoutDiv">
<button id="addCartButton"><a href="./cartmain.php">Add to Cart</a></button>
<button id="resetButton" type="reset">Reset</button>
</div>
        </form>
<div id="linksDiv">
<a href="../home2.html">Assignments</a>
<a href="../../index.php">Homepage</a>
</div>
</div>
</div>
</body>
</html> -->
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
<link rel="stylesheet" type="text/css" href="./shopping.css"/>
</head>
<body>
<div class="jumbotron">
<div class="container text-center">
<h1>Header</h1>
<img id="" src="" alt="">
<h1>Header</h1>
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
<a class="navbar-brand" href="">Reddest Maid</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="#">Products</a></li>
<li><a href="#">Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href=""><span class="glyphicon glyphicon-user"></span>Your Account</a></li>
<li><a href="cartmain.php"><span class="glyphicon glyphicon-shopping-cart">
</span> Cart</a><?=$cartNum;?></li> <!--need php code for cart++-->
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


