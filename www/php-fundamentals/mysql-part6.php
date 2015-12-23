<?php


// there ways 3 of conenction.


// Eta ekhon r kaj korena. this is anti pattern now. means bad practice or not perfect.
//mysql_connect ('localhost','root'," ");


// so amra use korbo 2. mysqli and 3.pdo  . these are new format.
//mysqli - mysql improved


$info = new mysqli("localhost",'root','','studentsdb');

$query = $info ->query ('SELECT * FROM users');

while ($content = $query -> fetch_object()){

	echo $content -> id. " :" . $content ->username ." <br>";
}



?>
