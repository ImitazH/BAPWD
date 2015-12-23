<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>


<!--	<form action="index.php" method="post">-->


	<form action="" method="post">
		Give a Number <input type="text" name="number" />
		<input type="submit" name="submit" Value="Submit"/>
	</form>



	<?php /*
		$i;

		for($i=0;$i<=100;$i++)
		{
			echo "$i <br />";
			if($i==100)
			{
				echo "Thank You";
			}
		}*/

	?>
	<br />
	<br />
	<?php
	/*
		$a=3;
		$b=5;
		echo "Addition Is " ;
		echo $a + $b;
		*/
	?>

	<br />


	<?php

		/* if(isset($_POST['submit']))
		{
			$number=$_POST['number'];
			if ($number%2==0)
			{
				echo "EVEN";
			}
			else if ($number%2==0) {
				echo "ODD";
			}

		}
		*/

	?>

	<?php

	/*	if(isset($_POST['submit']))
		{
			$n=$_POST['number'];

			if($n>=80 and $n<=100)
			{

				echo"A+";
			}

			elseif($n>=70 and $n<=79)
			{

				echo"A";
			}
			elseif($n>=60 and $n<=69)
			{

				echo"A-";
			}

			elseif($n>=50 and $n<=59)
			{

				echo"B";
			}
			elseif($n>=0 and $n<=49)
			{

				echo"Fail";
			}
			else{
				echo "Invalid Input";
			}


		} */
	?>

	<?php

/*
		if(isset($_POST['submit']))
		{
			$n=$_POST['number'];
			switch ($n){
				case 1:
					echo "Switch On";
					break;
				case 2:
					echo "Switch Off";
					break;

				default:
					echo "Switch Nosto";
			}

		}

*/

	?>





<?php



if(isset($_POST['submit']))
{
	$num2=$_POST['number'];

	 function number($num1,$num2){
		 echo   "Even numbers : " ;

		for ($s = $num1; $s <= $num2; $s++){
			if($s % 2 == 0){
				echo  $s . " , ";
			}

		}

		 echo  "<br>" . " Odd numbers : " ;

		 for ($s = $num1; $s <= $num2; $s++){
			 if($s % 2 != 0){
				 echo  $s . " , ";
			 }

		 }

	}

	echo number(0,$num2);
}





?>
</body>
</html>
