<?php


$sm = array(

	'name' => "Durjoy",
	"profession" => "Developer",
	"age" => 22

);

extract ($sm);

echo $name;

echo "<br>";

echo " Amar nam hocche " . $name;


echo "<br>";

$sm = array(

	'name' => "Durjoy",
	"profession" => "Developer",
	"age" => 22

);


$text = " My name is DUrjoy and I live in Dhaka, Bashundhara and I ive in Bangladesh. ad

where are you. I am actually looking for you. ";

echo " Ami valo achi $text";

echo "<br>";

echo " Ami valo achi and amar nam hocche $sm[name]";

echo "<br>";
echo " Ami valo achi and amar nam hocche {$sm['name']}";  // name ke single quotation er moddhe likhle kaj korbena Tai $sm['name'] etake { } er moddhe likhte hobe.



$portfolio = "Portfolio";  // php ke amra html er moddheo likhte parbo nicer moto kore.
$content = <<<EOT

	<ul>
		<li> <a href="#">Home</a> </li>
		<li> <a href="#"> ABout</a> </li>
		<li> <a href="#">Services</a> </li>
		<li> <a href="#">Contact</a> </li>
		<li> <a href="#">$portfolio</a> </li>

	</ul>
EOT;

// EOT er pore and EOT er age space deya jabena.
// This is called heredocs.
// EOT na likhe amra TXT / EOD o likhte pari. But EOT ta beshi standard.
// jokhon dekhbo single / double quotation er onek jamela ache tokhon ba jokhon bisal kono content er moddhe phpp, html eksathe use korte hobe tokhon amra heredocs use korbo.
// EOT ta ekdom file er last statement howa jabena. Hole error dhorbe.






echo $content;
