<?php


session_start();


//echo $_SESSION['username']; // part23.php te je value ache seta browser memory te set hoye geche sesison hisebe. So amra ei page thekeo same
                             // variable call korle oi variable er out dekhacche. Karon ekhono session e se varibale er value sae ache.
         // Amra browser kete diye jodi abar ei page(part23.1.php) te  jai tahole r value dekhabe na. Error dekhane.
        // IE value dekhar jonno abar 1st e part23.php te jete hobe. Tate kore session start hobe. Then part23.1.php kaj korbe.


if( isset($_SESSION['username'])){
        echo $_SESSION['username'];
}

else{
        echo " Session alrady destroyed" ;
}
