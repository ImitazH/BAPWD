<?php

$name =$_POST['name'] ;

if(isset($name)){
	if( !empty($name)){
		$sentence= $name ." Woke up and made a PHP Tutorial ";
//		echo $name;
	}
	else {
		echo " Please enter e name"
;	}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> EMbedding PHP with HTML</title>
</head>
<body>

	<form action="php-html-embed2.php" method="post">
		Type Your Name: <br>
		<input type="text" name="name" value="<?php echo $name; ?>"> <br>
		<input type="submit" value="submit"> <br>
	</form>
	<textarea  cols="30" rows="10">
		<?php echo $sentence; ?>
	</textarea> <!--		  we are embedding PHP in this textarea. -->

</body>
</html>
