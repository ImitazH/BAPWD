<?php



session_start();


session_destroy();



header('location:part23-project.php'); // means ekhane session ta destroy hoye amader home page ( part23-project.php) e send kore dibe.

// so amra admin.php page theke jokhon logout link e lick korbo tokhon amra ei page e cole asbo. Ei page session destroy kore aamder home page e niye jabe.

	
