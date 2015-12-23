<?php
session_start();
if(isset($_POST['submit']))
{
$_SESSION['fnum']=$_POST['fnum'];
$_SESSION['snum']=$_POST['snum'];

header("Location:page2.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Session Create</title>
    </head>
    <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label>Please Enter First Number</label><br/>
            <input type="number" name="fnum" size="30"/><br/>
            <label>Please Enter second Number</label><br/>
            <input type="number" name="snum" size="30"/><br/>
            <input type="submit" name="submit" value="Next Page"/>
        </form>
        
    </body>
</html>
