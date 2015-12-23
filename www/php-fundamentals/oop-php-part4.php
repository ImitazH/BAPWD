<?php



class person{


	public $username;
	public $password;

	const MINCHAR=10;


	public function set_password($digit){  // ekhane digit hocche parameter

//		return $this -> password = " 123456";
		// $this -> password = " 123456";


		if ( strlen($digit)< self::MINCHAR){  //Jokhon constant use korbo tokhon this use na kore self:: use  korte hobe.

			//echo " Password requires minimum ". self::MINCHAR . " Characters" ;
			throw new Exception(" Password requires minimum ". self::MINCHAR . " Characters") ;
		}

		else{
			//echo " Successful ";


			//$this -> password = $digit;
			//$this -> password = md5($digit); // jodi amra cai password # hoye jak tahole md5 format likhbo.same line ke nicer moto koreo lekha jay.
			$this -> password = hash('md5',$digit);//uporer line and ei line same. md5 er place sha256 likhle arekta format hobe.



			//echo $digit . " Password is set successfully ";
			echo " Password is set successfully ";
		}


	}


}

$durjoy= new person();


//echo $durjoy -> set_password(); // function er vitore return kore ekane echo korle kaj kore.


 //$durjoy -> set_password();  // $durjoy object er vitor theke set_password() ke ber kore niye aslam.
// echo $durjoy -> password;  //etao same kaj kore. uporer line and ei line eksathe.


$durjoy -> set_password("1234567890a");  // jehetu class er vitore function er paramter($digit) deya ache so ekhaen obossoi argument thakte hobe.




 var_dump($durjoy);  // instentiate korar por se class er vitore ki ki ache ta dekhar jonno var_dump() use korte hoy.


