<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/style3.css" rel="stylesheet" type="text/css">
    <script src="slideshowcontinous.js"></script>
    <style>
    	body {
    		background-image: url('assets/images/index1.png');
 			background-repeat: no-repeat;
  			background-attachment: fixed;  
  			background-size: cover;
		}
	</style>
</head>

<body onload="runit()">

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

<!--Start of Content-->
<div class="Content">
	<!--Section 1-->
    <div id="section1">
        <h1>Welcome to New York City</h1>
            <div id="pic">
                <img id="slideshow" src="assets/images/night.jpg" alt="WELCOME TO NYC" title="WELCOME TO NYC">  
            </div>
            <br><br>
            <div id="block">
            	<p>this page will shows all the images</p>
            </div>
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
			<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fimage.html">
			<div class = "check"><img src="assets/images/html.png" alt="HTML5 check" title="HTML Check"></div>
			</a>  
			
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fimage.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
			<div class = "check"><img src="assets/images/css.png"  alt="CSS check" title="CSS check"></div>
			</a>
		</div>
</footer>
</body>
</html>