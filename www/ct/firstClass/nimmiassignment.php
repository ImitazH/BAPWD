<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="nimmiassignment.php" method="post">
        Give a Number <input type="text" name="number" />
        <input type="submit" name="submit" Value="Submit"/>
    </form>
        <?php
           if(isset($_POST['submit']))
        {
            $number=$_POST['number'];
            $i;
                        echo 'Even Num:';
                        for($i=0;$i<=$number;$i++){
                            if($i%2==0){
                                echo $i;
                            }
                        }
                        echo '<br />';
                        echo 'Odd Num:';
                        for($i=0;$i<=$number;$i++){
                            if($i%2!=0){
                                echo $i;
                            }
                        }
                }
        ?>
    </body>
</html>
