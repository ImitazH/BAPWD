<?php


// basic of object oriented PHP
// Word e ja kichu ache ja niye kaj kra jabe tar sobi obejct.
// boro porisore kaj korar jonno amader clss banate hobe
// puro peojct e onekcgulo varibale/property chroano thake hijibiji lagbe. Tai amra ekta class er vitor sobguloke eksathe likhe just seguloke  ber kore niye asbo


class durjoy{


	public function __construct (){
		echo " this is default text" . "<br>";  // jodi amra sudu $imtiaz object ke call koeri tahole construct method er moddhe ja thakbe ta print korbe.
	}







	public $hand = 2;  // variable but now name is property
	public $pa = 2; // variable


	public function teaching(){  // function but now name is method.
		echo " I can train. ";
	}

	// but eguloke ar function/ variable bola jabena.
	// varibale guloke bola hobe property.
	// amar ja ache ta hocche prpperty. Jemon amar 2ta hat ahce-> ta ekta property. 2 ta pa, 1 ta nak, 2 ta kan egulo sobi property
	// R ami je kaj korte pari ta method. jemon ami hatte pari - ta ekta method. khete pari, shunte pari - egulo method.
	// method gulor jonno amra banano function r property gulor jonno banabo variable.
	// property and method er age public likhte hobe. erokoom 4 ta lekha jay -> public, private, protected, static,namespace etc




}

$imtiaz = new durjoy(); // ekhane amra varible er moddhe class take execute korlam. Ekhon ei variable tai ekta object. Etake bole instance and eta korake bole instentiate kora.


echo $imtiaz->hand;  // object_name -> property_name

echo " <br> ";

//echo $durjoy -> teaching(); // ekhane jehetu method er moddhe amra already ekbar echo orechi tai ekhane echo korar fole double echo hye geche. tai kaj  korleo
//eta ek dhoroner error.

$imtiaz -> teaching(); // Tai ekhane echo likhbo na. Jodi method er vitore retun korta tahole ekhane echo korte hoto.

//$imitaz;  // jodi amra sudu $imtiaz object ke call kori tahole construct method er moddhe ja thakbe ta print korbe. [ ei line lekhar dorkar nai. Varible er moddhe instentiate krolei kaj korbe]


echo " <br> ";

class aneek{

	public function __construct($name, $place){
		printf(" My name is %s and I live in %s", $name, $place);   // evabeo amra construcut funciton ke likhte pari
	}
}

$imtiaz = new aneek(" Durjoy", " Dhaka");


echo " <br> ";


class hasan{

	public $hand = 20;
	public $leg =2;

	public function haat(){
		return $this -> hand;
	}
}

$lastone = new hasan();

echo $lastone ->haat();

