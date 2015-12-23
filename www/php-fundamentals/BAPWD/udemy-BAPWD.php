<!-- From Letures of Udemy- become a professional web developer. This course is in my D Drive.-->


<!--   ARRAY -->


<?php


$name = array("Imtiaz","Hasan","Durjoy");
//echo $name; //kaj korbena
//print $name; // kaj korbena
//echo $name[1]//eta kaj  korbe.
print_r($name);
// array ke echo and print diye print kroa jayna. Tar jonno amader print_r function use korte hobe.


?>
<br>

<?php

$names =array(
	'imtiaz' => 21,
	'hasan' => 20,
	'durjoy' => 22
);

print_r($names);
echo "<br>";
echo $names['imtiaz'];
echo "<br>";
print_r($names['imtiaz']);
echo "<br>";
$names['anik'] = 23; // adding new value to the array.
print_r($names); // now it will show the value of anik as well.

?>


<br>

<?php

$names =array(
	'imtiaz' => 21,
	'hasan' => 20,
	'durjoy' => 22
);


foreach ( $names as $age){
	echo $age . "<br>";  // will print the ages only.
}

echo "<br>";

foreach ( $names as $name => $age){
	echo $name . "<br>";
}


?>

<br>


<?php

$names =array(
	'imtiaz' => 21,
	'hasan' => 20,
	'durjoy' => 22
);

foreach( $names as $name => $age ){
	if( $name != "imtiaz" ){
		echo $name . " is " . $age . "<br>";
	}
}


?>

<br>



<?php
//MUltidimensioanl Array

//$names = array(
//	"Imtiaz" => array(),
//	"Hasan" => array(),
//	" Durjoy " => array()
//)

$names = array(
	"Imtiaz" => array(
		"age" => 21,
		"height" => 5.7,
		"weight" => 60
	),
	"Hasan" => array(
		"age" => 22,
		"height" => 5.10,
		"weight" => 50
	),
	"Durjoy" => array(
		"age" => 23,
		"height" => 6.00,
		"weight" => 74,
		"food" => array(
			'pizza','pasta'
		)
	)
);

print_r($names);
echo "<br>";


print_r($names["Imtiaz"]);
//print_r($names["Imtiaz"]["age"]); // kaj korbena
echo "<br>";
echo $names["Imtiaz"]["age"];
echo "<br>";
echo $names["Durjoy"]["food"][0];
echo "<br>";
print_r( $names["Durjoy"]["food"] );

?>

<br>

<?php


$num = 1;

$names = array("Imtiaz","Hasan","Durjoy","Aneek");

foreach( $names as $name ) {

	echo "Name " . $num . " is " . $name . "<br>";
	$num++;
}

?>


<!--  FUNCTION -->


<?php

function add(){
	$total = 0;
	print_r(func_get_args() ); // kiavbe kaj korche janina.
}

add(5,10,1);

?>

<br>


<?php

function addd(){
	$total = 0;

	foreach(func_get_args() as $arg){
		$total += (int)$arg;
	}

	return "Addition of all the numbers : " . $total;
}

echo addd(5,10,1, 12, 23, 34, 45, 67, 78);  // we can put here as many number as we want and all the nunbers will be added in the output.

// we can also use this to pass user data.
// echo user_data('firstname', 'lastname', 'dob');
?>


<br>

<?php

function names($name){
	$result = '';
	return func_get_arg(2); // ekhane je index number debo tar value show korbe.
}
echo names("IMtiaz","Hasan","Durjoy");

?>

<br>

<?php

function append($initial){
	$result = '';
//	$result = func_get_  g(0);
	foreach (func_get_args() as $key => $value) {
//		echo $key;
//		echo $value;

		if($key >= 1){
			$result .= ' ' . $value . "<br>";
		}
	}

	return $result;
}
echo append("IMtiaz","Hasan","Durjoy");

?>

<br>

<?php

	$num = 564585344023942;
	echo " I have &pound " . number_format($num);
	echo "<br>";

	$num = 5645853.48487;
	echo " I have &pound " . number_format($num,3); // decimal er pore koto number dekhabe.

//	echo " I have &pound " . number_format($num, 3, ',','.');

?>

