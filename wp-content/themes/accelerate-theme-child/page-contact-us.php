<?php
/**
 * The template for displaying the Contact page which contains a form made with Ninja Forms 
 *
 *  
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section id="contact-form-wrapper">

	<div id="primary" class="contact-form">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
		
	</div><!-- #primary -->

</section>

<?php get_footer(); ?>
