<?php

$dbconnect = mysqli_connect("localhost","root","","chictutorial");
// broswer e http://localhost/chictutorial/dbconnect.php dile jodi blank page ashe tar mane hocche databse er sathe thikmoto connect hoyeche. 
// jodi username, password and database name sobgulor jonno different error dekhaben. so error dekhe buja jabe kothay problem.


if( mysqli_connect_errno()){
	echo "connection failed : " . mysqli_connect_error() ;
	exit;
}

?>