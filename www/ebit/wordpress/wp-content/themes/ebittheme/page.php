<!--  PAGE.PHP TA KAJ KROCHENA. TAI PORE VIDEO DEKHE ABAR TRY KORTE HOBE. -->



<?php get_header(); 


if(have_posts()){

	while( have_posts() ){ 
		the_post();

?>
		
     <h2><?php the_title(); ?></h2>
     <?php the_content(); ?>
	
	
	<?php
	}
	
}

else{
}


 get_footer();


?>
