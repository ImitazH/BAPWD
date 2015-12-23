<?php get_header(); ?>






<section class="post_area">

	
		<?php
		
			if(have_posts()){
//				echo '  YEs Have psot';
				
				while(have_posts()){
					the_post();
					?>
					
				<div class="single_post">
					<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
					<?php the_post_thumbnail('post-thumb'); ?>
					<?php the_excerpt(); ?>
					<hr>
				</div>
			
			<?php
				}
			}

			else {
				echo " No post here";
			}

 		?>

	
</section>




<?php

get_footer();

?>
