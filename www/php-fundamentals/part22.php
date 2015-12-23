<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET, POST, REQUEST </title>
</head>
<body>

<form action="">
<!--
 ekhane method = GET/POST bosate hoy.jodi kichu na bosai tahole default vabe GET e pabe and amra je input gulo debo ta
 browser link e show korbe.
-->
	<input type="text" name="s">
<!--
	 wordpress er search kaj kore 's' er maddhome.
	 means wordpress site e kothao search bosanor jonno sudu name="s" diye dile hobe.
-->
	<input type="submit" value="search">
</form>


<br>

<form action="" method="get">

	<input type="text" placeholder="name" id="name" name="name">
	<input type="mail" placeholder="emial" id="mail" name="mail">
	<input type="text" placeholder="number" id="number" name="contact">
	<input type="submit" value="Submit">
</form>
<!-- jodi amra name na dei tahole input box kichu likhe submit korleo kichu dekhabena. Jodi Amra name dei and inout box a kichu likhe submit kori tahole
  setya browser link e por por & kore show korbe. -->
<!--   @ er jonno browser link a %40 show korbe and space er jonno + show korbe -->
<!--
JODI amra GET/POST use kote cai tahole amader every input element er name = "" dite hobe. and jodi amra method kichu nai dei
tahole by default GET peye jabe and mehtod="GET" dileo amra je sob input debo ta sibmit korle browser link e show korbe.

-->


	<br>

	<form action="" method="post">

		<input type="text" placeholder="name" id="name" name="name">
		<input type="mail" placeholder="emial" id="mail" name="mail">
		<input type="text" placeholder="number" id="number" name="contact">
		<input type="submit" value="Submit">
	</form>
<!--

But amra jodi method ="post" dei tahole input e ja debo ta show korbena. Karon eta secure.
-->


<?php


// Jodi amra evbe GET diye likhi tahole input value gulo broswer link e show korbe + browser e o nice nice show korbe.
/*
echo $_GET['name'];
echo "<br>";
echo $_GET['mail'];
echo "<br>";
echo $_GET['contact'];
*/

// Jokhon form er moddhe post debo tokhon php er moddheo $_POST superglobal use krote hobe.
// ekhane amra $_POST er maddhome form theke je input gulo pacchi segulo show korabo.


/*
echo $_POST['name'];
echo "<br>";
echo $_POST['mail'];
echo "<br>";
echo $_POST['contact'];
*/

//post er jonno amader input field e value deyar age error show kobe and value dile input field  ja submit korb ta show korbe.


// echo $_POST; // input gulo post e array akare joma hoy.
//print_r($_POST); // evabe likhle array() dekha jabe.

/*
foreach ($_POST as $single){  // foreach use korle value gulo nice nice show korche.
	echo $single . " <br> ";
}
*/


foreach ($_REQUEST as $single){  // POST er place e REQUEST o use kora jabe. Same kaj kore. Khub beshi difference nai.
	echo $single . " <br> ";
}

// Amra kaj korar somoy always POST use na kore REQUEST use korbo.


?>


</body>
</html>

