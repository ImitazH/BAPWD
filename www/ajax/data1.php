<!-- THis page si connected with index2.php -->


<?php

// Getting multiple data using array.
$names[]='Mark';
$names[]='John';
$names[]='Smith';
$names[] = 'Del Rio';
$names[]= 'paul';
$names[]='jackson';
$names[]='Jihnson';
$names[]= 'HEctor';

$c=1;
foreach($names as $name){
	
	echo $c . " . " . $name. " <br>";
	$c++;
}