<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Part 5</title>
</head>
<body>
	
	
 <?php

 $first= 20;

//$first = $first + 10;
 $first +=20;

echo $first;

echo "</br>";


$name = "Durjoy";
$age = 21;
$location = "Bashundhara";


echo "Amar nam ".$name.".Amar age ".$age.".Amar location hocche".$location; // PHP te contateation er jonno . use kroa hoy. 
// String er value normally 0 thake. Tai 2ta string add(+) korle putput 0 asbe.


echo "</br>";

$name="Durjoy";

$fullsentence =" Amar nam $name"; // Double Quotation er vitor variable kaj kore. But sigle quotatio er vitor kaj korbena. But this is bad practice. so amra evabe likhboa.

echo $fullsentence;
echo "</br>";

$name ="Durjoy";
$fullsentence = ' Amar nam $name '; // Eta kaj korbena. Because single quotation er vitor variable kaj korena. 




$fullsentence =" Amar nam" . $name; // SO amra evabe concate kore likhbo.
echo $fullsentence;
echo "</br>";
$name2 = "Aneek";
$fullsentence = " Amar name $name2 ";
echo $fullsentence;
echo "</br></br>";




$number1 = 10;
$number2 = 20;

echo $number1.$number2;  // Concatanation of 2 numbers. Output is 1020


echo "<br>";

$first = 20;
$second =6;

echo $first / $second;
echo "<br>";
echo "Remainder is ".$first % $second;


echo "<br>";

echo "Amar nam 'Durjoy' ";  

echo "<br>";

echo 'Amar nam "Durjoy" ';   // Single uotatio er vitor double quotation kaj korbena. so etar kono output thakbena.

echo "<br>";

echo " AMar nam". ' "Durjoy" ';




?>
	
</body>
</html>