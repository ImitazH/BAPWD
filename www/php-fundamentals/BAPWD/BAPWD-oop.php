<?php

//require_once 'classes/product.php';  // jodi seta classes namer kono folder er moddhe thakto.

require_once 'product-oop.php';

$food = new product();
//echo $food -> type;
$food -> type = "Food"; // we ca set value this way as well. But this is not a good practice.
echo $food -> type;


?>



<br>


<?php

require_once 'product-oop.php';

$food2 = new product2();
$food2 -> setProductType("Not Food"); // means, amra $type parameter er moddhe "Food" valeu rakhlam.
//echo $food2 -> type;
echo $food2 -> getProductType();

?>

<br>

<?php

require_once('product-oop.php');

$name = new product3();

echo $name -> type;


?>


<br>


<?php

require_once 'product-oop.php';

$name = new product4();

//echo $name -> type;  // kaj korbena.
echo $name -> getProductType(); // kaj korbe.


?>

<br>
<?php

require_once 'calculator-oop.php';

$calc = new calculator();
$calc -> add(5+10);
$calc -> add(20);
$calc -> subtract(5); // output will be : 35-5 = 30

echo $calc -> getTotal();

?>

