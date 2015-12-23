<?php


//phpinfo(); // to show all the information of PHP
//echo $_SERVER['HTTP_USER_AGENT']; // to check what sort of browser the visitor is using.


echo " <h1> This is Durjoy. </h1>" . "\n";
//	echo "\n";  // Amra <br> er sathe sathe \n diyeo line break korte pari.
echo " <p> My name is also Aneek</p>";

?>

<!-- ================= -->

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() must have returned non-false</h3>
<p>You are using Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>
<?php
}
?>

<!-- ====================    -->

<!--
<?php
foreach ($_SERVER as $key=>$value)
{
	echo $key."=".$value;
	echo "<br><br>";
}
?>-->

<!-- =======================  -->

<!--
<form action="phpdotnet.php" method="post">
	<p>Your name: <input type="text" name="name" /></p>
	<p>Your age: <input type="text" name="age" /></p>
	<p><input type="submit" /></p>
</form>

Hi <?php echo htmlspecialchars($_REQUEST['name']); ?>.  //special characters o show / support  korbe.
You are <?php echo $_REQUEST['age']; ?> years old.  // age sudu integer value hobe. form e age er place e sring value dole ekhane kichu dekhabena.
-->

<!-- ====================-->
<?php

if( 40>20 ):
?>

<h1> this condition is ture </h1>

<?php else : ?>


<h1> This condition is not true. </h1>


<?php endif; ?>

<!--=========================-->

<?= " My name is durjoy " ?>
<?=  " <h1> My name is Aneek</h1> " ?>
<!-- two different kind of opening and closing tag. -->
<!-- closing tag of a block of PHP code automatically implies a semicolon; you do not need to have a semicolon terminating the last line of a PHP block. -->




<!-- ============================== -->
<?php
	// Get the first character of a string
	$str = 'This is a test.';
$first = $str[0];
echo $first . "<br>" ;

// Get the third character of a string
$third = $str[2];
echo $third . " <br>";

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1];
echo $last . " <br>";

// Modify the last character of a string
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';
echo $str;

?>

<!--========== ARRAY =============-->

<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>


<!--========================-->

<?php

$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
	echo gettype($value) , "\n";
}

?>

<!--=======================-->

<?php

echo "<br>";

$an_int = 12;
if (is_int($an_int)) {   //If this is an integer, increment it by four
	$an_int += 4;

}
echo $an_int;


?>

<!-- =========================== -->

<?php
$array = array(
	1    => "a",
	"1"  => "b",
	1.5  => "c",
	true => "d",
);
var_dump($array);
?>

<!-- ================================ -->
<?php
$array = array(
	"a",
	"b",
	6 => "c",
	"d",
);
var_dump($array);
?>


<!--==================================-->


<?php
$array = array(
	"foo" => "bar",
	42    => 24,
	"multi" => array(
		"dimensional" => array(
			"array" => "foo"
		)
	)
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>

<!-- ============================-->

<?php

$arr = array(5 => 1, 12 => 2);
$arr["x"] = 42; //  This adds a new element to the array with key "x"
var_dump($arr);

echo $arr[12];

unset($arr[5]); // This removes the element from the array

unset($arr);    // This deletes the whole array


?>


<!--===============================-->
<?php

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

print $arr['fruit'];  // apple
print $arr['veggie']; // carrot
print "Hello $arr[fruit]";      // Hello apple // THi is okay, as it's inside a string. ekhane 'fruit' dile kaj korbena.
print "Hello {$arr['fruit']}";  // Hello apple
print "Hello " . $arr['fruit']; // Hello apple

?>

<!--========================-->

<br>

<?php
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as $color) {
	echo "Do you like $color? <br>";
}

?>


<!-- ======================= -->


<?php
$firstquarter  = array(1 => 'January', 'February', 'March');
print_r($firstquarter); // will show all value and the index
echo "<br>";
echo $firstquarter[1]; // show only the value with index 1
echo "<br>";
print_r ($firstquarter[1]); // first value with index 1 , showinng with print_r

