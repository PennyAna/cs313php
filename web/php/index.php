<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="homepage/home.css" type="text/css">
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
<div class="row">
<div class="col-3 menu">
<br>
<a id="pageTwoLink" href="homepage/home2.html">Assignments</a>
<br><br>
<p id="text"></p>
<div id="">
<form>
<label id=""></label><br>
<fieldset>		
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <input type="radio" name="" value=""><br>
  <br>
 <input id="submitMe" type="submit" name="submit" value="submit">
  <input id="resetMe" type="reset" name="reset" value="reset">
 </fieldset>
</form>
<br><br>
<img id="" src="" alt=""><br>
</div></div>
<br><br>

<div id="" class="col-9 col-s-12">
<button type="button" class="collapsible"></button>
<div class="">
<p>
</p></div><br>
<button type="button" class="collapsible"></button>
<div class="">
<p>
</p></div><br>
<button type="button" class="collapsible"></button>
<div class="">
<p>
</p></div><br>
<button type="button" class="collapsible"></button>
<div class="">
<p>
</p></div><br>
<button type="button" class="collapsible"></button>
<div class="">
<p>
<p></div><br></div></div>
<script src="homepage/home.js"></script>
<div class="footer"><br>Text Source: </div>
</body>
</html>
