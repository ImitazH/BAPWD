<!-- This page is connected with index3.php -->


<?php


$names[]='Mark';
$names[]='John';
$names[]='Smith';
$names[] = 'Del Rio';
$names[]= 'paul';
$names[]='jackson';
$names[]='Johnson';
$names[]= 'HEctor'; // Values are case sensitive. So we have to write them in the input box exactly as they are. 

foreach($names as $name){
	if($_REQUEST['var1']==$name){
		
		echo "<div style='color:red'>  $_REQUEST[var1] is available. </div>";
		
		
	}


}

