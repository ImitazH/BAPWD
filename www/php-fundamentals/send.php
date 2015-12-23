<?php

$sub = $_POST['subject'];
$msg = $_POST['message'];


mail("hasan.durjoy@gmail.com", $sub,$msg);

// Jokhon amra contact.php theke mail send korbo tokhon send.php
//setake receive korbe and mail() function er maddhome amader mail e send korbe.
// header mane hocche refirect kora / onno kothao send kora

header ('lcoation:contact.php');

// means ekhane jeta hoccche je - contact.php te form fill up korar por send.php segulo
// receive korbe and header function er maddhome amra abar setake contact.php te redirect kore dicchi.

// SUJON VAI ER MAIL CONFIUGRE KORA HOLE AMADER FORM VALIDATION KORE DEKHANO HOBE.

