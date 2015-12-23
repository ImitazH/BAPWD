<!-- Username: admin , password: admin -->
<?php

session_start();

// check to see if user is logging out.
if(isset($_GET['action'])){
	if($_GET['action'] == "logout"){
		unset($_SESSION['admin']);
	}
}




// if login form has been submitted, check if username and password matrhed.
if(isset($_POST['login'])){

//	$login_sql="SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".sha1($_POST['password'])."'";
	$login_sql="SELECT * FROM user WHERE username='".$_POST['username']."' AND password='". $_POST['password']."'";
	//sha1 type er password database e save hocchena. Last part kete jay. Keno janina. Tai password 'admin' e rakhte hoyeche.
	if($login_query = mysqli_query($dbconnect, $login_sql)){
		$login_rs=mysqli_fetch_assoc($login_query);
		$_SESSION['admin']=$login_rs['username'];
	}
}


if(isset($_SESSION['admin'])){
	include('cpanel.php');
}
else{
	include('login.php');
}

?>
