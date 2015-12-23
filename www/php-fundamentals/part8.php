<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Prt 8</title>
</head>
<body>



	<?php


$content = array("We","Love","Our","Country","Bangladesh");


//echo $content; // ** jodi output show korar somoy error e 'array' kothata show kore thaole bujte hobe amra index define kore deini or kon value ta show korbe ta define korini.

echo $content[2];


echo "<br>";

$content1 =array("We love vat", "15%", "10%");

echo $content1[0] . " " . $content1 [2];


echo "<br />";

$content2 =array(

		'We hate vat',   // Try to write it in a standard sychronized way.
		'7.5%',
		'10%'
);

echo $content2[0] . " " . $content2[1];

echo "<br />";


 $something = array (

	'Name' => "Imtiaz", // key => value
	'Profession' => 'Developer',
	'LOcaiton' => 'Bashundahra',

);

echo $something["Name"] . " " . " is my name.";

	?>

</body>
</html>
