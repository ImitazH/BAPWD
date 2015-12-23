<!-- ======= GET , POST and REQUEST Method ======= -->
<?php

if($_GET["name"] || $_GET["age"]){

	echo " Welcome " . $_GET["name"] . "<br>";
	echo " You age is " . $_GET["age"] ;
}

else {
	echo " GET=> You did not put either name or age. ";
}


?>

<br>

<?php

if( $_POST["name"] || $_POST["age"] )
{
	if (preg_match("/[^A-Za-z'-]/",$_POST['name'] ))  // means, name jodi alphabet chara onno kichu hoy tahole die hoye jabe.
	{
		die (" POST => invalid name and name should be alpha");
	}
	echo "Welcome ". $_POST['name']. "<br />";
	echo "You are ". $_POST['age']. " years old.";

	exit();
}


?>

<br>


<?php
//html e amra method e get/post jai likhina knao, se onujai kaj korbe jodi amra $_REQUEST variable use kori.


//if( $_REQUEST["name"] || $_REQUEST["age"] )
//{
//	echo "Welcome ". $_REQUEST['name']. "<br />";
//	echo "You are ". $_REQUEST['age']. " years old.";
//	exit();
//}


?>


