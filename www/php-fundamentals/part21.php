<?php

//www.website.com/event.php?id=44  // Onek site e dekhte pawa jay. eguloke bole query string. Eta korar onek process ache. Mianly GET diye kra hoy.

//SuperGlobals
// Onekgulo SUperGlobals ache.Jemon $_GET,$_POST, $_SERVER< $_GLOBALS, $_COOKIES, $_SESSION, $_FILE etc.


 echo $_GET['name'];
// uporer line likhe jokho broswer e http://localhost/php-fundamentals/part21.php?search=durjoy likhbo tokhon durjoy show korbe.

echo "<br>";


echo " My name is " . $_GET['profession'];

// jotogulo $_GET thakbe totogulor jonnoi value dite hobe & diye por por .  na hole error asbe.
// http://localhost/php-fundamentals/part21.php?name=hasan&profession=developer


echo "<br>";

echo " My name is ". $_GET['nam'] . " and my prfession is " . $_GET['pesha'];
// ei line er por sob guloke eksathe show koranor jonn browser e nicer line er moto kore likhte hobe..
// http://localhost/php-fundamentals/part21.php?name=hasan&profession=developer&nam=Imtiaz&pesha=engineer



//isset = mane hocche SET kora hoyeche.
// if er moddhe isset mane hocche = jodi set kora thake.

echo "<br>";

if(isset ($_GET['location'])){
  echo $_GET['location'];

}

else {
 echo ' Location deya hoyni - eta isset diye kora hoyeche.';
}


echo "<br>";



if ( isset($_GET['page']) && $_GET['page']== 'about' ) {  // isiset take age likhte hobe. Pore likhle error hobe.

echo " <b> THis is our about page </b> ";

}

else if ( isset($_GET['page'] ) && $_GET['page']== 'contact'  ){

 echo " <b> THis is our contact page </b> ";

}

else {
  echo " <b> This is our home page. <b>";
}


?>


