<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Part 7 </title>
</head>
<body>



<?php


echo " My name is Durjoy";

echo "<br>";

print "My name is Durjoy";  // print use korle load porbe beshi and page vari hobe beshi.

echo "<br>";

echo "MY name is "."Durjoy"; 
echo "<br>";
echo "My name is ", "Aneek"; // echo er khetre concate er jonno , and , 2tai kaj kore. Tai amra echo use korbo.

echo "<br>";

//print "My name is ","Durjoy"; // print er sathe concate korar jonno , kaj korena.

echo "<br>";

function my_function(){
	return "My name is Durjoy";   // ekhane string take return kora hoyeche ad pore function ke echo korle string take return korbe
}


function durjoy1($name, $address){
	echo " My name is ".$name." and I live in ".$address;
}

?>

<h1> <?php  echo my_function(); ?></h1> <!-- Ekhaen funcution ke echo korle show korbe. Na korle show korbena. -->


<h2> <?php durjoy1("Durjoy","Bashundhara") ?></h2>


</body>
</html>
