<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Part 9</title>
</head>
<body>




<?php





if ($value = 8){  // ekhane condition er vitorei amra varible er vitor value ke rakhci.
	echo $value;
}

echo "<br>";

$value = 20;
if($value ==20){
	echo " Value is twenty." ;
}


echo "<br>";

$value = "20";
if($value === "20"){
	echo " Value is twenty but  string." ;
}

echo "<br>";


$value = 20;
if($value <> 10){   // <> meaning hocche NOT Equal to.ekhane 20 likhle equal hobe tai r kaj korbena. eta and != same.
	echo " <> means not equal to." ;
}

echo "<br>";

$value = 20;
if($value != 10){
	echo " ekhane != also mean not eqial to." ; // <> ad != is the same
}

echo "<br>";


$value1 = 10;
$value2 = 20;
if($value1 > $value2){
	echo " value1 is > than value2" ;
}
else {
	echo " The Opposite";
}

echo "<br>";

$value1 = 10;
$value2 = 20;

if( $value1 < $value2){
	if($value1 > 11){
		echo " 1. Condition matched ";
	}
	else {
		echo " 1. COndition did not match.";
	}

}


echo "<br>";

$value1 = 10;
$value2 = 20;  // Same condition can be written in the following way.

if( $value1 < $value2 && $value1 > 11){
	echo " 2. Condition matched ";
}

else {
	echo "2. COndition did not match. = Evabeo ei program ke lekha jay";
}


echo "<br>";

$value1 = 10;
$value2 = 20;


if ( $value1 >=10){
	echo " 3. Condition matched ";
}


echo "<br>";

$value1 = 10;

if ($value1 %2 == 0 ){
	echo " Value is even";
}

else {
	echo " Value is odd";
}

echo "<br>";

$value1 = 120;


if($value1 >=33 && $value1 <=100){
	echo " Durjoy has passed";
}
else if($value1 < 0 || $value1 >100 ){
	echo " Invalid Result";
}

else {
	echo "fail";
}


echo "<br>";

$value1 = 70;

if($value1 >= 80 && $value1 <= 100){
	echo " A+";
}

else if ($value1 >=70 && $value1 <=79){
	echo "A";
}

else if ($value1 >=60 && $value1 <=69){
	echo "A-";
}

else {
	echo " Fail";
}




?>
</body>
</html>