?>

<!-- =========================-->
<br>

<?php
$fruits = array ( "fruits"  => array ( "a" => "orange",
									  "b" => "banana",
									  "c" => "apple"
									 ),
				 "numbers" => array ( 1,
									 2,
									 3,
									 4,
									 5,
									 6
									),
				 "holes"   => array (      "first",
									 5 => "second",
									 "third"
									)
				);

// Some examples to address values in the array above
echo $fruits["holes"][5];    // prints "second"
echo $fruits["fruits"]["a"]; // prints "orange"
unset($fruits["holes"][0]);  // remove "first"
echo "<br>";
var_dump($fruits["holes"]);

 //Create a new multi-dimensional array. ekahne $juices ekta new array amra create korlam. Jar moddhe arekta array apple. Apple er moddhe areka array green.
$juices["apple"]["green"] = "good";
var_dump($juices);
?>

<!--==============OBJECT ============= -->
<?php
class foo
{
	function do_foo()
	{
		echo "Doing foo.";
	}
}

$bar = new foo;
$bar->do_foo();

?>

<!--========CONSTANTS==================-->
<br>
<?php

define("FOO",     "something");   // "FOO" is identifiers and "something" is value.
define("FOO2",    "something else");
define("FOO_BAR", "something more");
//define('ANIMALS', array(
//	'dog',
//	'cat',
//	'bird'
//));   // Wordk in PHP 7
echo FOO;
echo "<br>";
echo FOO2;
echo "<br>";
echo FOO_BAR;
//echo ANIMALS[1]; // Does not work here since this WAMPP do not support PHP 7.


?>

<!--========================= -->
<br>

<?php

const FIRST =" Hello World";
echo  FIRST;
//echo "<br>";
//constm SECOND = FIRST . " , GOODBYE WORLD";  // Does not support in this WAMPP Server
//echo SECOND;

?>
<br>
<?php
$a = 1;
//echo  $a++; // prints 1
echo  $a + $a++; // may print either 2 or 3 // prints 3

echo "<br>";

$i = 1;
$array[$i] = $i++; // may set either index 1 or 2
echo $array[$i];  // prints 1

?>

<!--=========================== -->
<?php
$a = 3;
$b = &$a; // $b is a reference to $a

print "$a\n"; // prints 3
print "$b\n"; // prints 3

$a = 4; // change $a

print "$a\n"; // prints 4
print "$b\n"; // prints 4 as well, since $b is a reference to $a, which has
// been changed
?>

<!--=========== ARRAY UNION ================ -->


<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);

$c = $b + $a; // Union of $b and $a
echo "Union of \$b and \$a: \n";
var_dump($c);

$a += $b; // Union of $a += $b is $a and $b
echo "Union of \$a += \$b: \n";
var_dump($a);
?>
<!--===============instanceof=======================-->
<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass; // class 'MyClass' is instanciated.


var_dump($a instanceof MyClass);   // true , this class is instanciated.
var_dump($a instanceof NotMyClass); // false, this class is not.
?>

<!--================elseif=========================-->

<?php


if(10 > 20):
echo " 10 is greater than 20";

elseif(10 == 20):
echo " 10 is equal to 20 ";

else:
echo " 10 is less than 20 ";

endif;

?>

<!--======================= -->

<br>

<?php if (5 == 5): ?>
5 is equal to 5
<?php endif; ?>


<!--===========while loop================-->
 <br>

<?php
///The following examples are identical, and both print the numbers 1 through 10:
/* example 1 */

$i = 1;
while ($i <= 10) {
	echo $i++ . "<br>";  /* the printed value would be
				   $i before the increment
				   (post-increment) */
}

?>

<?php

/* example 2 */

$i = 1;
while ($i <= 10):
echo $i;
$i++;
endwhile;
?>




