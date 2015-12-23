<?php 

session_start();

include('members.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit a page</title>
</head>
<body>
	
	<?php if(user_logged_in()) : ?>
		<p>welcome to edit page.. now please edit</p>
	
	<?php else : ?>
		<p>login na kore ashlen kno? jan gia age login koren <a href="index.php">login</a></p>
	<?php endif; ?>

</body>
</html>