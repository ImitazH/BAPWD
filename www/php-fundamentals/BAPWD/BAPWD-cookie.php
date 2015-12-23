<?php

//echo $exp = time(); // eta 1970 00AM theke ekhon porjonto joto time hoyeche ta second e dekhabe.

$exp = time()+86400; // 86400 sec = 1day. means 1 day pore expire hobe. Means next 24years je kono somoy ei data amader browser theke dekha jabe.
//setcookie("name","Hasan",$exp ); // egulo open kore ekbar refresh diye then abar comment out korle and sudu nicer line guo echo thakle ekhan theke cookie te ta set hobe ta dekha jabe.
//setcookie('age','23',$exp);


echo $_COOKIE['name'];
echo $_COOKIE['age'];

echo "<br>";

echo $_COOKIE['name'] . " is " . $_COOKIE['age'] . " Years old" ;

echo "<br>";

print_r($_COOKIE); // array and array variable er jonno amra print_r use korte parbo.

echo "<br>";

if ( isset($_COOKIE['name']) )
	echo " Cookie is set";

else
	echo " Cookie is not set ";


//$exp_unset = time() - 86400;  // eta cookieunset kroar jonno. Uporersob comment out kore sudu eta run kore age sob cookir unset/remove hoye jabe.unsetkorar jonno 1din pichiye dite hobe.
//
//setcookie('name', '', $exp_unset );

?>
