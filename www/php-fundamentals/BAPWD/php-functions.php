<!-- ==== strlen function ===== -->
<?php

//echo strlen(" My name is Dujroy. ");
//$name= strlen("Dujroy");
$name = "Durjoy";
$name= strlen($name);
echo " your name has " .  $name . " character. ";

?>

<br>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> PHP functions</title>
</head>
<body>

	<form action="php-functions.php" method="get">
		Name: <input type="text" name='name'> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>


<?php
$max_len = 10;

if ( isset($_GET['name']) ){
	$input = strlen( $_GET['name'] );

	if( $input > $max_len ){
		echo " Sorry! Too long. ";
	}
	else {
		echo " Ok! ";
	}
}

?>


<!-- ===== substr function ========-->

<?php

$name = "Imtiaz Hasan Durjoy.";
$str_name = strlen($name);

echo substr($name, 0 ,6); // here 0 is the index value and 6 is the number of characters that will be shown from the frist character.
echo "<br>";
echo substr($name, 0 ,$str_name-8 );
?>
<br>
<?php

$body = " This is an aritcle. It's quite long and could go on for sometime, leaving you no room on the page. ";

$body = ( strlen($body) > 25 ) ? substr($body, 0 , 25) . "...."  : $body;

echo $body;

?>

<br>

<!--===== strtolower, strtoupper funciton -->

<?php

$name = " Imtiaz Hasan";
echo strtolower($name);
echo "<br>";

echo strtoupper($name);
?>

<!--===== htmlentities function =======-->
<?php

// echo " <script> alert('Hello world'); </script> ";  // php er moddheo js kaj korche.

?>
<br>

<?php

$from_bd = " <script> alert('Hello world'); </script> ";
$sanitised = htmlentities( $from_bd);
echo $sanitised;  // If we go to the 'view page source' , we will see how all the html entities are written.

?>

<!--===== trim   funcition ======== -->

<br>
<?php
// trim function does not count any white space.

$name= "  ";  // ekhane jodio kono value nai but space thakay mone korbe je kono value ache.

if( strlen($name) == 0){
	echo " Please enter a username";
}

else {
	echo " Fine ";
}
?>

<br>

<?php

$name= "  "; // now, trim funciton use korar fole sudu space thake count korbena.

if( strlen(trim($name)) == 0){
	echo " Please enter a username";
}

else {
	echo " Fine ";
}

?>

<br>

<!--==== number_format() =========-->
<?php


//$number = number_format('10000034534783',0);
$number = 10000000;
$number--;
$number_formatted = number_format($number,0);

echo " you have &pound; " . $number_formatted;

?>
<br>


<?php

$pi = pi();
$pi_short = number_format($pi, 3);
echo $pi_short;


?>

<br>

<?php

$ami = 1111111111;

echo number_format($number);
echo "<br>";
echo number_format($ami,0);
echo "<br>";
echo  number_format($ami, 3);

?>
<br>

<!-- ===== nl2br() function ======-->
<?php

if( isset($_GET['text'] )){
	echo nl2br( htmlentities($_GET['text'] )); // nl2br() funtion er fole textarea er moddhe line break kore msg korle output e o line break kore dekha jabe.
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> php funcitons</title>
</head>
<body>

	<form action="php-functions.php" method="get">
		<textarea name="text" cols="30" rows="10"></textarea>
		<input type="submit" value="submit">
	</form>

</body>
</html>


<!-- ========= explode() function ===== -->
<?php

//$string = "1 2 3 4 5 ";
$string = "1/2/3/4/5";
//$exparray = explode(" ",$string);
$exparray = explode("/",$string);
echo $exparray[1];

echo "<br>";

//$newstring = implode($exparray);  //implode() and join() are the same.
$newstring = join($exparray);
echo $newstring;


?>
 <br>

<!-- ==== strrev() function ==== -->


<?php

echo strrev("Durjoy");

?>

<!-- ==== substr_count() function -->
<br>

<?php

$search = " My name is Durjoy. What is your name?";
$result = substr_count($search,"name");
echo $result;

?>
<br>

<!-- ====== substr_replace() =======-->
<?php

$replace = "My name is Durjoy. ";
$result = substr_replace($replace, "Aneek",11,16);
echo $result;


?>
