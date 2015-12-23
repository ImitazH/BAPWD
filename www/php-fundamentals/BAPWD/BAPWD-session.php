<?php

session_start();

echo $_SESSION['name'] = 'Alex';  // ekhane session e name er jonno 'ALex' value set korlam. EKhon amra je kono page a session start kore ei $_SESSION['name'] ke vall korlei tar value 'Alex pabo'.
// TO see in practical, go to => BAPWD-session2.php

// Amra BAPWD-session.php e gele sesion e name er value set hoy. Tai er por BAPWD-sessione.php e gele name er valeu dekhte pai. But er por browser kete diye direct BAPWD-session2.php e gele error dekhbo because tokhon session set hyoni.


//unset ($_SESSION['name']); //will unset a particular session. unser or destory ei page e rekhe amra BAPWD-session2.php page e gele error dekhbo. Because session destory hoye jawate session thakbena.

session_destroy();  // session destroy  will destroy the whole session.

?>
