<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname ="project1";


$connection =  mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname );
 // Ekhaneo amra variable er moddhe data diyechi. Kintu etake alada kroe instentiate korte hobena. Eta already instentiate hoye geche.Tai ekhon browser reload dile kono error show korbena.


$sql = " SELECT * FROM pages ";

$output = $connection -> query($sql); 


echo "<ul>";

while( $row = $output-> fetch_object() ){
	
//	var_dump($row);  // sobgul column and tader content details show korbe.
//	echo "<hr>";
	
// echo  $row -> name ; // name column er je value gulo ache segulo show korbe. 
	
	echo "<li>" . $row -> name . "</li>"; 
	
	
}
	
echo "</ul>";


//$insert = " INSERT INTO pages VALUES( '', about us', 'this is my about')";
//$something = $connection -> query($insert); // Insert hocchena. Keno janina.



//$insert = " UPDATE pages SET name='portfolio' WHERE ID=2 " ;
//$something =  $connection -> query($insert);

$insert = " UPDATE pages SET name='blog',content='this is blog page'  WHERE ID=2 " ;
$something =  $connection -> query($insert);




if(mysqli_connect_error()){  // means , jodi eeror thake/ connect establish korte na pare tahole die hoye jabe. Er pore r kichu dekha jabena.
	die(" Error extablishing database connection and the error is " . mysqli_connect_error() . " and the error number is " . mysqli_connect_errno() );
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Project 1</title>
</head>
<body>
	
	
	<h1> This is our content </h1>
</body>
</html>