<!-- =====do while loop====== -->
<br>

<?php

$i =5;
do{
	echo " This is " . $i;
}while($i<4);

// even through the condition is not met, but it will print "This is 5", since the condition is at the end of the iteration.

?>

<?php

$i=5;
while($i <4){
	echo "This is $i";
}
// it wil not print anything because the condition is checked at the beginning of the iteration and it is not met.
?>


<!--============for loop ==============-->

<?php

for ($i = 1; $i <= 10; $i++) {
	echo $i . "<br>";
}

?>

<br>

<?php


for ($i = 1; ; $i++) {
	if ($i > 10) {
		break;
	}
	echo $i . "<br>";

}

?>

<br>

<?php

for ($i = 1; ; $i++) {

	echo $i ."<br>";
	if ($i > 10) {
		break;
	}

}

?>

<br>

<?php

$i = 1;
for (; ; ) {
	if ($i > 10) {
		break;
	}
	echo $i;
	$i++;
}

?>

<br>

<?php

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

?>


<!--================== foreach==========-->

<br>

<?php


$names = array("Durjoy","Imtiaz","Hasan");

foreach($names as $name){
	echo $name . "<br>";
}

?>


<?php

$names = array(
	"firstName" => "Imtiaz",
	"secondName" => " Hasan",
	"nickName" => "Durjoy",
	"surName" => " Aneek", // ekhane comma(,) dileo hobe na dileo hobe.
); // ekhane semicolon(;) ditei hobe.

foreach($names as $ami => $name){
//	echo $ami . "<br>";
	echo "$ami => $name . <br>";
}


?>

<?php
foreach (array(1, 2, 3, 4) as $value) {
	$value = $value * 2;
	echo $value . "<br>";
}
?>


<?php

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
	echo "Current value of \$a: $v. <br> ";
}

?>

<?php

$a = array(1, 2, 3, 17);

$i = 0; /* for illustrative purposes only */

foreach ($a as $v) {
	echo "\$a[$i] => $v.\n";
	$i++;
}


?>

<br>

<?php

$a = array(
	"one" => 1,
	"two" => 2,
	"three" => 3,
	"seventeen" => 17
);

foreach ($a as $k => $v) {
	echo "\$a[$k] => $v.\n";
}

?>

<br>

<?php

/* foreach example: multi-dimensional arrays */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
foreach ($v1 as $v2) {
echo "$v2 <br>";
}
}
?>

<br>

<?php
$array = [
	[1, 2],
	[3, 4],
];

foreach ($array as list($a, $b)) {
	// $a contains the first element of the nested array,
	// and $b contains the second element.
	echo "A: $a; B: $b <br>";
	// RIght output asche na.
}
?>

<br>


<?php
$array = [
	[1, 2],
	[3, 4],
];

foreach ($array as list($a , $b)) {
	// Note that there is no $b here.
	echo $a .' , ' ;

}
?>


<!-- ==========break ===========-->
<br>

<?php

// Kivabe kaj korche bujte parchina.
$i = 0;
while (++$i) {
	switch ($i) {
		case 5:
		echo "At 5 <br />";
		break 1;  /* Exit only the switch. */
		case 10:
		echo "At 10; quitting<br />\n";
		break 2;  /* Exit the switch and the while. */
		default:
		break;
	}
}


?>


<!-- ====== CONTINUE ==============-->

<?php
for ($i = 0; $i < 5; ++$i) {
	if ($i == 2)
		continue;
		print "$i\n";
}
?>

<br>

<?php
// Kivabe kaj korche bujte parini.
$i = 0;
while ($i++ < 5) {
	echo "Outer<br />\n";
	while (1) {
		echo "Middle<br />\n";
		while (1) {
			echo "Inner<br />\n";
			continue 3;
		}
		echo "This never gets output.<br />\n";
	}
	echo "Neither does this.<br />\n";
}


?>
