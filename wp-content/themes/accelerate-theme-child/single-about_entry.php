<?php
/**
 * The template for displaying About Entires
 *
 * This is the custom post type that displays case studies.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post(); 
                $description = get_field('description');
                $size = "full";
                $image_1 = get_field('image');?>  
            
                <article class="single-about_entry">

                    <aside class="single-about-entry-sidebar">
                        <h1><?php the_title (); ?></h1>
                        <p><?php echo $description; ?></p>
                        <?php the_content(); ?>
                    </aside>

                    <div class="single-about-entry-images">
                    
                        <?php if ($image_1) { 
                            echo wp_get_attachment_image( $image_1, $size );
                        } ?>                   
                        
                    </div>
                </article> <!-- .single-about-entry-sidebar -->
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

    <!-- <nav id="contact" class="container"> -->
    <div id="about-page-contact" class="site-content">
        <div class="about-contact">
			<h1>Interested in working with us?</h1>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
    </div>
    <!-- </nav> -->

<?php get_footer(); ?>
