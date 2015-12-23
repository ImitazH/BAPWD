<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Using Forms</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
       
            <?php
        
        $nameError=$emailError=$passError=$confirmError=$genderError=$dobError="";
        
        if(isset($_POST['submit_data']))
        {
            $username=$_POST['username'];
            $useremail=$_POST['useremail'];
            $userpass=$_POST['userpass'];
            $userpass_again=$_POST['re_eanter_pass'];
            $gender=$_POST['sex'];
            $dob=$_POST['bday'];
            $present_add=$_POST['present_address'];
            $permanent_add=$_POST['permanent_address'];
            
//            echo $username."<br/>";
//            echo $useremail."<br/>";
//            echo $userpass."<br/>";
//            echo $userpass_again."<br/>";
//            echo $gender."<br/>";
//            echo $dob."<br/>";
//            echo $present_add."<br/>";
//            echo $permanent_add."<br/>";
            
            if($username==NULL || $username=="")
            {
                
             $nameError="Username field is required.";   
            }
            
            
            if(($userpass==""||$userpass==NULL)||($userpass_again==""||$userpass_again==NULL))
            {
                if(($userpass==""||$userpass==NULL)&&($userpass_again==""||$userpass_again==NULL))
                {
                    $confirmError="Re-enter field can't be empty.";
                    $passError="Password field can't be empty.";
                }  else if($userpass==""||$userpass==NULL) {
                    $passError="Password field can't be empty.";
                }  else {
                    $confirmError="Re-enter field can't be empty.";
                }
                
            }  else {
                
                if($userpass===$userpass_again)
                {
//                    $confirmError="Password Matched";
                    $confirmError="<p> Password Matched </p>";
                }  else {
                    $confirmError=" <p> Password does not Match </P>";
                }
                
            }
            
            
            if($gender==NULL || $gender=="")
            {

                $genderError="Select Your Gender.";   
            }
            
            
            if($dob==NULL || $dob=="")
            {

                $dobError="Enter your Date of Birth.";   
            }
            
            
            
          
   
            
            
            
        }
        
        ?>
        
        
        <div class="form_practice">
            <table>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <tr>
                    <td>Enter Your Name:</td>
                    <td><input type="text" name="username" size="30"></td>
                    <td><?php echo $nameError;?></td>
                </tr>
                <tr>
                    <td>Enter Your Email:</td>
                    <td><input type="text" name="useremail" size="30"></td>
                    <td><?php echo $emailError;?></td>
                </tr>
                <tr>
                    <td>Enter your password:</td>
                    <td style="border-color:green"><input type="password" name="userpass" size="30"></td>
                    <td><?php echo $passError;?></td>
                </tr>
                <tr>
                    <td>Re-enter your password:</td>
                    <td><input type="password" name="re_eanter_pass" size="30"></td>
                    <td><?php echo $confirmError;?></td>
                </tr>
                
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="sex" value="Male">Male<br/>
                    <input type="radio" name="sex" value="Female">Female</td>
                    <td><?php echo $genderError;?></td>
                </tr>
                
                <tr>
                    <td>Birthday</td>
                    <td><input type="text" name="bday" size="30"/></td>
                    <td><?php echo $dobError;?></td>
                </tr>
                <tr>
                    <td>Present Address</td>
                    <td><textarea cols="25" rows="8" name="present_address" maxlength="200"></textarea></td>
                    
                </tr>
                <tr>
                    <td>Permanent Address</td>
                    <td><textarea rows="8" cols="25" name="permanent_address" maxlength="200"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit_data" value="Create User"></td>
                </tr>
            </form>
            </table>
        </div>
    
    </body>
</html>


