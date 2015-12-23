<?php


$something = " AMi valo achi ";  // this is an object



class person{
	
	public $username="Imtiaz";  // jokhon variable likhbo tokhon take public kore dite hobe.
	public $password;
}

// new person(); // ekhane amara person class ke instentiate korlam.

$something = new person(); // amra etake ekta variable er moddheo instentiate krote pari. ei variable means $something tai hocche object. 

//echo $something -> username;  // $username er value show korbe. 
//echo $something -> password;  // jehetu er value deya hoyni tai kono kichu show korbena. 


$something -> password = "123456";  // means , amra class er moddhe value na dile ekhane instentiate er poreo dite pari.
echo $something -> password ;  // value deyar por amra ekhane password ke echo koralam.


$something_else = new person();  /// ekhane amra arekta object $something_else  er moddhe person class ke instentiate korlam. 

$something_else -> password =" amitumise"; // then tar moddhe thaka variable 'password' er value dilam.
echo  $something_else -> password . " <br> ";  // password ke echo korlam.


// Note: OOP er maddhome ekta obejct er moddhe thaka variable ke amra bar abr use korte pari.  means, onekgulo object er jonno same class use korte parbo.






