<?php

echo " This is Durjoy";

?>
<br>

<?php
$capital = 67;
print("Variable capital is $capital<br>");
//print("Variable CaPiTaL is $CaPiTaL<br>"); // PHP is case sensitive. SO it will not work.
?>

<br>

<?php

// Bolean = True/flase
if (TRUE)
	print("This will always print<br>");

else
	print("This will never print<br>");

?>

<br>

<?php
// BOllean = this is flase.
if(0){
	print("THis is True");
}
else{
	print("This is false");
}


?>
<br>

<?php
// BOllean = this is true. any number other than 0 is TRUE.
if(1){
	print("THis is True");
}
else{
	print("This is false");
}

?>

<br>
<?php
// Boolean = this string has characters. So it is true.

	if("aneek"){
		print(" This string is true.");
	}
	else{
		print("This string is false");
	}

?>

<br>

<?php
//  BOolean = This string don't have any character. OR , the character is 0. So it is false.
//if("0"){
if(""){
	print(" This string is true.");
}
else{
	print("This string is false");
}

?>

<br>



<?php
// Boolean = values of type NULL is always false.

if(NULL){
	print(" NULL- This string is true.");
}
else{
	print(" NULL- This string is false");
}

?>

<br>

<?php

//$durjoy = [5];
//$durjoy = array(
//	"Imtiaz", 5, "Hasan"
//);

// BOOLEAN = THis array is false. Because this array does not have any value.
 $durjoy =[];

if($durjoy){
	print("This array is true.");
}
else{
	print("This array is false");
}

?>


<br>
<?php

// BOOLEAN = THis array is true. Because this array contains value.

//$durjoy = [5];
$durjoy = array(
	"Imtiaz", 5, "Hasan"
);


if($durjoy){
	print("This array is true.");
}
else{
	print("This array is false");
}

?>

<br>

<?php
$variable = "name";
$literally = 'My $variable will not print!';
print($literally);
print "<br>";

//$literally = "My \$variable will print!";
$literally = "My $variable will print!";
print($literally);
?>

<br>
<!-- ==== Local Variable =======-->
<?php
$x = 4;

function assignx () {
	$x = 0;  // this is a Local variable because this varible can be unsed only inside this function.
	print "\$x inside function is $x. <br />";
}

assignx();
print "\$x outside of function is $x. <br />";
?>

<br>

<!-- ==== Function parameters -->

<?php

function multiply ($value) {
	$mvalue = $value * 10;
	echo " Return value is " . $mvalue;
}

multiply (10);
?>

<br>



<?php

// multiply a value by 10 and return it to the caller
function multiplyme ($value) {
	$value = $value * 10;
	return $value;
}

echo " Return value is " . multiplyme(10) . "<br>";
echo multiplyme(11);

?>


<br>

<!-- =====GLOBAl variable ========-->

<?php

$var = 15; // since this is out of the function, we can use this varibale from anywhere of the program.

function durjoy(){

	GLOBAL $var; // TO use a varibale as GLobal variable, we have to place the keyword "GLOBAL" of the variable.
	$var++;

	echo $var;
}

durjoy();
?>


<br>
<br>
<br>
<!-- ==== STATIC VARIABLES ===-->

<?php
function keep_track() {
	STATIC $count = 0;
	$count++;
	print $count;
	print "<br />";
}

keep_track();
keep_track();
keep_track();


?>
<!-- ==== CONSTANT ==========-->


<?php
define("MINSIZE", 50);

echo MINSIZE;
echo "<br>";
echo constant("MINSIZE"); // same thing as the previous line
?>

<!-- ==== Operators =========== -->

<br>

<?php
$a = 42;
$b = 0;

if( $a && $b ){
	echo "TEST1 : Both a and b are true<br/>";
}
else{
	echo "TEST1 : Either a or b is false<br/>";
}

if( $a AND $b ){
	echo "TEST2 : Both a and b are true<br/>";
}
else{
	echo "TEST2 : Either a or b is false<br/>";
}

if( $a || $b ){
	echo "TEST3 : Either a or b is true<br/>";
}
else{
	echo "TEST3 : Both a and b are false<br/>";
}

if( $a or $b ){
	echo "TEST4 : Either a or b is true<br/>";
}
else{
	echo "TEST4 : Both a and b are false<br/>";
}

$a = 10;
$b = 20;

if( $a ){
	echo "TEST5 : a is true <br/>";
}
else{
	echo "TEST5 : a  is false<br/>";
}

if( $b ){
	echo "TEST6 : b is true <br/>";
}
else{
	echo "TEST6 : b  is false<br/>";
}

if( !$a ){
	echo "TEST7 : a is true <br/>";
}
else{
	echo "TEST7 : a  is false<br/>";
}

if( !$b ){
	echo "TEST8 : b is true <br/>";
}
else{
	echo "TEST8 : b  is false<br/>";
}
?>
<br>

