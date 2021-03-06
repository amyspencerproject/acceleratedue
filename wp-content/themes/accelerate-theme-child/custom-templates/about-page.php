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

<div id="about-hero" class="home-page hero-content"> <!-- can not change this odd "home-page hero-content" class or no background image -->  
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #about-hero -->

<section class="about-page">
	<div class="site-content">
		<div class="service-text">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them. <br>Here's a brief overview of our offered services.</p>
		</div>

		<section class="about-entries">

			<?php query_posts('post_type=about_entry'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$image= get_field('image');
					$size="medium";
					$description = get_field ('description')?>

					<div class="individual-about-entry">
						<div class=about-entry-image>
							<?php echo wp_get_attachment_image($image,$size); ?>
						</div>
							
						<div class="about-entry-text">
							<h3><?php the_title(); ?></h3>
							<p><?php echo $description; ?></p>
						</div>
					</div> <!-- .indivdual-about-entry -->
						
				<?php endwhile; ?> 
			<?php wp_reset_query(); ?>

		</section> <!-- .about-entries -->

	</div><!-- .site-content -->

    <div id="about-page-contact" class="site-content">
        <div class="about-contact">
			<h3>Interested in working with us?</h3>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
    </div> <!-- .site-content -->
</section> <!-- .ct-about-page -->		

<?php get_footer(); ?>
