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
	<div id="google_translate_element"></div>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<div class="container-fluid">
		<div class="row content">
			<div class="col-sm-3 sidenav">
				<br>
				<div id="phpMe">
					<?php
					date_default_timezone_set('America/Denver');
					echo "The time is " . date("h:i:a") . "(MST).<br>";
					$t = date("H");						
					if ($t < 10) {
						echo "Have a good morning!";
					} elseif ($t < 20 and $t > 10) {
						echo "Have a good day!";
					} else {
						echo "Have a good night!";							
						}						?>
					</div>
					<br>
				<img src="../images/animeMe.jpg" alt="Girl with Glasses" class="img-thumbnail float-left">
				<h3>The Girl with Glasses</h3>
				<ul class="nav nav-pills nav-stacked">
					<li  class="active"><a href="./home.php">Home</a></li>
					<li><a href="./assignments.php">Assignments</a></li>
					<!-- --<li><a href="../html/teamteach.html">Team Activities</a></li> -->
					</ul><br>
					<br>	
			</div>
			<div class="col-sm-9">
				<h4><small>Assignments</small></h4>
				<hr>
				<div id="innerpage">
					<ul id="assigns">
						<li><a href="">Week 3</a></li>
						<li><a href="">Week 4</a></li>
						<li><a href="">Week 5</a></li>
						<li><a href="">Week 6</a></li>
						<li><a href="">Week 7</a></li>
						<li><a href="">Week 8</a></li>
						<li><a href="">Week 9</a></li>
						<li><a href="">Week 10</a></li>
						<li><a href="">Week 11</a></li>
						<li><a href="">Week 12</a></li>
						<li><a href="">Week 13</a></li>
					</ul>
					<img id="delly" src="../images/reading.JPG" alt="Dyslexics can Read" class="img-thumbnail">
				</div>
			</div>
		</div>
	</div>
</body>
</html>