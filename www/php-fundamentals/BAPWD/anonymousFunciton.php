<?php
// Regular Function

function durjoy(){

	$name = "Durjoy";
	echo $name;
}

echo durjoy();

?>

<br>



<?php

// Anonymouns Function

$durjoy = function(){

	$name = "Durjoy";
	echo $name;
}; // semicolon ditei hobe.

//echo $durjoy();

$another = $durjoy; // with anomymous fuction we can change it's name and use it which was not possible with normal funciton.
echo $another();

?>

<br>

<?php

$number = function($num1,$num2){

	$total = $num1 + $num2;
	echo $total;

};// semicolon ditei hobe.

echo $number(4,5);


?>

<br>


<?php


$number2 = function($num2){

	return $num2;
}; // semicolon ditei hobe.

echo $number2(10);


?>
