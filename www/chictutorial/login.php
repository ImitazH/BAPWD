<h1> Login </h1>


<form method="post" name="login" action="index.php?page=admin">

	<p> Username: <input type="text" name="username"> </p>
	<p> Password: <input type="passwowrd" name="password" > </p>

	<?php

if(isset($_POST['login']) && !isset($_SESSION['admin'])){
	?>
	<p class="error"> Incorrect username or password </p>
	<?php
}

	?>

	<input type="submit" name="login" value="submit" maxlength="30">

</form>


