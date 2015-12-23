

<?php

session_start();
//echo $_SESSION['fnum'];
//echo $_SESSION['snum'];


$result=$_SESSION['fnum']+$_SESSION['snum'];
//echo $result;



if(isset($_SESSION['button1'])){
//	$result=$_SESSION['fnum']+$_SESSION['snum'];
		echo $result;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> TRY  </title>
</head>
<body>

<!--	<input type="submit" value="submit" name="button1">-->

	<button type="button" name="button1">ADD</button>

<p>
	<?php
//
//		if(isset($result)){
//			echo $result;
//		}

	 ?>
</p>

</body>
</html>






