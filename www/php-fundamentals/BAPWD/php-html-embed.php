<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Embedding PHP with HTML </title>
	</head>
	<body>

		<?php

			echo "<strong> This is Durjoy </storng>"

		?>

		<br>

		<strong>
			<?php
				echo " This is Durjoy"; //The same result.
				// Means, amra jemon php er vitor html likhte pari temni html er moddheo php likhte parbo.
			?>
		</strong>

		<br>

		<?php
			// THIS IS NOT THE BETTER WY TO DISPLAY HTML.
			$name = 'Imtiaz';

			if( $name == "Imtiaz"){
				echo " Hi " . $name;
			}

			else{
				echo "
					<h5>You are not Imitaz. Pleae type your name. <br> </h5>
					<input type=\"text\" name=\"name\">
					<input type=\"submit\" value=\"submit\">
				";
				// so amra evabe else er moddhe  \" diye php er moddhe html likhte pari or single '' diyeo likhte partam. But thete is a better way. That is, ending the php tag and then write the html and then again write php.
			}
		?>

		<br>

		<?php
			// This is the better way to Disaply HTML
			$name = 'Imti';

			if( $name == "Imtiaz"){
				echo " Hi " . $name;
			}

			else{
		?>  <!-- end of php -->

			<h5>You are not Imitaz. Pleae type your name. <br> </h5>
			<input type="text" name="name">
			<input type="submit" value="submit">

		<?php  // start of php again
			}
		?>

		<br>
		<br>

		<?php
			// Advance way to write conditional statements.
			$name = 'Imti';

			if( $name == "Imtiaz"):
				echo " Hi " . $name;


			else:
				echo " You are not imtiaz";

			endif;

		?>

		<br>

<!-- ARRAY -->
		<?php

			$name = array("Imtiaz","Hasan","Durjoy");
			var_dump($name);  //  this gives more information about array then print_r()
			echo "<br>";
			print_r($name);
			//echo '<pre>', print_r($name,true), '</pre>'; // jodi amra array guloke line by line dekhte cai.
			echo "<br>";

			$name1="Imtiaz";
			print_r($name1);
			echo "<br>";
			var_dump($name1);

		?>

		<br>

		<?php

			$persons = array(
				"Imtiaz" => array(
					"name" => "Imtiaz",
					"age" => 21,
					"height" =>5.7,
					"weight" =>56
				),
				"Hasan" => array(
					"name" => "Hasan",
					"age" => 22,
					"height" =>5.8,
					"weight" =>60
				),
				"Durjoy" => array(
					"name" => "Durjoy",
					"age" => 23,
					"height" =>5.10,
					"weight" =>68
				)
			);

				$persons["Anik"] =array(
					"name" => "Anik",
					"age" => 24,
					"height" =>5.3,
					"weight" =>50
				); // to add new array to the array $persons

			print_r($persons);
			var_dump($persons);
			echo "<pre>", print_r($persons,true), "</pre>";
			echo $persons['Durjoy']['name'] . "'s age is " . $persons['Durjoy']['age'];

		?>


		<br>
		<br>

		<?php

			$GLOBALS['persons'] = array(  // turning it to a global variable. This is also an array. Now there are 3 level array. GLOBALS[], array('imtiaz'), array('name)
				"Imtiaz" => array(
					"name" => "Imtiaz",
					"age" => 21,
					"height" =>5.7,
					"weight" =>56
				),
				"Hasan" => array(
					"name" => "Hasan",
					"age" => 22,
					"height" =>5.8,
					"weight" =>60
				),
				"Durjoy" => array(
					"name" => "Durjoy",
					"age" => 23,
					"height" =>5.10,
					"weight" =>68
				)
			);

			$persons["Anik"] = array (
				"name" => "Anik",
				"age" => 24,
				"height" =>5.3,
				"weight" =>50
			); // to add new array to the array $persons

			print_r($persons);
			var_dump($persons);
			echo "<pre>", print_r($persons,true), "</pre>";
			echo $persons['Durjoy']['name'] . "'s age is " . $persons['Durjoy']['age'];
			echo "<br>";
			echo $GLOBALS['persons']['Hasan']['name'];


			function level_data($level,$data){
				if(array_key_exists($level,$GLOBALS['level']) == true){
					return $GLOBALS['level'][$level][$data];
				}
				else {    // kivaeb kaj korche janina.  Section 7 26 , Arrays part 2.
					return false;
				}
			}
			echo "<pre>", print_r($GLOBALS,true), "</pre>";

		?>

	</body>
</html>


