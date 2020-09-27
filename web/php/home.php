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
				<img src="../images/animeMe.jpg" alt="Girl with Glasses" class="img-thumbnail float-middle">
				<h3>The Girl with Glasses</h3>
				<ul class="nav nav-pills nav-stacked">
					<li  class="active"><a href="./home.php">Home</a></li>
					<li><a href="./assignments.php">Assignments</a></li>
					<!-- --<li><a href="../html/teamteach.html">Team Activities</a></li> -->
					</ul><br>
					<br>
				
			</div>
			<div class="col-sm-9">
				<h4><small>To Those Tempted To Homeschool-An Open Letter</small></h4>
				<hr>
				<div id="innerpage">
					<br><br>
					<p>I heard somewhere that you were thinking about homeschooling. Don’t bother asking where; we’re like the Mafia, 
						we never tell. But since you’re at least interested, take a seat and listen to my spiel.
						</p>
					<p>	As tempting as homeschool sounds, you’re uncertain; suspicious even. What about socialization, 
						grades, keeping up, and the persistent fear that your kid will turn out to be one of those homeschoolers? 
						You know, the weird ones. Oh, and if you have any physical difficulties or chronic diseases, how on earth 
						can you be a full-time mom AND teacher? Do you have a spouse or other family member doubting your ability 
						to do all this?
						</p>
					<p>	Not only did my husband (mostly secretly) have these fears, but I did as well. I have a chronic disease and ADHD. 
						I cannot say from day to day what will be accomplished. And some years not much has gotten done, like the year of 
						the baby, then the other baby, then the miscarriages and living with the in-laws. Not complaining, trying to point
						out that life will mess up every schedule to some degree. Yes, of course it will be hard. Insanely hard. You will 
						have to choose between math homework and piles of laundry or doctor’s appointments and field trips. Many times the 
						chores will go undone. And sometimes the schoolwork will take the backseat. Either way, it will be okay.
						</p>
					<p> When you first go into homeschooling, you’re nervous, almost paralyzed with fear of messing it up. You feel the 
						weight of those twelve years and the immensity of your responsibility. How can you possibly do this? Your child’s
						entire academic and world success rests on you: a stressed-out, harried, hopefully sane mom or dad.
						This is supposed to be calming, right? I guess I’m not doing a very good job. <br>Here’s the key: three things to make 
						this whole wonderfully terrifying and terrifyingly wonderful homeschool thing work.
						</P>
					<p> 
						<ol>
							<li>breathe.</li>
							<li>accept that some/many days you’ll be lucky to have these people dressed and fed.</li>
							<li>always continue to do better.</li>
						</ol>
						</p>
					<p>	That’s it, good luck!
						</p>	
					<p>	Just kidding, here’s the rest.
						</p>
					<p>	You’ll mess up. Don’t let the failures define your homeschool. Celebrate those days when you have been an amazing 
						homeschool mom. I mean, seriously, you were awesome! People commented on your wonderful, smart, mature children, 
						the aforementioned children got to see brains at the local college, and even did well on the standardized test. 
						<br>Boo and a ‘Yah!
						</p>
					<p>	In response to your concerns: the only thing that will completely allay them is proof, every year that you can 
						see tangible progress in your homeschool. For my husband, the behavioral changes in our daughter (for the better) 
						and her decent score on the CAT exam have him feeling better about this whole subversive lifestyle. Me, I’m not 
						as focused on the numbers. Okay, I lie. I called up my mom the second I found out that I haven’t ruined her 
						grandchildren and did a happy dance over the phone.  But the longer I’m going about this, the more I begin to 
						see the vision of homeschooling. My kids are happy. They have an entire world of learning at their feet and appetites
						whetted to dig in.They are learning to do things in real life, not on a worksheet. They are excited about our plans 
						for our family and look for ways to contribute. I think they are well on their way to catching the same vision. 
						It is so sweet to have them home with you and they learn so much just from going about life at home: helping, cooking, 
						cleaning. They become each other’s friends, mentors, and teachers. And, most importantly to me, each other’s protectors. 
						</p>
					<p>	This is my proof. And I get more every day.
						</p>
					<p>	Oh, and they’re not perfect. They will fight. And fight. You will tear your hair out. And you’ll want to invest in 
						straitjackets. But it’s not legal. I checked.
						</p>
					<p>	But then you have the moments where they are perfect. Brief beautiful moments when you can see the man or woman 
						they will become and how what you are doing will help them achieve it. Ah, I love it.
							</p>
					<p>	Whether you homeschool or not, catch this vision. Create a home that schools, even if it’s not a homeschool.
						</p>	
					<p>But, really, homeschool. 
						</p>
					<br>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">
				Content property of RestrainedChaos: https://bit.ly/36bAt0s
			</span>
	</footer>
</body>
</html>
