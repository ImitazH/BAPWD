
<?php

$name = $_GET["name"];
$age = $_GET["age"];

// Jodi kono value na diye empty submit korei tahole egulor jonno error dekhabe. Karon tokhon egulo kono valu pabena.

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Section 7 21 - GET </title>
</head>
<body>

	<form action="BAPWD-get2.php" method="get">
		Name: <input type="text" name="name"> <br>
		Age:<input type="text" name="age"> <br>
		<input type="submit" value="Submit">
	</form>

</body>
</html>


<?php

//if( isset($name) && isset($age) ){ // jodi set kora thake tahole se value niye nier line echo korbe. R jodi empty thake tahole empty value niye echo korbe.

if( isset($name) && isset($age) ){ // ekhon jodi empty o hoy tahole echo na kore else e jabe.  1. click kora hobe/set kora hobe.
	if ( !empty($name) && !empty($age) ){  // 2. check kora hobe jeta set kora hoyeche seta empty kina. Empty na hole value soho echo hobe.
		echo "My name is " . $name . " my age is " . $age;
	}
	else{
		echo " Nothing is set."; // 3. Empty hole bolbe nothing is set.
	}

}

//  isset mane hocche jodi set kora hoy means jodi submit button e click kora hoy tahole set hobe.


?>
