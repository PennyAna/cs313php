<!--add to cart == link to cart icon. When clicked, post to cart page.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sprinkle Heaven">
    <meta name="keywords" content="sprinkles, heaven, happiness, cake decorating, cupcake decorating, sugar">
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
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="./shop_browse.php">   Home</a></li>
                <li><a href="./shop_browse.php"><span class="glyphicon glyphicon-tags"></span>   Products</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-phone"></span>   Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>   Your Account</a></li>
                <li><a href="shop_cart.php">
                    <span class="glyphicon glyphicon-shopping-cart"></span>   Cart</a><?=$cartNum;?></li>
            </ul>
        </div>
    </nav>
    <form id="buyForm0" action="./shop_cart.php" method="POST">
        <div class="container">
            <div class="row">
                <!--item1-->
                <div class="col-sm-4" id="item0" name="item[]" value="item0">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Nebula
                        </div>
                        <div class="panel-body">
                            <p><img src="../images/nebulanew-680188_800x.jpg" class="img-responsive" style="width:100%" alt="Nebula Sprinkles">
                            </p>
                        </div>
                        <div class="panel-footer">
                            <p>Take a trip to outer space with this galactic blend 
                            of beautiful crunchy jimmies, stars, silver jimmies, 
                            mini silver glitter stars, and teal beads. </p>
                            <p><input type="checkbox" id="price0" name="price[]" onchange="checkTotal()" value="nebula">$10.00
                            </p>
                        </div>
                    </div>
                </div>
                <!--item2-->
                <div class="col-sm-4" id="item1" name="item[]" value="item1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Animal Crackers
                        </div>
                        <div class="panel-body">
                            <p><img src="../images/animal_crackers.jpg" class="img-responsive" style="width: 100%" alt="Image">
                            </p>
                        </div>
                        <div class="panel-footer">
                            <p>Animal crackers is an adorable take on the classic circus 
                            cookie. Pastel pink crunchy jimmies are mixed with whites and 
                            classic rainbow. Looks super cute on just about anything!</p>
                            <p><input type="checkbox" id="price1" name="price[]" onchange="checkTotal()" value="animal_crackers">$10.00
                            </p>
                        </div>
                    </div>
                </div>
                <!--item3-->
                <div class="col-sm-4" id="item2" name="item[]" value="item2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Mermaid Cove
                        </div>
                        <div class="panel-body"><img src="../images/mermaid_code.jpg" class="img-responsive" style="width: 100%" alt="Image">
                        </div>
                        <div class="panel-footer">
                            <p>Mermaid cove is a mermaid themed blend of rich colors 
                            reminiscent of the sea. From the golden coins to the deep 
                            green, blue, and teal accents, it's all as enticing as a 
                            sea siren. Glitter stars and hexagons add an extra pop of 
                            sparkle!</p>
                            <p><input type="checkbox" id="price2" name="price[]" onchange="checkTotal()" value="mermaid_cove">$10.00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--item4-->
                <div class="col-sm-4" id="item3" name="item[]" value="item3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Bubble Bath
                        </div>
                        <div class="panel-body"><img src="../images/bubblebath_720x.jpg" class="img-responsive" style="width: 100%;" alt="Image">
                        </div>
                        <div class="panel-footer">
                            <p>Oh boy. Bubble bath is a bubbly, cutesy blend of all 
                            pink and white beads in different sizes. It's so adorable, 
                            you'll have to see it to believe it.</p>
                            <p><input type="checkbox" id="price3" name="price[]" onchange="checkTotal()" value="bubble_bath">$10.00
                            </p>
                        </div>
                    </div>
                </div>
              <!--item5-->
                <div class="col-sm-4" id="item4" name="item[]" value="item4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Firecracker
                        </div>
                        <div class="panel-body"><img src="../images/firecracker.jpg" class="img-responsive" style="width:100%" alt="Image">
                        </div>
                        <div class="panel-footer">
                            <p>Firecracker is a patriotic explosion of red, white, 
                            blue, and silver. This mix is packed with silver sugar 
                            nuggets, crunchy jimmies, and edible silver glitter stars 
                            + hexagons. It's a glitter bomb!</p>
                            <p><input type="checkbox" id="price4" name="price[]" onchange="checkTotal()" value="firecracker">$10.00
                            </p>
                        </div>
                    </div>
                </div>
                <!--item6-->
                <div class="col-sm-4"id="item5" name="item[]" value="item5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Golden Eagle
                        </div>
                        <div class="panel-body"><img src="../images/golden_eagle.jpg" class="img-responsive" style="width: 100%" alt="Image">
                        </div>
                        <div class="panel-footer">
                            <p>Golden eagle is a spectacular display of american 
                            pride! Red, white, and blue are combined with gold 
                            elements such as gilded sugar nuggets, glitter stars, 
                            and many different sized golden dragees for an epic, 
                            boastful show.</p>
                            <p><input type="checkbox" id="price5" name="price[]" onchange="checkTotal()" value="golden_eagle">$10.00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--carttotal-->
                <div class="col-sm-12" id="total" name="total" value="Total">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Total
                        </div>
                        <div class="panel-footer">
                            <p id="totalNum" name="totalNum">0.00
                            </p>
                            <p id="addcartbtn">
                                <input type="submit" value="Add to Cart">
                            </p>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </form>
    <p id= "creditdue"><br>
        These products, 
        along with their names, photos, and descriptions,
        belong to 
        <a href="https://www.fancysprinkles.com">Fancy Sprinkles</a></p><br>   
        <br>    
    </p>
    <footer class="footer">
        <p id="footertag">
            RestrainedChaos Inc.
        </p>
    </footer>
</body>
<script>
function checkTotal() {
    var table = document.getElementById("buyForm0");
    var checks = table.getElementsByTagName("input");
    var sum = 0;
     for (i=0; i < checks.length; i++) {
        if (checks[i].checked) {
            sum = sum + 10;
        }
    } 
    document.getElementById("totalNum").innerHTML = sum.toFixed(2);
    document.getElementById("totalNum").value = sum.toFixed(2);
}
</script>
</html>


