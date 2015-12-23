<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	
	
	
<!--
	$content = array("My", "Name","is","Sujon");

	foreach ($content as $something){   // ekhae as ar left e jeta thakbe ta hobe plural means $content er moddhe onek gulo value ache and right e ja thakbe ta hobe singular means $something er moddhe $content er sudu ekta value asbe.
	//echo $something . "<br>";

	//echo $something . " ";

	echo $something . " , ";
	}

	echo "<br/>";

	$values = array(

	'name' => 'Sujan',
	'profession' => 'developer',
	'age' => 24,
	'home' => 'Bashundhara',
	);

	foreach( $values as $leftSide => $value){
	//echo $leftSide."<br>";  // to print only key/ left side values.
	//echo $value . "<br>";    // To print only value/ right side values.

	echo "My ". $leftSide . " is ".  $value . "<br>" ;
	}
-->


	
</body>
</html>


<?php

$content = array("My", "Name","is","Sujon");

foreach ($content as $something){  

	echo $something . " , ";
}


echo "<br/>";

$values = array(

	'name' => 'Sujan',
	'profession' => 'developer',
	'age' => 24,
	'home' => 'Bashundhara',
);

foreach( $values as $leftSide => $value){
	//echo $leftSide."<br>";  // to print only key/ left side values.
	//echo $value . "<br>";    // To print only value/ right side values.

	echo "My ". $leftSide . " is ".  $value . "<br>" ;
}

echo "<br/>";

$talks = array('
				php' => 'Intro to PHP' ,
			   'ruby' => 'Intro to Ruby' ,
			  );
		foreach ( $talks as $id => $name) {
			echo "$name is talk ID $id." . '<br>' ;
			//echo PHP_EOL;
		}

echo "<br/>";



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
	//echo $durjoy;
	//echo "<br>";
	foreach ($durjoy as $name => $item){
		echo $name . " = " . $item . "<br>";
	}
	
	echo "<br>";
	//echo $aneel . 'is sold '
}


/*


$values = array(

	'name' => 'Sujan',
	'profession' => 'developer',
	'age' => 24,
	'home' => 'Bashundhara',
);

foreach( $values as $leftSide => $value){
	//echo $leftSide."<br>";  // to print only key/ left side values.
	 //echo $value . "<br>";    // To print only value/ right side values.

	echo "My ". $leftSide . " is ".  $value . "<br>" ;
}

*/



echo "<br/>";
echo "<br/>";
echo "<br/>";
	
echo '<table border="1">';

for ($i=0;$i<4;$i++)
{

	echo "<tr>";

	for  ($j=0;$j<3;$j++)
	{
		echo "<td>";
		echo $cars[$i][$j]. " ";
		echo " </td>";
	}

	echo "<tr>";
}

echo "</table>";

//-------




//$talks = array('
//				php' => 'Intro to PHP' ,
//			   'ruby' => 'Intro to Ruby' ,
//			  );
//foreach ( $talks as $id => $name) {
//	echo "$name is talk ID $id." . '<br>' ;
//	//echo PHP_EOL;
//}


