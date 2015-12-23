<?php
// Ei video gulo hoyechilo 2009 e. Video te dekehci.

//echo date("d m y");
echo date("d-m-y");

echo "<br>";

echo date("D M Y");

?>

<br>
<!-- for time -->


<?php
/// h = 12 hour format
//H = 24 hours format
echo date("h:i:s");

echo "<br>";

echo date("H:i:s");  // does not show the correct time.

?>

<br>
<br>
<br>
<!-- for future and past time -->

<?php

$offset = strtotime("+1 weeks"); // it can be, weeks/ hours/months/minutes/seconds
echo date("d:m:y",$offset);

echo "<br>";

$offset = strtotime("+3 hours"); // it can be, weeks/ hours/months/minutes/seconds
echo date("h:i:s",$offset);


?>


<br>

<?php


$date = date("d-m-y");
$time = date("h:m:s");

echo " The time is " . $time . " and the date is " . $date;


?>


<br>

<?php


$offset =strtotime("+1 weeks 1 hours");

$date = date("d-m-y",$offset); // current day er sathe 1 week add hobe.
$time = date("h:m:s",$offset); // curent time er sathe 1 hour add hobe.

echo " The time is " . $time . " and the date is " . $date;


?>

<br>
<br>

<?php

// COUNT DOWN Script.

echo "<meta http-equiv='refresh' content='1' "; // every 1 second a page refresh hobe.

$currentTIme = date("h:i:s");
$goalTime = "12:48:30";

echo "
	<P>
		Current Time : $currentTIme <br>
		Goal Time : $goalTime
	</p>
";


if($currentTIme >= $goalTime){
	echo " Goal has been reached";
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<!-Local Time Difference widget - HTML code - localtimes.info --><div style="border-radius: 10px; overflow: hidden;padding:0px 3px;padding-top:3px; width:190px; margin:auto; align:center; text-align:center;background:black"><iframe src="http://localtimes.info/timediff.php?lcid=USCA0638,USNY0996,BRXX0201,UKXX0085,FRXX0076,RSXX0063,INXX0096,SNXX0006,JAXX0085,ASXX0112&cp=FFFFFF,000000" seamless frameborder=0 width="190" height="385" style="background:white"></iframe><a target="_top" href="http://localtimes.info/difference/?lcid=USCA0638,USNY0996,BRXX0201,UKXX0085,FRXX0076,RSXX0063,INXX0096,SNXX0006,JAXX0085,ASXX0112&h=UKXX0085" title="World Time Difference & Time Converter"><span style="font-size:10px; font-family:verdana;geneva;line-height:18px;color:white">World Time Difference</span></a></div><!-end of code-->

	<iframe src="http://free.timeanddate.com/clock/i4zjoioe/n73/szw110/szh110/hocfff/hbw0/hfc000/cf100/hgr0/fav0/fiv0/mqc0f0/mqs2/mql4/mqw4/mqd86/mhc0f0/mhs2/mhl4/mhw4/mhd86/mmc0f0/mml2/mmd88/hhc00f/hhs3/hhl50/hhw11/hmc00f/hms3/hml80/hmw11/hsc00f/hsl90/hsw6" frameborder="0" width="110" height="110"></iframe>
	<!--	Source: http://www.timeanddate.com/clocks/free.html -->


</body>
</html>
