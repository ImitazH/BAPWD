<?php 



session_start();


if ( isset($_SESSION['username']) ) {
	echo "Hello " . $_SESSION['username'];

}else {
	header('Location: index.php');
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
</head>
<body>
	

	<a href="logout.php">Logout</a>

</body>
</html>