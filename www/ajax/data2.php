<!-- This page is connected with index3.php -->


<?php


$names[]='Mark';
$names[]='John';
$names[]='Smith';
$names[] = 'Del Rio';
$names[]= 'paul';
$names[]='jackson';
$names[]='Johnson';
$names[]= 'HEctor';

foreach($names as $name){
	if($_REQUEST['var1']== $name){
//		echo " The result is in the list and the result is :" . $_REQUEST['var1'];
		echo " The result is in the list and the result is : $_REQUEST[var1] ";
	}


}

//echo $_REQUEST['var1'];
