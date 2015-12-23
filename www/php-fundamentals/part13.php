<?php


echo " My name is Durjoy";
echo " <br>";
$name ="DUrjoy";
echo " My name is  $name "; // Not a good practice
echo " <br>";
echo " My name is " . $name; // This is the stadard formate but there is a better format that we call formatted String. jokhon onek ...
//... variable likhte hobe tokhn bar bar concade na kore formametd string diye lekha better.
echo " <br>";
printf (" My name is %s","Dujroy"); // Formatted string
//or
printf (" My name is %s",$name); // Formatetd string 
echo " <br>";

$name = "Aneek";
$address = ' Dhaka';
$block = "D";
$age = 22;

printf ( " My name is %s and I live in %s , block %s. and my age is %d",$name,$address,$block,$age);

echo " <br>";

printf(" My name is Hasan");

echo " <br>";
function aboutme(){
	
	$name = "Aneek";
	$address = ' Dhaka';
	$block = "D";
	$age = 22;

	printf ( " My name is %s and I live in %s , block %s. and my age is %d",$name,$address,$block,$age);  // usning a  funciton

	
}

aboutme();

echo " <br>";
function aboutmyself(){

	$name = "Aneek";
	$address = ' Dhaka';
	$block = "D";
	$age = 22;

	// return ( " My name is %s and I live in %s , block %s. and my age is %d",$name,$address,$block,$age);  // eit kaj korbena coz retrun er vitor multiple parameter kaj korbena
	
}

echo aboutmyself();


echo " <br>";
function aboutdurjoy(){

	$name = "Aneek";
	$address = ' Dhaka';
	$block = "D";
	$age = 22;

	return "  I am trying to print a sting using return function ";  // it wll work
}

echo aboutdurjoy();


echo " <br>";
function aboutaneek(){

	$name = "Aneek";
	$address = ' Dhaka';
	$block = "D";
	$age = 22;

	return  sprintf( " My name is %s and I live in %s , block %s. and my age is %d",$name,$address,$block,$age);   // return diye multple parameter print korate caile print na duye sprintf dite hobe
}

echo aboutaneek();


?>

