<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Part 10</title>
</head>
<body>


<!-- LOOP -->

<?php

$content =1;
echo $content;

echo "<br/>";

 $content++;
echo $content;

echo "<br/>";

echo ++$content;


echo "<br/>";

echo "Loop";

echo "<br/>";

$variable =10;

while($variable <= 40){
	echo $variable . "<br/>";
	$variable++ ;
}

echo "<br/>";
$variable =10;
while($variable <= 40){
	echo "This is the number  ". $variable . "<br/>";
	$variable++ ;
}


echo "<br/>";
echo "Using For Loop". "<br/>";
echo "<br/>";


for($i=0;$i<=50;$i++){
	if($i%2==0){
		echo $i . " is a even number". "<br>";
	}

	else {
		echo $i . " is a odd number"."<br>";
	}
}

echo "<br/>";
echo "Using While Loop". "<br/>";
echo "<br/>";


$i =0;
while($i<=50){
	if($i%2==0){
		echo $i . " is a even number". "<br>";
	}

	else {
		echo $i . " is a odd number"."<br>";
	}
	$i++;
}


echo "<br/>";

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






?>

</body>
</html>
