//  function to validate visitor's date to current date
function checkDate(){
    "use strict";
    var dateValid = true;
    var vdate = document.getElementById('visitDate').value;
    var today = new Date();
    console.log("date  is " + vdate);
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();

    if (dd < 10) {
     dd = '0' + dd;
    }  // in case of single digit
    if (mm < 10) {
     mm = '0' + mm;
    }  // in cast of single month

    var td = "" + yyyy + "-" + mm + "-" + dd;
    console.log("System date is " + td);

    if(vdate >= td){
       document.getElementById("errorMessage").innerHTML=" INVALID DATE, CHOICE AGAIN";
       document.getElementById("errorMessage").style.backgroundColor = "yellow";
       document.getElementById("errorMessage").style.color = "red";
       document.getElementById("visitDate").style.borderColor="#1e33eb";
       dateValid = false;
       }
    else  {
       document.getElementById("errorMessage").innerHTML="";
       document.getElementById("errorMessage").style = null;
       document.getElementById("visitDate").style.border = null;

       dateValid = true;
       dateValid = true;
       }// end of else path

    console.log("dateValid is " + dateValid);
    return (dateValid);
}//end of function validate visitor's date to present date


//  function to check if at least one radio button is selected
function checkIfRadioButtonSelected(){
    "use strict";
    var isChecked = false;
	var len = document.getElementsByName('fplace').length;
	var choices = new Array();
	for (var i=0; i<len; i++){
		if (document.getElementsByName('fplace')[i].checked){
			choices.push(document.getElementsByName('fplace')[i].value);
		}
	}//end of for loop

    if (choices.length > 0){
   	    isChecked = true;
        document.getElementsByTagName('fieldset')[0].style = null;
        document.getElementsByTagName('legend')[0].style= null;
       
    }
    else{
    	document.getElementsByTagName('fieldset')[0].style.borderColor = "#1e33eb";
    	document.getElementById("visitDate").style.backgroundColor =  "pink";
    	document.getElementsByTagName('fieldset')[0].style.backgroundColor = "#fcd0d0";
    }

    console.log("check radio buttons is " + isChecked);
    return isChecked;

}//end of function checkIfRadioButtonSelected



//  function to check all the form is validate
function validateForm(){
	"use strict";
	var isvalid=true;
	radioButtonChecked = false;

   if(document.getElementById("visitor").value == ""){
   		//change color
		document.getElementById("visitor").style.borderColor="#1e33eb";
		document.getElementById("visitor").style.backgroundColor = "pink";
		isvalid=false;
		document.getElementById("errorMessage").innerHTML=" can not be empty";

		}
   else{
      document.getElementById("visitor").style = null;
       }
       
    if(document.getElementById("visitDate").value == ""){
    	//change color
		document.getElementById("visitDate").style.borderColor="#1e33eb";
		document.getElementById("visitDate").style.backgroundColor = "pink";
		isvalid=false;

		}
   else{
      document.getElementById("visitDate").style = null;
       }
    var radioButtonChecked =  checkIfRadioButtonSelected();
    var correctDate = checkDate();

    console.log("name " + isvalid);
    console.log("radio Button checked "+radioButtonChecked);
    console.log("check date " + correctDate);
    return (isvalid && radioButtonChecked && correctDate);

}//end of javascript function validateForm


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



//Create an array of images 
var imageArray = ["assets/images/tim1.jpg'", "assets/images/central1.jpg'", "assets/images/foods.jpg'", "assets/images/index1.png'"];

//Save total size of array to variable arraySize
var arraySize = imageArray.length;

//Set wait time between slides in milliseconds 
setInterval(runit, 2000);

var x = 1; //Used to count up to arraySize

//Function runit play slideshow when called 
function runit() {
    //Set image to next picture in image array
    document.getElementById('slideshow').src = imageArray[x];

    //Increase count by 1
    x++;

    //If count has reached the last index of imageArray than set count back to starting index.
    if (x === arraySize) {
        x = 0;
    }
}
