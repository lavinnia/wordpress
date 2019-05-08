<?php get_header(); 
	if ( have_posts() ) : 
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<!-- comentariu html -->
			<?php the_content(); ?>
			<?php the_date(); ?>
			<?php the_category(); ?>
<?php
			echo '<hr>';
			
		// End the loop.
		endwhile;

		// If no content, include the "No posts found" template.
	else :
		echo 'nu avem posturi';
	endif;
?>
<?php get_footer(); ?>