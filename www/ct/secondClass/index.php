<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> </title>
</head>
<body>



	<div class="container-fluid background-img">
		<div class="row">
			<div class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 top-padding">

				<form class="form-inline" role="form" action="index.php" method="post">

					<div class="form-group">
						<label for="number"> Number:</label>
						<input type="text" class="form-control" name="number" placeholder="Input a number">
					</div>

					<button type="submit" name="submit" class="btn btn-default btn-hover"> <b>Submit </b> </button>

				</form>


			</div>
		</div>
	</div>



	<?php

/* ===========
// for prime number range


if(isset($_POST['submit']))
{
	$num2=$_POST['number'];

	function number($num1,$num2){

		print "<b> Prime Numbers are: </b>" ;
		for($i=$num1;$i<=$num2;$i++){  //numbers to be checked as prime

			$counter = 0;
			for($j=1;$j<=$i;$j++){ //all divisible factors


				if($i % $j==0){

					$counter++;
				}
			}

			//prime requires 2 rules ( divisible by 1 and divisible by itself)

			if($counter==2){
				echo  $i . " , ";
			}
		}
	}

	number(1,$num2);

}

*/



/* ===================

// Prime number of not.

if(isset($_POST['submit']))
{
	$num=$_POST['number'];

	function number($num) {

		if($num > 1){
			$i = 2;

			if ($num == 2) {
				return " 2 is a Prime number ";
			}

			while ( $i < $num) {
				if ($num % $i == 0) {
					return " $num Not a prime number ";
				}
				$i++;
			}

			return "$num is a prime number";
		}
		else{
			echo " Prime Numbers are greater than 1 ";
		}

	}

	echo number($num);
}


*/



/*  =============


// Fibonacci Numbers within a range

if(isset($_POST['submit']))
{
	$num=$_POST['number'];

	echo " <b> Fibonacci Numbers are : <b>  " ;

	function number($num) {

		$x = 0;
		$y = 1;
		$z=0;
		while($z < $num) {

			$z = $x + $y;
			echo($z." , ");
			$x = $y;
			$y = $z;
		}

}

	echo  number($num);

}

*/


/*===========================

// First n number Fibonacci number

if(isset($_POST['submit']))
{
	$num=$_POST['number'];

	echo " <b> Fibonacci Numbers are : <b>  " ;

	function number($num) {


		$x = 0;
		$y = 1;

		for($i=0;$i<=$num;$i++)
		{

			$z = $x + $y;
			echo $z ." , ";

			$x=$y;
			$y=$z;

		}


	}

	echo  number($num);

}

*/

/* =====================

// Factorial of a number


if(isset($_POST['submit']))
{
	$num=$_POST['number'];


	$factorial = 1;

	for ($x=$num; $x>=1; $x--) {

		$factorial = $factorial * $x;
	}
	echo " <b> Factorial of $num = $factorial </b> ";

}


*/

	?>






</body>
</html>
