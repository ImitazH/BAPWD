<?php

//here, product is a class, $type is a property.
class product{
//	public $type  = "food";
	public $type;


}
?>
<br>


<?php

class product2{

	public $type;
	//	private $type;  // kaj korbe because we are accessing this property withing the product2 class and we are just returning the property.
	//	protected $type; // kaj korbe because we are accessing this property withing the product2 class and we are just returning the property.

	public  function setProductType($value){ // to assign a value in the parameter $type.
		$this -> type = $value;
	}

	public function getProductType(){
		return $this -> type;  // to get the value from the parameter $type.
	}
}

?>


<br>


<?php

class product3{

	public $type = " Imtiaz";
//	protected $type = " Imtiaz"; // eta te access korte parbena because it's protcetd. So it will show an error.
//	private $type = " Imtiaz"; // eta teo access korte parbena because it's private. So it will show an error.
}

?>


<br>

<?php

class product4{

	protected $type = "Durjoy"; // protected howate ei property te direct access kora jabena. private holeo same hobe.

	public function getProductType(){
		return $this -> type; // but ei jehetu same  obejct er vitorer amra property ke ei method er maddhome  return korechi tai ei method e access korle kaj korbe.
	}

}

?>


<br>


