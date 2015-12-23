<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Section 7 22 Post</title>
</head>
<body>

	<form action="BAPWD-post.php" method="post">
		Please Enter your password : <br>
		<input type="password" name="password"><br>
		<input type="submit" value="submit">
	</form>
	
	<br>
	<br>
	
	<form action="BAPWD-post.php" method="post">
		
		Name:<input type="text" name="name"> <br>
		Email:<input type="mail" name="mail" ><br>
		<input type="submit" value="Submit">
		
	</form>


</body>
</html>

<?php

//	if(isset($_POST['password']) && !empty($_POST['password']) ) {
//		echo " submitted";
//	}
//                       //ekhane ekdom shurutei submit button press na korleo nicer msg ta echo hobe.
//	else {
//		echo "Put the password pleaes." ;
//	}



//	if(isset($_POST['password']) ) {
//		if ( !empty($_POST['password']) ){
//			echo " submitted";
//		}           // but ekhane shurute kono msg show korbena. Sudu jokhon  password empty thakbe tokhon e show korbe.
//		else
//		{
//			echo "Put the password pleae." ;
//		}
//
//	}



	$password = "password" ;

	if(isset($_POST['password']) ) {
		if ( !empty($_POST['password']) ){
			if( $_POST['password'] == $password){
				echo " Password Matched";
			}
			else {
				echo " Password does not match";
			}
		}
		else
		{
			echo "Put the password pleae." ;
		}

	}


?>


<!--===== For Form 2 ===== -->


<?php

//if( isset($_POST['name']) && isset($_POST['mail']) ){
if( isset($_POST['name'] , $_POST['mail']) ){
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	
	echo $name;
	echo "<br>";
	echo $mail;
}


?>