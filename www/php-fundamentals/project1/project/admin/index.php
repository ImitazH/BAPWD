<?php


session_start();


//if(!isset($_SESSION['login_email'])){
//	header('location:login.php');
//}


require_once("function.php");   // function.php te je function ta ache seta akhane nicer condition e use hoyeche. Tai sei file take ekhane require_once kore add kora hoyeche.


if (!user_logged_in()){  // means, jodi user login kora na thake tahole login.php te niye jabe.
	header('location:login.php');
}






?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Index page </title>
</head>
<body>

<h2> Welcome to out Admin Panel </h2>


<button type="button" name="logout"> <a href="logout.php"> LOGOUT </a></button>

</body>
</html>
