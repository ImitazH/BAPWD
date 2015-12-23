<?php

session_start();
//echo $_SESSION['fnum'];
//echo $_SESSION['snum'];
$result=$_SESSION['fnum']+$_SESSION['snum'];
echo $result;


?>