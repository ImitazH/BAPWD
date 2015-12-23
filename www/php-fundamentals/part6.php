<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<!--	<title> Part 6</title> -->
<!--<title> <?php title(); ?></title>-->
<title> <?php my_function("Durjoy") ?></title>
</head>
<body>


<?php


echo " My name is Durjoy.";

echo "<br>";

function jekono(){
	echo " My name is DUrjoy";
}

jekono();  // jekono function is called. 


echo "<br>"; 

function name(){
	return " My name is Aneek";
}

echo name();  // jehetu fucntion er vitore return korechi tai ekhane echo korte hobe.


echo "<br>"; 


function title(){
	echo " ths is our title";  // This function is called from titl. 
}

function content(){
	echo " This is our content ";
}



echo "<br>";


function my_function($name){   // Ekhane $name hocche paramenteter. 
	echo "My name is ".$name; 
}

echo "<br>";

function multiple_parameter($name,$profession){
	echo "My name is ".$name." and I am a ".$profession ;  // Usiing multiple parameter
}



?>

<h1> <?php content(); ?></h1> <!-- content() function is called -->

<h2> <?php my_function("Durjoy") ?></h2> <!-- Passing "Durjoy" through my_function Function. Ekhane "Durjoy" hocche argument. -->


	<p><?php multiple_parameter("Durjoy","student")  ?></p> <!-- Using multiple argument. -->
	
</body>
</html>