<?php
$a = 10;
$b = 20;

/* If condition is true then assign a to result otheriwse b */
$result = ($a > $b ) ? $a :$b; // means, condition er jonno jeta true hobe seta $result variable er modddhe bose jabe.

echo "TEST1 : Value of result is $result<br/>";

/* If condition is true then assign a to result otheriwse b */
$result = ($a < $b ) ? $a :$b;

echo "TEST2 : Value of result is $result<br/>";
?>


<br>


<?php

// Kivabe kaj korche janina.
$d=date("D");

if ($d=="Wed")
	echo "Have a nice Wednesday!";

else
	echo "Have a nice day!";
?>
<br>

<?php
$d=date("D");

if ($d=="Fri")
	echo "Have a nice weekend!";

elseif ($d=="Sun")
	echo "Have a nice Sunday!";

else
	echo "Have a nice day!";
?>
<br>

<?php
$d=date("D");

switch ($d)
{
	case "Mon":
	echo "Today is Monday";
	break;

	case "Tue":
	echo "Today is Tuesday";
	break;

	case "Wed":
	echo "Today is Wednesday";
	break;

	case "Thu":
	echo "Today is Thursday";
	break;

	case "Fri":
	echo "Today is Friday";
	break;

	case "Sat":
	echo "Today is Saturday";
	break;

	case "Sun":
	echo "Today is Sunday";
	break;

	default:
	echo "Wonder which day is this ?";
}

?>

<br>


<?php
$a = 0;
$b = 0;

for( $i=0; $i<5; $i++ )
{
	$a += 10;
	$b += 5;
}

echo ("At the end of the loop a=$a and b=$b" );
// when $i<1 ; a=10 and b=5 , means tokhon sudu1bar iterate hobe and $i er value thakbe 0.
//  when $i<2 ; tokhon 2 bar iterate hobe ($i= 0 er jonno ekbar and $i=1 er jonno arekbar). seccond time 1st time er valuer er sathe add hobe. So , $a = $a + 10 = 10 +10 = 20 and $b = $b+ 5 =5 +5 =10
// when $i<5 ;a=50 and b=25

?>

<br>

<?php
$i = 0;
$num = 50;

while( $i < 10)
{
	$num--;
	$i++;
}

echo ("Loop stopped at i = $i and num = $num" );
?>


<br>

<?php
$i = 0;
$num = 0;

do{
	$i++;
}

while( $i < 10 );
echo ("Loop stopped at i = $i" );
?>

<br>

<!-- ==== BREAK ============-->

<?php

	$i=0;
	$m =10;

for($i;$i<10;$i++){

	$m +=2;

	if($i==5){
		break;
	}

	echo " The value is $m <br> "; // Ekhane " The value is 20 " porjonto show korbe karon upore if conditoon er moddhe $i ==5 peye ei line e r asbena.
}
//echo " The value is $m <br> ";  // Ekhane outpt show korbe " The value is 22 ". Because Loop theke ber hoye ei line pabe and eta show korbe.


//This is how  it's executed:
//i = 0,1,2,3,4,5,
//m = 12,14,16,18,20,22


?>

<br>

<?php
$i = 0;

while( $i < 10)
{
	$i++;
	if( $i == 3 )break;
}
echo ("Loop stopped at i = $i" );
?>

<br>

<?php
$array = array( 1, 2, 3, 4, 5);

foreach( $array as $value )
{
	if( $value == 3 )continue;
	echo "Value is $value <br />";
}
?>

<br>

<!-- ==== ARRAY =====-->

<?php
/* First method to create array. */
$numbers = array( 1, 2, 3, 4, 5);

foreach( $numbers as $value )
{
	echo "Value is $value <br />";

}
echo " This value is $numbers[3] <br>";


/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach( $numbers as $value )
{
	echo "Value is $value <br />";
}
?>

<br>


<?php
/* First method to associate create array. */
$salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);

echo "Salary of mohammad is ". $salaries["mohammad"] . "<br />";
echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
echo "Salary of zara is ".  $salaries['zara']. "<br />";

/* Second method to create array. */
$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";

echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
echo "Salary of zara is ".  $salaries['zara']. "<br />";
?>

<br>

<?php
$marks = array(
	"mohammad" => array
	(
		"physics" => 35,
		"maths" => 30,
		"chemistry" => 39
	),

	"qadir" => array
	(
		"physics" => 30,
		"maths" => 32,
		"chemistry" => 29
	),

	"zara" => array
	(
		"physics" => 31,
		"maths" => 22,
		"chemistry" => 39
	)
);

/* Accessing multi-dimensional array values */
echo "Marks for mohammad in physics : " ;
echo $marks['mohammad']['physics'] . "<br />";

echo "Marks for qadir in maths : ";
echo $marks['qadir']['maths'] . "<br />";

