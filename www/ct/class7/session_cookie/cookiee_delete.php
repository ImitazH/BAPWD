<?php

$name="user";
$value="";
setcookie($name,$value,  time()-3600,"/");

echo 'Cookie deleted.';

?>

