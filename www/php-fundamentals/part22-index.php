<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Part 22  from 16min</title>
</head>
<body>



<!--
	<form action="part22-send.php" method="post">

		<label for="name"> Name: </label>
		<input type="text" name="name" id="name" placeholder="Enter your name"> <br>
		<label for="email"> Email: </label>
		<input type="text" name="mail" id="mail" placeholder=" Enter your mail"><br>
		<label for="contact"> Contact: </label>
		<input type="text" name="contact" id="contact" placeholder=" your contact no."><br>

		<input type="submit" value="submit" name="form1">
	</form>


	<form action="part22-send.php" method="post">

		<label for="name"> Name:</label>
		<input type="text" name="school">

		<input type="submit" name="form2" value="Submit">
	</form>

 -->



	<form action="part22-mail.php" method="post">

	   <label for="email"> Subscribe by yout email address: </label> <br>
	   <input type="text" name="email" id="email" placeholder="Email Address"><br>

	   <input type="submit" value="Submit" name="subscribe">
   </form>

<!--
   // amra ekahen dekhbo je
   // Subscrie korle amar deya email e giye joma hobe
   //then dekhano hobe je, ekta file e giye joma hobe.
-->

<?php



if(isset($_REQUEST['thankyou'])){

echo " Thankyou for subscription" ;   // kaj korhena. kano janina.

}

?>

</body>
</html>
