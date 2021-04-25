<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/style3.css" rel="stylesheet" type="text/css">
	<title>About</title>
	<style>
body {
  background-image: url('assets/images/index1.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>	

<body>

	<!-- navigation with dropdown menu -->
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
	
 <img src="assets/images/index1.jpg" alt="new york city" title ="WELCOME TO NYC">
 <div class = "heading">
	New York City (NYC)
 </div>

<div class = "intro">

<p class="item-1">New York City (NYC) is the most populous city in the United States.</p>

<p class="item-2">New York City has been described as the cultural, financial, and media capital of the world, 
significantly influencing commerce, entertainment, research, technology, education, politics, tourism, art, 
fashion, and sports.</p>

<p class="item-3">The reason that I choice New York City as the project topic is because I come from Brooklyn, 
it is a borough of New York City. I live there about 10 years, and that one of my favoriate place in the world.
 Most of my friends, and my parents are live there.</p>

</div>
<!-- map for new york city -->
<div class = "map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3058826026!2d-74.25986173180502!3d40.69714942839354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1583302133291!5m2!1sen!2sus" width="700" height="500" ></iframe>
</div>

<footer>  
	<p>CURRENT TIME:  <span id="datetime"></span></p>
	<script>
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleString();
	</script>
	
	<?php
		$filename = 'about.php';
		if (file_exists($filename)) {
    	echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
		}
	?>
		<div id="validation">
			<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fabout.html">
			<div class = "check"><img src="assets/images/html.png" alt="HTML5 check" title="HTML Check"></div>
			</a>  
			
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fabout.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
			<div class = "check"><img src="assets/images/css.png"  alt="CSS check" title="CSS check"></div>
			</a>
		</div>
</footer>

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
