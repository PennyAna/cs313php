<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="../css/wk2.css" type="text/css">
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
			<h4><small>POSTS</small></h4>
			<hr>
			<h2>Blah Blah</h2>
			<h5>Post post</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<br><br>
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
