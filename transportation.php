<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Transportation in NYC</title>
	<link href="assets/css/trans.css" rel="stylesheet" type="text/css">
	<style>
body {
  background-image: url('assets/images/night.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
	




<body>
  
<!--Start of Navigation-->
<div id="menu">	
	<ul>
		<li><a href="index.php"><img id="logo" style="display:inline-block" src="assets/images/logo2.png" alt="logo" /></a>	</li>		  
		<li><a href="about.php">About</a></li>
		<li><a href="region.php">Five Boroughs</a></li>
		<li><a href="food.php">Restaurants</a></li>
		<li><a href="museum.php">Museum</a></li>
		<li><a href="must.php">Must Do</a></li>
		<li><a href="shopping.php">Shopping</a></li>
		<li><a href="transportation.php">Transportation</a></li>	
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn"> Other</a>
   				<div class="dropdown-content">
     				<a href="reference.php">Reference</a>
					<a href="rubric.php">Grading Rubric</a>
    			</div>   
		<li><a href="survey.php">Survey</a></li>
		<li><a href="image.php">Image Gallery</a></li>

	</ul>
</div>



<div class = "transport">

		<section>
		 		<h1>TRANSPORTATION</h1>

	
	<aside>
	

 	<p> <code> <img src="assets/images/tran1.jpg" alt="picure" height="200" width ="260"> Train</code> </p>

 
 	<p> <code><img src="assets/images/tran2.jpg" alt="picure" height="150" width ="200"> Bus</code></p>
 

	</aside>
		
		<h3>MTA Subways and Buses </h3>
		<p> The City's rail and bus system is run by the Metropolitan Transportation Authority (MTA) and known as MTA New York City Transit. It's inexpensive and a great way to see sights throughout the five boroughs. 
		It operates 24 hours a day, seven days a week.</p>
		<p>Purchasing a MetroCard is your first step to getting around on subways and buses; you must put a minimum value of $5.50 on the card when initially buying it. </p>
		<p>You can do so at subway stations, from either automated machines or booth attendants.</P>
		<p>When you use a pay-per-ride MetroCard, a single subway or bus ride costs $2.75. An unlimited MetroCard allows 
		users to ride as often as they like within a fixed time period: options include 
		unlimited cards that last for seven days ($31) or 30 days ($116.50). </p>
		<br>
	
		<h3>Taxicabs</h3>
				 <aside>	<p> <code><img src="assets/images/tran5.jpg" alt="picure" height="150" width ="200"> Taxicabs</code></p></aside>

		<p>Taxis are available 24 hours a day. Hotel doormen can hail a cab for you, a $1 tip is customary for this service.</p>
		<p>Minimum metered fare is $2.50, which increases 50 cents every fifth of a mile or every minute, depending on how fast you're traveling.</p>
		<p>An additional $1 surcharge is added to the meter Monday through Friday, 4 - 8pm (excluding holidays), and a 50cent surcharge is added daily at night and early morning, 8pm - 6am. All taxis accept cash and credit, debit and prepaid cards. 
		Tip 15 - 20 percent at the end of a trip; bridge and tunnel tolls are extra and added to the metered fare.</p>
		<p>Yellow taxicabs pick up street-hailing passengers anywhere in NYC. Green taxis provide street hail service and prearranged service in northern Manhattan and in the other boroughs. </p>

		<br>
		 <aside><p> <code><img src="assets/images/tran6.jpg" alt="picure" height="150" width ="200"> Car</code></p></aside>

		<h3>Car</h3>

		<p>If you're planning to drive around the City, use Google Maps to help you navigate New York City roads. Also, make sure you know where to park.</p>
		
		<br>
		
		<h3>Other</h3>

		<p>Walking and public transit are excellent ways to get around New York, but you can also travel the City by bike, pedicab, ferry or even helicopter 
		if you so desire. Take a different route, and you just might see the City from a whole new angle.</p>
		
		<br>
		
		
		</section>

	<footer>  
	<p>CURRENT TIME:  <span id="datetime"></span></p>
	<script>
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleString();
	</script>
			<?php
		$filename = 'region.php';
		if (file_exists($filename)) {
    	echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
		}
	?>
	
		<div id="validation">
			<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Ftransportation.html">
			<div class = "check"><img src="assets/images/html.png" alt="HTML5 check" title="HTML Check"></div>
			</a>  
			
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Ftransportation.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
			<div class = "check"><img src="assets/images/css.png"  alt="CSS check" title="CSS check"></div>
			</a>
		</div>
</footer>

</div>
	
<script>
window.onscroll = function() {myFunction()};

var menu = document.getElementById("menu");
var sticky = menu.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    menu.classList.add("sticky")
  } else {
    menu.classList.remove("sticky");
  }
}



</script>

</body>








	
</html>
