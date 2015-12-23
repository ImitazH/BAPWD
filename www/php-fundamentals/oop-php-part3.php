<?php


class person{
	
	
	private $name=" Imtiaz";
	public $location ="Bashundhara";
	
	
	// public $naame = $name; // private propert ke class er moddhei onno ekta public property er moddhe rakhlam dekhar jonno kaj kroena kina.
	
	public function naam(){
		
		return $this -> name; // private property te access korte hole amader method er maddhome er access korte hobe.
	}
	
	
}

$human = new person();

// echo $human -> name; // kaj korbena. Because $name hocche private property and etake class er baire theke acceess kroa jabena.

//echo $human -> naame; // kaj korbena. parse systex show kore.


echo $human -> naam();  // Eta kaj kore. amra method er maddhome private property $name er value show korechi.

