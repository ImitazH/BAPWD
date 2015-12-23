<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
<!--		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/test.css">-->
		<!--		 Evabeo koreo kaj korche. But eta onek purono system and now a bad practice. Tai evabe na likhe amra function.php te likhe kaj krob. -->

		
		
		<?php wp_head();?>
		
	</head>
	<body>
	
		<header>
			<h2><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h2>   
<!--			eti blog er nam show korbe and seta link hoye jabe. site_url() function er kaj hocche blog er nam er upor click korle home page e niye jabe.-->
			
		
		
		     <?php wp_nav_menu(array(
				'theme_location' => 'header_menu'
		     ));  ?>
		</header>
