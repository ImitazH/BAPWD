<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> CT PHP First Assignment</title>
		<link rel="stylesheet" href="bootstrap.min.css">


		<style>

			.top-padding{
				margin-top: 150px;
				margin-bottom: 150px;
			}

			.background-img{
				background: url(img/skulls.png);
			}


			.btn-hover:hover{
				background: #E9E9D1;
			}

		</style>
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


<!--

<div class="container">

<button type="button" class="btn btn-info" name="ascending"> Ascending </button>
<button type="button" class="btn btn-success"> Descending </button>



</div>
-->



		<?php


/*

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

/*

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



*/



/*

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

	/*

if(isset($_POST['submit']))
{
	$num2=$_POST['number'];

	function number($num1,$num2){
		echo   " <b> Even numbers  : </b> " ;

		for ($s = $num1; $s <= $num2; $s++){
			if($s % 2 == 0){
				echo  $s . " , ";
			}

		}

		echo  "<br>" . "<b> Odd numbers : </b>" ;

		for ($s = $num1; $s <= $num2; $s++){
			if($s % 2 != 0){
				echo  $s . " , ";
			}

		}

	}

	echo number(1,$num2);
}

*/

/*
// for sorting

if(isset($_POST['submit']))
{

	$numbers = $_POST['number[]'];
//$numbers = array(4, 6, 2, 22, 11, 10,20,30,40,60);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
	echo $numbers[$x];
	echo "<br>";
}

}

*/





		?>

		<script src="bootstrap.min.js"></script>

	</body>
</html>

