<?php

session_start();
//echo $_SESSION['user'];
if($_SESSION['login'] != "True")
{
    $string = ' Sorry! You have to login first to view this page.';
    echo "<script>alert(\"$string\")</script>";
    echo("<script>location.href='login.php'</script>");
}
else
{


$Email=$_SESSION['user'];

include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

$sql="SELECT * FROM testdb WHERE email='$Email'";
$data = $dbcon->query($sql);
?>

<html>
<head>
    <title>User | Info</title>
</head>
<body>

<a href="logout.php"><button style="background-color: brown; color: white; font-size: larger; float: right;">Logout</button></a>
<center>
<table border="1" style="width: 70%; min-height: 150px; font-size: larger; text-align: center;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>

    </tr>
    <?php
    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
       // print_r($row);
    ?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Email']?></td>
        <td><a href="update.php?id=<?php echo $row['ID']?>" style="text-decoration: none">Edit</a></td>
    </tr>
    <?php } ?>

</table>
</center>
</body>
</html>
<?php
}
?>