<?php

session_start();

// check to see if the uses is logged in. If not, redirect to admin page
if(!isset($_SESSION['admin'])){
	header("Location:index.php?page=admin");
}

// check to see is user has submitted the add category form
if(!isset($_POST['submit'])){
	header("Location:index.php?page=admin");
}

// enter new category
$newcategory_sql ="INSERT INTO category (name) VALUES ('".mysqli_real_escape_string($dbconnect, $_POST['name'])."')";
$newcategory_qry = mysqli_query($dbconenct, $newcategory_sql);


?>


<p>  new cateogry has been enterred </p>
<p><a href="index.php?page=admin"> Return to admin panel </a></p>


<!--***************************************-->
<!-- Kaj korchena. Ekta error show kore. Onek try koreo khuje pelam na.-->
<!--***************************************-->
