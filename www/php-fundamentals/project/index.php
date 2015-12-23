<?php 



	include('members.php');

	session_start();

	define('USERNAME', 'sujan');
	define('PASSWORD', '123456');

	if ( isset($_POST['form1']) ) {

		$username = $_POST['username'];
		$password = $_POST['password'];


		if($username === USERNAME && $password === PASSWORD ){

			$_SESSION['username'] = $username;

			header('Location: admin.php');

		}
		else {
			$message = "Invalid Login Credentials!";
		}

	}
	
	

	if( user_logged_in() ){
		header("Location: admin.php");
	}
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="" method="post">
		<label for="username">Username: </label>
		<input type="text" id="username" name="username" required="required">
		<br>
		<label for="password">Password: </label>
		<input type="password" id="password" name="password" required="required">
		<br>
		<input type="submit" name="form1" value="Login">
	</form>

	<p>
		<?php 
			if( isset($message) ){
				echo $message;
			}
		?>
	</p>

</body>
</html>