echo "Marks for zara in chemistry : " ;
echo $marks['zara']['chemistry'] . "<br />";
?>

<br>


<?php

$durjoy = "anik";

print $durjoy . "<br>";
print ($durjoy) . "<br>";
print ("$durjoy") . "<br>";
print "$durjoy";

?>

<br>

<?php

$ami = " Amar name Durjoy and ami Bangladeshe thaki.";

echo strlen($ami);
echo "<br>";
echo strpos($ami , "name");
//echo strpos(" Amar name Durjoy and ami Bangladeshe thaki." , "name");

?>

<br>
<!--======GET and POST METHOD ============= -->

<html>
	<body>

		<form action="tutorialspoint2.php" method="GET">
			Name: <input type="text" name="name" />
			Age: <input type="text" name="age" />
			<input type="submit" />
		</form>

		<form action="tutorialspoint2.php" method="POST">
			Name: <input type="text" name="name" />
			Age: <input type="text" name="age" />
			<input type="submit" />
		</form>

	</body>
</html>

<!--====== File Inclusion ==== -->
<br>

<!-- File Open and reading -->
<?php

require("tutorialspoint3.php");


?>
<br>


<!-- file writing -->
<?php
$filename = "newfile.txt";
$file = fopen( $filename, "w" );

if( $file == false )
{
	echo ( "Error in opening new file" );
	exit();
}
//fwrite( $file, "This is  a simple test and my name is Durjoy.\n" ); // ekhane ja likhbo ta newfile.txt folder er moddhe lekha hoye jabe. and jodi newfile.txt name kono file na thake tahole automatic ei name ekta file create hoye tar moddhe ei text write hoye jabe.
fwrite( $file, " <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor optio enim quae, aut est molestias, harum esse officia porro cum cumque, dolores, voluptates laudantium. Laboriosam illo explicabo qui tempore molestias! </h3>\n" );
fclose( $file );
?>

<br>



<?php

// ei program ta use kora hocche, newfile.txt file er moddhe ja ache ta show koranor jonno.
// means upore ja input korbo ta newfile file e save hoye jabe and nicer code diye amra seta print / show korabo.

$filename = "newfile.txt";
$file = fopen( $filename, "r" );

if( $file == false )
{
	echo ( "Error in opening file" );
	exit();
}

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );

fclose( $file );

echo ( "File size : $filesize bytes" );
echo ( "$filetext" );
echo("file name: $filename");

?>

<!--======= FUNCTIONS ======= -->
<br>
<br>

<?php

function writeMessage($durjoy,$imtiaz,$hasan,$anik){
 // Defining a funciton.
	echo "This is a simpele text by using function <br>" ;
	echo " My name is " . $imtiaz ." ". $hasan . ". My nick name is ". $durjoy . " .My another name is " . $anik;


}
writeMessage("Dujroy","Imtiaz","Hasan","Anik"); // calling the function.


?>

<br>

<?php
function addFunction($num1, $num2)
{
	$sum = $num1 + $num2;
	echo "Sum of the two numbers is : $sum";
}

addFunction(10, 20);
?>


<br>


<?php
function addFive($num)
{
	$num += 5;
}

function addSix(&$num)
{
	$num += 6;
}
$orignum = 10;
addFive( $orignum );

echo "Original Value is $orignum<br />";

addSix( $orignum );
echo "Original Value is $orignum<br />";
?>


<!-- ==== reutn statement in Function === -->

<br>

<?php
function addNumbers($num1, $num2)
{
	$sum = $num1 + $num2;
	return $sum;
}
$return_value = addNumbers(10, 20);

echo "Returned value from the function : $return_value";
?>


<br>

<?php
function addFunction2($num1, $num2, $num3)
{

	$add = $num1 + $num2;
	$sub = $num3 - $num1;

	return array($add,$sub);
}

 $result = addFunction2(10, 20, 30);

echo " Result 1 = " . $result[0] . "<br>";
echo " Result 2 = " . $result[1] ;

?>

<br>

<?php

	function anotherFunction($num)
	{

		return $num;
	}

	echo anotherFunction(5);


?>

<br>


<?php
	// Default value for function parameter.
	function printMe($param = NULL)
	{
		print $param;
	}
	printMe("This is test");
	printMe();
?>

<br>

<?php
	function sayHello()
	{
		echo "Hello<br />";
	}
	$function_holder = "sayHello";
	$function_holder();
?>

<br>

<?php
//Passing Arguments by Reference
// kiavbe kaj korlo janina.

function addSeven($num)
{  // ki kaj bujlam na
	$num += 7;
}

function addEight(&$num)
{
	$num += 8;
}
$orignum = 10;
addSeven( $orignum ); // ki kaj bujlam na

echo "Original Value is $orignum<br />";

addEight( $orignum );
echo "Original Value is $orignum<br />";

?>
