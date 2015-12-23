<!DOCTYPE html>
<html lang="en">
  
  <!-- Head start -->
  <head>
  
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP practice</title>
	
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- General CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.custom.css" />
	
	<!-- Font-Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<!-- UIKit -->
	<link rel="stylesheet" href="uikit.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style type="text/css">
		body {margin-top:50px;}
	</style>
	
  </head> <!-- Head End -->
  
  <body>
	<div class="container">
		
		<form class="form-inline" action="HT_1.php" method="post">
			Give a Number <input type="text" name="number" class="form-control"/>
			<button name="submit" Value="Submit" class="btn btn-info">Submit</button>
		</form> 
		
		<h4>
			Even Number: <br />
			
			<?php
				if(isset($_POST["submit"])){
					$n = $_POST["number"];
					for($i=1; $i<=$n; $i++ ){
					if($i%2 == 0){
						echo "$i, ";
					}	
				}
				}
			?>
		
		</h4>
			
		
		<h4>
			Odd Number: <br />
			<?php
				if(isset($_POST["submit"])){
					$n = $_POST['number'];
					for($i=1; $i<=$n; $i++ ){
					if($i%2 != 0){
						echo "$i, ";
					}	
				}
				}
			
				
			?>
		
		</h4> 
	
	
	
	
	</div>
  
	
	
    
	<!-- jQuery -->
    <script src="js/jquery.min.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="uikit.min.js"></script>
  </body>
</html>