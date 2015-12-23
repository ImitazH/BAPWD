<?php



function durjoy(){


	$name = 'durjoy';  // Local scope

	echo $name;
}


durjoy();

echo "<br>";


$location ="Dhaka";

function place(){

	global $location;  // etake global korar jonno amra er age global likhlam.

	echo $location;
}

place();

echo "<br>";


$location ="Dhaka";

function location(){


	echo $GLOBALS["location"];  // evabe super global koreo kaj kora jay. but amra uporter niyomei likhbo.
}

location();



echo "<br>";

function name(){

	global $name;   // ekhane nice je local variable ta likhbo take amra function er baire use kroar jonno age gloval kore nilam.
	$name = "Imtiaz";  // local variable

}

name();  // function take age execute kore nilam

echo $name;  // varibale ke echo korlam and now it will work.




