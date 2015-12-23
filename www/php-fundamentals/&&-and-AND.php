<!-- Difference between LOgical AND (&&) and Bitwise AND (&) -->

<?php


 if ( TRUE && TRUE ){ // both the conditions have to be true.
	 // there are 2 condtions. If both are true, then it will excute.
	 // it first checks first conditon. If it is true the it checks the second consiton. if that is also true, then it executes.
 	echo " This condition is not true ";
 }
else {
	echo " This condition is not true.";
}
echo "<br>";


if ( 4 AND 2){ // there is one conditon. If it is true, then it will execute. We could also write (4 & 2)
	// & is a bitwise operator. 4 = 100 , 2 =010 , so 100 & 010 = 000. 
	echo " This is true ";
}

?>

<br>

<?php

$a = 5;
$b = 3;

if ( ( $a == 5 ) && ( ++$b == 4 ) ){
	echo $b;  // ekhane 4 show korbe. 
}

?>

<br>

<?php

$a = 5;
$b = 3;

if ( $a == 5 && ++$b == 3 ){
	echo $b; // ekhane kichu show korbena. BEcause ++$b ekhane 4 hobe. 3 na.
}


?>

<br>

<?php

$a = 5;
$b = 3;

if ( ($a == 6) AND (++$b == 4) ){
	echo $b; // ekhane 4 show korar kotha. but kano show korchena janina.
}

?>




