<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if(is_front_page()) :?>
    <section id="home-vid-wrap">
    	<video id="my-video" class="video" poster="<?php bloginfo('template_directory'); ?>/assets/images/bg-header-center.jpg" playsinline autoplay muted loop >
          <source src="<?php bloginfo('template_directory'); ?>/assets/videos/clip-beating.mp4" type="video/mp4">
          <source src="<?php bloginfo('template_directory'); ?>/assets/videos/clip-beating.ogg" type="video/ogg">
          <source src="<?php bloginfo('template_directory'); ?>/assets/videos/clip-beating.webm" type="video/webm">
          Your browser does not support the video tag.
        </video><!-- /video -->
    </section>
<?php endif; ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
