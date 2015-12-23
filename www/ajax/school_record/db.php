<?php

$server = 'localhost';
$user='root';
$password="";
$db="school_record";

// usernamr: ajax and password: 123 diye bar bar error dekhache. Tai root and null pass use korechi and kaj koreche. 

$conn=mysqli_connect($server,$user,$password,$db); 
// conn = connection