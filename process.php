<?php
 $visitor  = $_POST['visitor'];
 $groupNum = $_POST['groupNum'];
 $vdate    = $_POST['vdate'];
 $place    = $_POST['fplace'];
 $rating   = $_POST['rating'];
 $destination_email = "sc1343@g.rit.edu";
 
 //    When your code is DONE  send form's data to   RITISTprofessor@gmail.com
 
$email_subject = "NEW YORK CITY, NY  - visitor  Chen, Shuying";
$email_body    = "Visitor name  $visitor\n";
$email_body   .= "Group Size $groupNum\n";
$email_body   .= "Date Visited Town $vdate\n";
$email_body   .= "Favorite Place $place\n";
$email_body   .= "Rating -> $rating\n";
mail($destination_email, $email_subject, $email_body);
echo "Thank you! Data Save.";

?>

<!-- create a Thank you page in HTML below -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Thank you for your Feedback</title>
	<link rel="stylesheet" type="text/css" href="assets/css/ex04.css">

</head>
<body>
	<!-- logo to the left of the menu -->

<div id="contents">
  	<img src="assets/images/thank.png" alt="Thank you very much for your feedback" />
   <article>
	<p>Thank you for complete our short survey. </p>

    </article>
</div>
</body>
<html>