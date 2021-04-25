<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Restaurants</title>
	<link href="assets/css/museum.css" rel="stylesheet" type="text/css">
	<style>
body {
  background-image: url('assets/images/night.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
*{
border-radius:20px;
}

img{
	width:70%;
	text-align:center;
	display: block;
	margin-left: auto;
    margin-right: auto;

}
</style>
</head>
	

<body>

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

<br>

<div class = "tit">
<hr>
<h1>Restaurants in New York City</h1>
<p> New York City, one of the place that with most diversity of foods in the world</p>
<p> This pages provided some of the Restaurants in NYC</p>
</div>
<div class = "museum">	

<!-- Photo Grid -->

 <div class = "pink">
  <h5>Haidilao</h5>
  <h5>Address: 552 W 235th St, The Bronx, NY 10463</h5>
  <h6>Chinese hot pots are multiplying in many neighborhoods around the city, serving dip and eat meals with a
   vast catalog of raw materials and choice of broths, and HaiDiLao in Flushing is leading the pack. The only 
   East Coast location of this Chinese chain not only has some of the tastiest hot pots in town with a wide range
    of broths, fish and meat, and a condiments bar but service is top notch: It has a waiting room with hand massages,
     a children's playroom, snacks, and a game lounge. There's also free soft serve ice cream for dessert, or a starter if so chosen. </h6>
  <img src="assets/images/food6.jpg" alt ="food">
</div>

<div class = "white">
  <h5>Africa Kine</h5>
  <h5>Address: 2267 Adam Clayton Powell Jr Blvd, New York, NY 10027</h5>
  <h6>Africa Kine has been open in NYC since 1996. Senegalese mainstays as thiebu djen (stuffed fish and vegetables over rice)
  , mafe (lamb or chicken in a peanut sauce), and yassa (chicken or fish in a lemon and onion confit), 
  mainly available at lunch. At dinner, expect shrimp brochettes, roast leg of lamb, grilled lamb chops, and baked fish.</h6>
  <img src="assets/images/food2.jpg"  alt ="food">
  </div> 
  
  
<div class = "pink">
  <h5>Liebman's Deli</h5>
  <h5>Address: 552 W 235th St, The Bronx, NY 10463</h5>
  <h6>Jewish deli in its most nostalgic form can be found at Liebman's in Riverdale, a small and diner-like institution that's been serving up kosher pastrami, corned beef, and hot dogs made in-house since 1958.</h6>
  <img src="assets/images/food.jpg"  alt ="food">
</div>

<div class = "white">
  <h5>Sushi Noz</h5>
  <h5>Address: 181 E 78th St, New York, NY 10075</h5>
  <h6>Chef Nozomu Abe uses his bar as a stage to dismember live king crab, to grill eel over eucalyptus, and to form ethereal bites of nigiri.</h6>
  <img src="assets/images/food3.jpg"  alt ="food">
</div> 

<div class = "pink">
  <h5>Adda Indian Canteen</h5>
  <h5>31-31 Thomson Ave Long Island City, NY 11101</h5>
  <h6>Owner Roni Mazumdar and chef Chintan Pandya pivot to homey fare like tandoor grill dishes, 
  curries, and biryani. Inspired by canteens found throughout India, Adda serves dishes a degree hotter and richer than Rahi, 
  aiming to showcase the way food is made at home in India. Standouts include the dum biryani, a rice casserole 
  sealed within a sheet of naan dough.</h6>
  <img src="assets/images/food7.jpg"  alt ="food">
</div>

<div class = "white">
  <h5>E.A.K. Ramen (West Village)</h5>
  <h5>Address: 469 6th Ave New York, NY 10011</h5>
  <h6>E.A.K. Ramen stands out with the less ubiquitous iekei broth - a clean style that’s a blend of fattier pork
   with chicken and soy-based ramen. The most popular options come with noodles that are thicker,
    curlier, and chewier than most around the city, though several meat-free options include thinner 
    noodles, too. The Zebra is a favorite, arriving with roasted garlic oil, butter, nori, spinach, and pork chashu.
     A sleek dining room features bar and table seating overlooking an open kitchen, ideal for a 
     small group or fulfilling a solo ramen craving. </h6>
  <img src="assets/images/food8.jpg"  alt ="food">
</div> 



<div class = "pink">
  <h5>Xi'an Famous Foods</h5>
  <h5>Address: 31-31 Thomson Ave Long Island City, NY 11101</h5>
  <h6>Xi’an Famous Foods, which started as a stand in Flushing, now has more than a dozen locations across NYC. 
  But despite its chain status, the family-run restaurant has maintained quality, gaining cult following
   status for spicy, tacky hand-ripped noodles. The cumin lamb is particularly popular, but the cold-skin
    noodles come in close second, a satisfying meal can be had for under $15 at this counter-service restaurant.</h6>
  <img src="assets/images/food9.jpg"  alt ="food">
</div>



<div class = "white">
  <h5> Cervo's</h5>
  <h5>Address: 43 Canal St New York, NY 10002</h5>
  <h6>Hart’s run this wine bar and restaurant that turns to the Iberian peninsula for a casual seafood-heavy menu. 
  Ordering several dishes to share is the way to go, with options like manila clams in vino verde, shrimp heads, 
  and Spanish mackerel. Wine is a big draw to the narrow, hip space, featuring a selection of natural 
  options that pair well with fish. </h6>
  <img src="assets/images/food10.jpg"  alt ="food">
</div> 

<div class = "pink">
  <h5>Kopitiam</h5>
  <h5>Address: 151 E Broadway New York, NY 10002</h5>
  <h6>full meal of Malaysian specialties, but since it’s open all day and has tons of smaller options, 
  the Lower East Side spot from chef Kyo Pang and restaurateur Moonlynn Tsai is also ideal for a mid-afternoon 
  snack with coffee. Go for a curry puff, chicken wrapped in pandan leaves, or any of the sweets. For a bigger 
  meal, options include the nasi lemak (coconut rice with fried anchovies) and pan mee (hand-pulled noodle soup 
  in an anchovy broth). Breakfast is available all day, and both the slightly sweet kaya toast and the umami-laced 
  half-boiled eggs are musts. Everything is under $16 at the counter-service restaurant. </h6>
  <img src="assets/images/food11.jpg"  alt ="food">
</div>


<div class = "white">
  <h5>Peter Luger Steak House</h5>
  <h5>Address: 43 Canal St New York, NY 10002</h5>
  <h6>steaks are good, especially the signature dry-aged prime porterhouse, which flies from the kitchen
   sizzling and already sliced. Don’t miss the bacon appetizer or lunch-only hamburger either, in these 
   bare-bones and endearingly antique premises. </h6>
  <img src="assets/images/food12.jpg"  alt ="food">
</div> 

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
			<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Ffood.html">
			<div class = "check"><img src="assets/images/html.png" alt="HTML5 check" title="HTML Check"></div>
			</a>  
			
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Ffood.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
			<div class = "check"><img src="assets/images/css.png"  alt="CSS check" title="CSS check"></div>
			</a>
		</div>
</footer>
</body>

	
</html>
