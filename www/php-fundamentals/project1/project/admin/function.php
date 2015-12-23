<?php


function user_logged_in(){

	if(isset($_SESSION['login_email'])){
		return true;
	}

	else {
		return false;
	}
}
