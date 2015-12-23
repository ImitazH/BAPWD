<?php

if( isset( $_GET['agree']) &&  isset($_GET['agree']) == 'true' ) { // ekhane amra amader niejeder value 'true' dilam. Kichu na dile value 'on' bosto.
	echo "Set - using GET array ";
}
elseif( isset( $_POST['agree']) &&  isset($_POST['agree']) == 'true' ) {
	echo "Set - using POST array";
}
else {
	echo "You must agree to the terms and conditons.";
}

?>
