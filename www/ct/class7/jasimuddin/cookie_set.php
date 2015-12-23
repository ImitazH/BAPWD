<?php
$name="user";
$value="Person name is Mr.x";
setcookie($name,$value,  time()+(3600*24),"/");

echo 'Cookie set complete.';


?>

