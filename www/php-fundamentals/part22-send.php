<?php

/*
$name =  $_REQUEST['name'];   // evabe likhle jodi eko dirct part22-send.php fiel ta browse kore tahole kono value pabene bole error dekhabe.
$email =  $_REQUEST['mail'];
$contact =  $_REQUEST['contact'];

*/

if (isset($_REQUEST['name'])){
	$name =  $_REQUEST['name']; // tai amra evabe likhbo. MEans johi sudu part22-index.php file e keo value dey taholei ei varibale ta kaj korbe. Na hole variable add hobena.
}


if (isset($_REQUEST['name'])){
	$email =  $_REQUEST['mail'];
}

if (isset($_REQUEST['name'])){
	$contact =  $_REQUEST['contact'];
}


/*
echo " Name: ". $name. "<br>";
echo " Email: " . $email. "<br>";
echo "Contact:" . $contact. "<br>";
*/



/*

if (isset ($_REQUEST['form1'])) {  // jodi amader same page e 2ta form thake sejonno conidtion dilam.
	// means, jodi sudu ei form(form1) submit kora hoy tokhon e ei value gulo submit hobe. jodi onno kono form submit kori tahole segulo submit hobe.
	// isset mane hocche set hoyeche / ekhetre SUBMIT hoyeche.
echo " Name: ". $name. "<br>";
echo " Email: " . $email. "<br>";
echo "Contact:" . $contact. "<br>";
}


else if (isset($_REQUEST['form2'])){

	if(isset($_REQUEST['school'])){
		echo "school :" . $_REQUEST['school'];
	}
}

*/

// ekhan amra jodi cai je input  e je value gulo debo segulo amader mail e jak tahole ja korte hobe.

if(isset ($_REQUEST['form1'])){

	mail( $name , $email , $contact); // part22-index.php te form1 e value gulo ekhan theke mail e send koredibe.

	// header (" Location: index.php") ;  // mail e send korar por abar index.php te cole jabe.

	echo " The mail has been sent "; // Mail send korar por ei msg ta show korbe.
	 // He has shown 3 ways to display these message. We will wacth the video from 30min to watch all 3 ways.

}

