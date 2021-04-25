<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Rubric</title>
	<link href="assets/css/must.css" rel="stylesheet" type="text/css">
<style>
body {
  background-image: url('assets/images/night.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
h6{
color:black;
text-align:left;
font-size:15pt}
</style>
</head>
<body>
  
		<!-- navigation with dropdown menu -->
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

<h2>Full Rubric for this Midterm Project</h2>

 
<!-- Photo Grid -->

<div class = "white">

	<h3>Good Design Techniques</h3>
  <h6>Using two contrast colors, one of the contrast colors that use is black and white for the majority of the color scheme. 
  Another contrast color that is used is red and blue, red and blue are used to add details. All image has alt and title attributes.
The majority of the image contains background around, to make it stand out, and to look more organized.</h6>
  <h3>Many Media Queries</h3>
  <h6>All websites are mobile-friendly, able to display at any screen, such as phone, desktop, iPad, etc.</h6>
  <h3>Organization of information</h3>
  <h6>All the text and graphics make sense, there is the text next to images used to describe the image. And CSS floats are property used for the images.</h6>
   <h3>Content</h3>
  <h6>The majority of the content is interesting to read, and it is very useful for travel guides. Majority of the text is short, easy to read</h6>
<h3>Navigation</h3>
  <h6>All navigation is using contrast color, with a hover color of blue, which is easy to read and discover. 
Easy to get around, intuitive, and all the pages are labeled. Besides, there is sticky navigation on many sites. Allow users to be able to go to the next page even when they scroll down the pages.</h6>

  <h3>Use of HTML and CSS3</h3>
  <h6>There is a valid HTML 5 and Valid CSS3 in every page, use for validation</h6>
  
  <h3>Javascript</h3>
  <h6>There is javascript used in survery.html, which asks users to fill out surveys. Validate every input field, and make sure the data visited is before the current date. Using javascript to make a slideshow and create sticky navigation</h6>
  <h3>Use of HTML and CSS3</h3>
  <h6>There is a valid HTML 5 and Valid CSS3 in every page, use for validation</h6>
  
  <h3>Modified exercise 4</h3>
  <h6>There is a form, and submit button that is used to send the contents of the form to multiple email addresses. The CSS changes, using a different background image, different thank you page, have different radio buttons and check buttons.</h6>
  <h3>Reference</h3>
  <h6>Using HTML page to site the reference that used, with some picture next to it</h6>
  
  <h3>Footer</h3>
  <h6>There is a footer on every single page, with HTML 5 icon that links to www.validator.w3.org and valid HTML 5 code. There is a border separating the footer from the body. The footer using php code to display the current date</h6>

  <h3>original graphics</h3>
  <h6>Using photoshop to create two icon, html validation icon and css validation icon</h6>
</div>

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
			<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Frubric.html">
			<div class = "check"><img src="assets/images/html.png" alt="HTML5 check" title="HTML Check"></div>
			</a>  
			
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Frubric.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
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
