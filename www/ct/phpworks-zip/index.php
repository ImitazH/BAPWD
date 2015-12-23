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









	<?php



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

	?>

	<script src="bootstrap.min.js"></script>

</body>
</html>
