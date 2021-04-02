<?php
/**
 * Template Name: About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	<div id="primary" class="about-page">
		<div class="main-content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>


			<h2>Our Services</h2>
			<p>We take pride in our clients and the content we create for them. <br>Here's a brief overview of our offered services.</p>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		<div id="contact" class="about-contact">
			<h1>Interested in working with us?</h1>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
