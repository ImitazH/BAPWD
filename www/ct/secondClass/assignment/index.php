<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> CT PHP Second Assignment</title>
		<link rel="stylesheet" href="bootstrap.min.css">


		<style>



			.top-padding{
				margin-top: 100px;
/*				margin-bottom: 150px;*/
				margin-bottom: 50px;
			}

			.background-img{
/*				background: url(img/skulls.png);*/
			}


			.btn-hover:hover{
				background: #E9E9D1;
			}

			h2{
				margin-bottom: 50px;
			}

		</style>
	</head>
	<body>


		<div class="container-fluid background-img">
			<div class="row">
				<div class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 top-padding">

					<form class="form-inline" role="form" action="index.php" method="post">

						<h2> Check if a number is Prime : </h2>

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

// Prime Number or NOT = START
if(isset($_POST['submit']))
{
	$num=$_POST['number'];

	function number($num) {

		if($num > 1){
			$i = 2;

			if ($num == 2) {
				return " <b> 2 is a Prime number </b> ";
			}

			while ( $i < $num) {
				if ($num % $i == 0) {
					return " <b> $num is not a prime number </b> ";
				}
				$i++;
			}

			return " <b> $num is a prime number </b> ";
		}
		else{
			echo " <b> Prime Numbers are greater than 1 </b> ";
		}

	}

	echo number($num);
}

// END

		?>

		<div class="container-fluid background-img">
			<div class="row">
				<div class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 top-padding">

					<h2> Find the prime numbers within a range : </h2>

					<form class="form-inline" role="form" action="index.php" method="post">

						<div class="form-group">
							<label for="number"> Number:</label>
							<input type="text" class="form-control" name="number2" placeholder="Input a number">
						</div>

						<button type="submit" name="submit2" class="btn btn-default btn-hover"> <b>Submit </b> </button>

					</form>


				</div>
			</div>
		</div>


	<?php


// PRIME NUMBER within a range.

			if(isset($_POST['submit2']))
			{
				$num2=$_POST['number2'];

				function number($num1,$num2){

					print "<b> Prime Numbers within $num2 range are: </b>" ;
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
// END

	?>


		<div class="container-fluid background-img">
			<div class="row">
				<div class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 top-padding">

					<h2> Fibonacci Numbers within a range : </h2>

					<form class="form-inline" role="form" action="index.php" method="post">


						<div class="form-group">
							<label for="number"> Number:</label>
							<input type="text" class="form-control" name="number3" placeholder="Input a number">
						</div>

						<button type="submit" name="submit3" class="btn btn-default btn-hover"> <b>Submit </b> </button>

					</form>


				</div>
			</div>
		</div>



			<?php

			// Fibonacci Numbers within a range = START

			if(isset($_POST['submit3']))
			{
				$num=$_POST['number3'];

				echo " <b> Fibonacci Numbers within $num range are : <b>  " ;

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


			// END

			?>


		<div class="container-fluid background-img">
			<div class="row">
				<div class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 top-padding">

					<h2> First n number Fibonacci number : </h2>

					<form class="form-inline" role="form" action="index.php" method="post">


						<div class="form-group">
							<label for="number"> Number:</label>
							<input type="text" class="form-control" name="number4" placeholder="Input a number">
						</div>

						<button type="submit" name="submit4" class="btn btn-default btn-hover"> <b>Submit </b> </button>

					</form>


				</div>
			</div>
		</div>

		<?php


// First n number Fibonacci number

if(isset($_POST['submit4']))
{
	$num=$_POST['number4'];

	echo " <b>  Fibonacci Numbers are : <b>  " ;

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


		?>



		<div class="container-fluid background-img">
			<div class="row">
				<div class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 top-padding">

					<h2> Factorial of a number : </h2>

					<form class="form-inline" role="form" action="index.php" method="post">


						<div class="form-group">
							<label for="number"> Number:</label>
							<input type="text" class="form-control" name="number5" placeholder="Input a number">
						</div>

						<button type="submit" name="submit5" class="btn btn-default btn-hover"> <b>Submit </b> </button>

					</form>


				</div>
			</div>
		</div>



		<?php

			// Factorial of a number


			if(isset($_POST['submit5']))
			{
				$num=$_POST['number5'];


				$factorial = 1;

				for ($x=$num; $x>=1; $x--) {

					$factorial = $factorial * $x;
				}
				echo " <b> Factorial of $num = $factorial </b> ";

			}

	?>

		<script src="bootstrap.min.js"></script>

	</body>
</html>
