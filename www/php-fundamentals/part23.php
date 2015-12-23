<?php


session_start();


//$_SESSION=array(
//	'username' => ' Durjoy';  // eta ja nicer tao ta.
//)
//

$_SESSION['username'] ='Durjoy';  // uporer ta and eta same. 2 vabei lekha jay.

echo $_SESSION['username'] .  " <br> ";

echo " My name is " . $_SESSION['username'];




