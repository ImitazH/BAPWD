<?php


//if($_GET['language']){ // isset na kore jodi direct ei page e jete cai tahole error dekhabe.

if(isset($_GET['language'])){

	$language = $_GET['language'];  // ekhon r etar jonno kono error dekhabena.

	echo " You selected " . $language;
}

elseif(isset($_POST['language'])){

	$language = $_POST['language'];

	echo " You selected " . $language;
}

else {
	echo " No language was selected. ";
}



// With POST method.
//
//if(isset($_POST['language'])){
//
//	$language = $_POST['language'];
//
//	echo " You selected " . $language;
//}
//
//else {
//	echo " No language was selected. ";
//}


?>
