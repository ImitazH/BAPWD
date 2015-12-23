<?php



class person{
	
	 
	public function login(){   // ekhane function hoche ei person object er method. 
		//echo " Login hocche .... ";   // ei method diye ekta kaj hocche ( login hocche). 
		return " login hocche ... ";
	}
	
	
}

$info = new person(); // instentiate korlam.

// $info -> login(); // funciton er valoe show korlam. Ekhane echo korini becasue function er vitorei echo kora ache. but vitore echo kora ucit na. 

echo $info -> login(); // ekhane amra echo korlam. 


