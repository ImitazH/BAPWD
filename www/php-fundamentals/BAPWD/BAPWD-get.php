<?php

$name = $_GET["name"]; // value put korar por segulo browser er URL e show korbe. Sekhane theke $_GET Global array variable  name attribute er maddhome value niye then $name and $age variable e bosabe. Then nice echo korbe.
$age = $_GET["age"];


//echo " My name is " . $name . " and my age is " . $age;  // jodi sudu ei line thakto tahole kichu set ache ke nai seta na dekhei ei line echo kore dito.

if( isset($name) && isset($age) ){ // er fole ekhon jodi kichu set kora thake tahole echo kobe na hole eho korbena.
echo " My name is " . $name . " and my age is " . $age; // The value of $name and $age will be taken from the browser URL.
}


// Amra jodi direct ei page e jai and browser URL e file name er seshe ?name=ImtiazHasan&age=22 likhi tahole broswer a echo te je sentence likheci seta dekha jabe.

//http://localhost/php-fundamentals/BAPWD/BAPWD-get.php?name=ImtiazHasan&age=22

// amra URL e kono value edit kore ENTEr pres korle browser e o seta edit hoye browser e show korbe.

?>
