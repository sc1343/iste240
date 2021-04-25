<!DOCTYPE html>
<html lang="en">
<head>
	<!-- title -->
    <title>Exercise 04 by Shuying Chen</title>
	<!-- link to css-->
    <link rel="stylesheet" type="text/css" href="assets/css/trans.css">
    <meta charset="utf-8">
    <!-- link to javascript-->
	<script src="assets/js/script.js"></script>
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
	<!-- logo to the left of the menu -->
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
  
    <!-- PHP form -->
    <div class = "info">
	<form action = "process.php" method = "POST" onsubmit="return validateForm();">
			<h1 class = "underline"> Please tell us about your visit</h1>
		

	<!-- ask for name-->
         <div id="family">
         What your name
         <input type ="text" id="visitor" name ="visitor" placeholder="Required Entry" >
         <span class="astric"> * </span>
         </div>
         <br>


	<!-- date of visit-->
		<div id="visit">
            When did you visit?
            <input type = "date" id="visitDate" name = "vdate" />
            <span class="astric"> * </span>
            <p id="errorMessage"></p>
         </div>




	<!-- Field Set for favorite place -->
        <div id="favplace">
        	<fieldset>
       			<legend>[  What your Favorite Place?  ]</legend>
       			<input type="radio" name="fplace" value="Time Square"       id="tq" onclick="turnoff();"><label for ="tq"> Time Square</label><br>
       			<input type="radio" name="fplace" value="Museum"            id="mu" onclick="turnoff();"><label for ="mu"> Museum</label><br>
       			<input type="radio" name="fplace" value="Central Park"      id="cp" onclick="turnoff();"><label for ="cp"> Central Park</label><br>
       			<input type="radio" name="fplace" value="Statue of Liberty" id="sb" onclick="turnoff();"><label for ="sb"> Statue of Liberty </label><br>
       			<input type="radio" name="fplace" value="Brooklyn Bridge"   id="bb" onclick="turnoff();"><label for ="bb"> Brooklyn Bridge</label><br>

			<br>
         	   <input onclick="otherplaces();" type="radio" name="fplace" value="User_Entered" id="other"> <label for ="other"> Other place</label>
        		<input name="SOMEPLACE" placeholder="Enter Place" type="text"  id="SOMEPLACE" size="30" onMouseOut="getOther();" >
            <br>
       	  </fieldset>
        </div>
    <!-- end of radio buttons for favorite Place-->
        
        <br>
        
        
    <!-- number of visitor-->

        <div  id="numgroup"> How many people are you going with:
        	<input type ="number" name ="groupNum" min ="0" max ="100" step ="1" value ="1" style = "margin-bottom: 20px;" >
		</div>


	<!-- Scrollbar for town raiting -->
     	<div id="scrollbar">
		
		<h4>Please rate NEW YORK CITY</h4>
		<p>0
		<input type="range" name="rating" min="0" max="10" step="1" list="set">
		<datalist id = "set">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		</datalist>
		10</p>
		
		</div>
		
	<!-- end of range bar -->
		<div id="button">
			<input type = "submit"  >
		</div>
	<!-- end of div for submit button -->
	</form>

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
			<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fsurvey.html">
			<div class = "check"><img src="assets/images/html.png" alt="HTML5 check" title="HTML Check"></div>
			</a>  
			
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fpeople.rit.edu%2Fsc1343%2Fiste240%2Fproject1%2Fsurvey.html&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
			<div class = "check"><img src="assets/images/css.png"  alt="CSS check" title="CSS check"></div>
			</a>
		</div>
</footer>

	</body>
</html>

