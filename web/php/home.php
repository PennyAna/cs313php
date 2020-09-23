<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CS 313 Assignments</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/wk2.css" type="text/css">
<script src="../js/wk2.js"></script>
</head>
<body>
<div class="header">
<br></div>
<div id="phpMe">
<?php 
date_default_timezone_set('America/Denver');
echo "The time is " . date("h:i:a") . ".<br>";
$t = date("H");
if ($t < 10) {
	echo "Have a good morning!";
} elseif ($t < 20 and $t > 10) {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}
?>
</div><br>
<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-3 sidenav">
			<h4>Title</h4>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="../php/home.php">Home</a></li>
				<li class="active"><a href="./wk2.html">Assignments</a></li>
			</ul><br>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search Site...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</div>
		<div class="col-sm-9">
										<br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="container-fluid">
			<div class="footer"><br>Text Source: </div>
			</footer>
<script src="js/wk2.js"></script>
</body>
</html>
