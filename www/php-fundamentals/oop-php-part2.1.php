<?php



//$name ="Imtiaz";
//echo $name;
//
//
//$name="Hasan";
//echo $name;
//
//
//$name="Aneek";
//echo $name;

// means same variabel amader bar bar likhte hocche.
// jodi $name variable gulo age pore kori tahoole o output differnet asbe.
// same variabel name howar karone je keo amar code dekhe confused hobe.
//  dekhte ogochalo lageb jokhon code onek boro hobe and same variabel name bar bar use krobo.
// erokom aro onek reasn ache jar jonno amra OOP use korbo.


class person{
	
	public $name="Imtiaz";  // ekhane $name ,$username esob hocche property. ekhane amra property gulor value diye diyechi.
	
	public $username="Hasan";
	
	public $password =" 123456 ";
}

// Same $name property ke jokhon class er baire use korbo tokhon take bolbo variable.
// variabel guloke class er baire use korte hole class ke instantiate/ run  kore nite hobe.
// new er kaj hoche oi class ke run kora/

// new person(); // kichu asbena.

//print_r(new person()); // ekhane person ke object dhore niye tar value gulo show korbe. Means 'person' class ke jokhon instantiate/run korbo tokhon ta hoye jabe object.
// person Object ( [name] => Imtiaz [username] => Hasan [password] => 123456 )



// ekhon ei [new person(); ] ke amra ekta variabe er moddhe rakhte pari and setao hobe ekti object.
$information= new person();
//print_r($infomation); // etakeo amra print_ r er maddhome print korate parbo and ekhaneo etake object e bolbe.
//var_dump($information); // print_r er poriborte amra var_dump use korte jeta print_r er motoikaj kroe but sob kichu aro details e show kore.


//echo $information -> username;

$information -> name=" Durjoy"; // name er value class er moddhe ekbar declare roa hoyeche. Now amra seta change kore onnota dilam.
echo $information -> name;



// etake amra 2 line e na likhe 1 line e o likhte pari.
echo $information -> name="Aneek";





