
<?php


session_start();



define('USERNAME',"Imtiaz");
define('PASSWORD', '123456');


if(isset($_POST['submit'])){

	$username=$_POST['username'];  // ekhane 'username' hocche form er input field er 'name'. uporer define () er mddhe jeta use kora hoyeche seta and eta ek na
	$password=$_POST['password'];

	if( $username === USERNAME && $password === PASSWORD ){

		$_SESSION['username']=$username; // means, jokhon submit korbo tokhon admin.php te jawaer agei ekta session crete hobe.

		header("Location: part23-admin.php"); // means username and password thik thakle amader part23-admin.php te niye jabe.
		// EI PAGE A JACCHENA. BUJLAM NA,  KANO.
	}

	else{
		// echo " Invalid Login Credentials" ;  // jehtu eta ekhane form er upore ache ta page e o form er uporei shoe korbe. Jodi nice dekhate cai tahole nicer moto kore korbo.

		$message = " Invalid Login Credentials ";
	
	}
	
	
//	
//	function user_logged_in(){
//	
//		if(isset($_SESSION['username'])){
//			return true;
//		}	
//	}
//	
//	
//	if ( user_logged_in() ){
//		header("Location:part23-admin.php");
//	}
//	
	

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Project with session </title>


</head>
<body>

	<form action="" method="post">
		<label for="username">Username:</label>
		<input type="text" name='username' id="username" required>
		<br>

		<label for="password"> Password: </label>
		 <input type="pass" name="password" id=password>

		 <br>

		 <input type="submit" name='submit' value="Submit" required>
	</form>



<p>

	<?php

if(isset($message)){   // means jodi $message er moddhe kono value thake.
	echo $message;    // jodi else e jay tar mane $message e value thakbe and seta print korbe.
}

	?>
	
</p>


</body>
</html>
