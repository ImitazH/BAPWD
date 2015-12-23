<?php


if(isset($_REQUEST['subscribe'])){
	if(isset($_REQIEST['email']) ){
		//if(isset($_REQIEST['email']) && $_REQUEST['email'] !== NULL ){   // added more condition. Evabe amra amader nijeder moto conditoon add korte parbo.

		$email = $_REQUEST['email'];

		mail("hasan.durjoy@gmail.com", 'someone sibscribed' , $email , " From: samsu@gmail.com" );
		// mail (to, subject, message(ekhane subscribe er jonno je message dibe setai message hisebe jabe.) , From ( na dilei mail jebe. Debo jodi dekhate cai kon mail theke gieyche.))


		//echo " The mail has been sent ";   // eta dhow korche na amar. keno janina. Video ta show kroechilo.

		header (" Location:part22-index.php?thankyou") ;  // etao kaj korchena. karon janina.
	}
}



