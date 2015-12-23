<?php
include 'dbconnect.php';

$employee_id=$_GET['id'];

$sql="DELETE FROM tariquli_class WHERE  emp_id=$employee_id";
$query = $dbcon->prepare($sql);
$query->execute();
header("Location:index.php");
?>