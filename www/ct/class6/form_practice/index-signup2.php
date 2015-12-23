
<!DOCTYPE html> 
<html>
	<head>
		<title>Sky Forms</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<!--		<link rel="stylesheet" href="css/demo.css">-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="sky-forms.css">
		
	</head>
	<body class="bg-cyan">
		<div class="body body-s">
			
			
			<?php

$nameError=$emailError=$passError=$confirmError=$genderError=$dobError="";

if(isset($_POST['submit_data']))
{
	$username=$_POST['username'];
//	$useremail=$_POST['useremail'];
//	$userpass=$_POST['userpass'];
//	$userpass_again=$_POST['re_eanter_pass'];
//	$gender=$_POST['sex'];
//	$dob=$_POST['bday'];
//	$present_add=$_POST['present_address'];
//	$permanent_add=$_POST['permanent_address'];

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

//
//	if(($userpass==""||$userpass==NULL)||($userpass_again==""||$userpass_again==NULL))
//	{
//		if(($userpass==""||$userpass==NULL)&&($userpass_again==""||$userpass_again==NULL))
//		{
//			$confirmError="Re-enter field can't be empty.";
//			$passError="Password field can't be empty.";
//		}  else if($userpass==""||$userpass==NULL) {
//			$passError="Password field can't be empty.";
//		}  else {
//			$confirmError="Re-enter field can't be empty.";
//		}
//
//	}  else {
//
//		if($userpass===$userpass_again)
//		{
//			//                    $confirmError="Password Matched";
//			$confirmError="<p> Password Matched </p>";
//		}  else {
//			$confirmError=" <p> Password does not Match </P>";
//		}
//
//	}
//
//
//	if($gender==NULL || $gender=="")
//	{
//
//		$genderError="Select Your Gender.";   
//	}
//
//
//	if($dob==NULL || $dob=="")
//	{
//
//		$dobError="Enter your Date of Birth.";   
//	}
//
//






}
		?>
			

			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="sky-form">
				<header>Registration form</header>
				



				<fieldset>			
				
		
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="username" placeholder=" Name">
<!--							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>-->
							<b> <?php echo $nameError;?> </b>
						</label>
					</section>		
<!--
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" placeholder="Username">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
-->

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="email" placeholder="Email address" required>
<!--							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>-->
	
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password">
<!--							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>-->
	
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password">
<!--							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>-->
							
							
						</label>
					</section>
				</fieldset>

				<fieldset>
<!--
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="First name">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="Last name">
							</label>
						</section>
					</div>
-->
					
					<section>
						<label class="input">
							<i class="icon-append fa-birthday-cake"></i>
							<input type="text" placeholder="Birthday">
<!--							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>-->
							
						</label>
					</section>	
					

					<section>
						<label class="select">
							<select>
								<option value="0" selected disabled>Gender</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
								<option value="3">Other</option>
							</select>
							<i></i>
						</label>
					</section>

<!--
					<section>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I agree to the Terms of Service</label>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I want to receive news and  special offers</label>
					</section>
-->
		
	
					
					
					<section>
						<label class="textarea">
								<textarea rows="8" cols="46.5" name="permanent_address" placeholder="Present Address ( 200 characters max ) "></textarea>
						</label>
					</section>	
					
					<section>
						<label class="textarea">
							<textarea rows="8" cols="46.5" name="permanent_address" placeholder="Permanent Address ( 200 characters max )"></textarea>
						</label>
					</section>	
					
			
				</fieldset>
				<footer>
					<button type="submit" name="submit_data" class="button">Submit</button>
				</footer>
			</form>

		</div>
	</body>
</html>