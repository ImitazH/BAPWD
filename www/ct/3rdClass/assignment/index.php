<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> CT PHP First Assignment</title>
<!--		<link rel="stylesheet" href="bootstrap.min.css">-->


	</head>
	<body>


<!--


echo "<h4> Multidimensional Array with foreach loop ( using indexed array) </h4>" ;



$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

echo '<table border="1">';

foreach ($cars as $car){

echo "<tr>" . "<br>";
//echo "<br>";

foreach ($car as $item){
echo "<td>";
echo $item. " ";
echo " </td>";
}

echo "<tr>";
}

echo "</table>";



echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<h4> Multidimensional Array with foreach loop ( Using Associative array) </h4>" ;

echo "<br/>";

$cars = array
(
array(
'Car Name' => "Volvo",
'In stock' => 22,
'Sold' => 18
),
array(
'Car Name' => "BMW",
'In stock' => 15,
'Sold' =>13
),
array(
'Car Name'=> "Saab",
'In stock' => 5,
'Sold' => 2),

array(
'Car Name'  => "Land Rover",
'In stock'=>17,
'Sold' =>15)
);

foreach ($cars as $aneek => $durjoy){

foreach ($durjoy as $name => $item){
echo "<b> ". $name . "</b>" . " = " . $item . "<br>";
}

echo "<br>";

}





-->



<?php

echo "<h4> Multidimensional Array with foreach loop ( using indexed array) </h4>" ;



$cars = array
	(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

echo '<table border="1">';

foreach ($cars as $car){

	echo "<tr>" . "<br>";
	//echo "<br>";

	foreach ($car as $item){
		echo "<td>";
		echo $item. " ";
		echo " </td>";
	}

	echo "<tr>";
}

echo "</table>";



echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<h4> Multidimensional Array with foreach loop ( Using Associative array) </h4>" ;

echo "<br/>";

$cars = array
	(
	array(
		'Car Name' => "Volvo",
		'In stock' => 22,
		'Sold' => 18
	),
	array(
		'Car Name' => "BMW",
		'In stock' => 15,
		'Sold' =>13
	),
	array(
		'Car Name'=> "Saab",
		'In stock' => 5,
		'Sold' => 2),

	array(
		'Car Name'  => "Land Rover",
		'In stock'=>17,
		'Sold' =>15)
);

foreach ($cars as $aneek => $durjoy){

	foreach ($durjoy as $name => $item){
		echo "<b> ". $name . "</b>" . " = " . $item . "<br>";
	}

	echo "<br>";
	
}




?>



<!--		<script src="bootstrap.min.js"></script>-->

	</body>
</html>
