<!-- Video 17-->

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


//set addcategory session
$_SESSION['addcategory']['name'] =$_POST['name'];

?>


<h1> COnfrim Category name</h1>
<p> You entered: <?php echo $_POST['name']; ?></p>
<p><a href="index.php?page=entercategory"> Correct, Continue</a> | <a href="index.php?page=addcategory"> Oops, go back </a></p>
