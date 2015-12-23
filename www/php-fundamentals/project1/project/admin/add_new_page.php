<?php

require_once("connection.php");




if(isset($_POST['page_publish'])){

	$title = $_POST['page_title'];
	$content = $_POST['page_content'];

	$query = $connection -> $query(" INSERT INTO subtle ('name','content') VALUES ($title,$content)");

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new page </title>
</head>
<body>

	<h1> Add New page </h1>

	<input type="text" name="page_title" placeholder="Page title">

	<form action="" method="post" >

		<textarea name="page_content" id="" class="tinymce" cols="30" rows="10"></textarea>

	</form>

	<input type="submit" name="page_publish " value="Publish">


<script src="tinymce/tinymce.min.js"></script>
<script>
	tinymce.init({
		selector: ".tinymce",
		resize: "both"
	});

</script>

</body>
</html>
