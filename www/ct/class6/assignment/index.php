
<!DOCTYPE html> 
<html>
	<head>
		<title> Registration Form </title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">

	</head>
	<body class="bg-cyan">
		<div class="body body-s">


			<?php

$nameError=$emailError=$passError=$confirmError=$genderError=$dobError=$presentError= $permanentError= "";

if(isset($_POST['submit_data']))
{
		$username=$_POST['username'];
		$useremail=$_POST['useremail'];
		$userpass=$_POST['userpass'];
		$userpass_again=$_POST['re_eanter_pass'];
		$dob=$_POST['bday'];
		$present_add=$_POST['present_address'];
		$permanent_add=$_POST['permanent_address'];




	if($username==NULL || $username=="")
	{

		$nameError=" <p> Username field is required. <p>";   
	}

	
		if(($userpass==""||$userpass==NULL)||($userpass_again==""||$userpass_again==NULL))
		{
			if(($userpass==""||$userpass==NULL)&&($userpass_again==""||$userpass_again==NULL))
			{
				$confirmError=" <p> Re-enter field can't be empty. </p> ";
				$passError=" <p> Password field can't be empty. </p> ";
			}  else if($userpass==""||$userpass==NULL) {
				$passError="<p> Password field can't be empty. </p> ";
			}  else {
				$confirmError="<p> Re-enter field can't be empty. </p> ";
			}
	
		}  else {
	
			if($userpass===$userpass_again)
			{
				//                    $confirmError="Password Matched";
				$confirmError=" <h4> <b> Password Matched </b> </h4>";
			}  else {
				$confirmError=" <p> Password does not Match </P>";
			}
	
		}
	
	
	if($dob==NULL || $dob=="")
	{

		$dobError=" <p> Date of Birth is required. <p>";   
	}

	


	if($present_add==NULL || $present_add=="")
	{

		$presentError=" <p> Present Address is required. <p>";   
	}


	if($permanent_add==NULL || $permanent_add=="")
	{

		$permanentError=" <p> Permanent Address is required. <p>";   
	}




}
			?>


			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="sky-form">
				<header>Registration form</header>




				<fieldset>			



					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="username" placeholder=" Name">
							
							
						</label>
						 <?php echo $nameError;?> 
					</section>		


					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="email" name="useremail" placeholder="Email address" required>
							

						</label>
						<?php echo $emailError;?>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="userpass" placeholder="Password">
							

						</label>
						<?php echo $passError;?>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="re_eanter_pass" placeholder="Confirm password">

						</label>
						<?php echo $confirmError;?>
					</section>
				</fieldset>

				<fieldset>


					<section>
						<label class="input">
							<i class="icon-append fa-birthday-cake"></i>
							<input type="text" name="bday" placeholder="Birthday">
	
						</label>
						<?php echo $dobError;?>
					</section>	

					<section>
						<label class="select">
							<select name="sex" >
								<option value="0"   selected disabled>Gender</option>
								<option value="1"  >Male</option>
								<option value="2" >Female</option>
								<option value="3" >Other</option>
							</select>
							<i></i>
						</label>
<!--						<?php echo $genderError;?>-->
					</section>




					<section>
						<label class="textarea">
							<textarea rows="8" cols="46.5" name="present_address" maxlength="200" placeholder="Present Address ( 200 characters max ) "></textarea>
						</label>
						<?php echo $presentError;?>
					</section>	

					<section>
						<label class="textarea">
							<textarea rows="8" cols="46.5" name="permanent_address" maxlength="200" placeholder="Permanent Address ( 200 characters max )"></textarea>
						</label>
						<?php echo $permanentError;?>
					</section>	


				</fieldset>
				<footer>
					<button type="submit" name="submit_data" class="button">Submit</button>
				</footer>
			</form>

		</div>
	</body>
</html>