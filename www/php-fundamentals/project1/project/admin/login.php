<?php

session_start();

require_once("function.php");


if(isset($_POST['submit'])){


	define('EMAIL','admin@email.com');
	define('PASSWORD','123');


	if($_POST['login_email'] === EMAIL  && $_POST['password'] === PASSWORD){

		$_SESSION['login_email'] = EMAIL;


		header('location: index.php');
	}




	if( user_logged_in() ){
		header('location: index.php');     // Kaj korchena. Keno korchena janina.
		// index.php te login ovosthay thakar por abar login.php te gele ta index.php te redirect korbe. But korche na. login.php tei thakche.
	}



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Paject 1</title>
</head>
<body>

<form action="" method="post">

	<label for="email">Email:</label>
	<input type="email" id="email" name="login_email">
	<br>


	<label for="password"> Password:</label>
	<input type="password" id="pass" name="password">
	<br>

	<input type="submit" name="submit" value="Login" >


</form>

</body>
</html>

