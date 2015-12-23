<?php


session_start();


//echo " My name is " . $_SESSION['username'];

if(isset($_SESSION['username'])){

	echo " My name is " . $_SESSION['username'] . " <br>"; // means, session er aje jokhon username="Imtiaz" thakbe tokhon e ei page e dhukbe and ei line show korbe. Na hole par23-project.php page e redirect kore dibe.

}
else{
	header('location:par23-project.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Logout </title>
</head>
<body>

	<a href="part23-logout.php"> Logout </a> <!-- ei amader part23-logout.php page a niye jabe and sekhane session destroy hoye  jabe. -->

</body>
</html>
