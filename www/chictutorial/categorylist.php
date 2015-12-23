<?php

$cat_sql =" SELECT * FROM category "; // This is the query that we will run. cat = category
$cat_query =mysqli_query($dbconnect,$cat_sql); // Now we are running the query into table. 
$cat_rs =mysqli_fetch_assoc($cat_query);  // rs= resutl


do{

?>
<a href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryID']; ?>"><?php echo $cat_rs['name'];  ?></a>


<!--				//echo $cat_rs['name'] . " | ";    // nice php close kore | na diye amra evabeo likhte partam.-->

<!--			?>  | -->
<!-- php sesh kore ektu fak diye | deya hoyeche. and closeing } er agei abar php start hoyeche.Ete kore loop ta thik ache. -->
<?php

} 
while( 
	$cat_rs =mysqli_fetch_assoc($cat_query)
)

	?>
	


